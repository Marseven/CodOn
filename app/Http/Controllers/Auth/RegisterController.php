<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function register(Request $request)
    {
        $this->validatorMember($request->only('experience', 'nom', 'localisation', 'recuperationEmail', 'jobs', 'bio'));
        $this->validator($request->only('name', 'email', 'password', 'password_confirmation'))->validate();
        $user = $this->create($request->only('name', 'email', 'password', 'password_confirmation'));

        event(new Registered($user));
        if ($user) {
            $this->createMember($request->only('experience', 'nom', 'localisation', 'recuperationEmail', 'jobs', 'bio'), $user->id);
        }
        return redirect('/login')->with('success', 'votre compte a bien été créé, valider votre inscription avec le lien reçu par mail');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function validatorMember(array $data) {

        return Validator::make($data, [
            'nom' => 'required|string|max:255',
            'recuperationEmail' => 'required|string|email|max:255|unique:members',
            'experience' => 'required',
            'jobs' => 'string|max:255',
            'localisation' => 'string|max:255',
            'bio' => 'string|max:255'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function createMember (array $data, $user) {

        return Member::create([
            'nom' => $data['nom'],
            'bio' => $data['bio'],
            'experience' => $data['experience'],
            'localisation' => $data['localisation'],
            'jobs' => $data['jobs'],
            'recuperationEmail' => $data['recuperationEmail'],
            'user_id' => $user
        ]);
    }
}
