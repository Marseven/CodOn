<?php

namespace App\Http\Controllers\Back;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct(){

        $this->middleware('guest');
    }

    public function index(){

        return view('Back.admin');
    }
}
