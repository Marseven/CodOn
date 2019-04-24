<?php

namespace App\Http\Controllers\Front;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function show(){

        return view('Front.Users.profil');
    }
}
