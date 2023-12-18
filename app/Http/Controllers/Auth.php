<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller{

    public function login(){

        return view('login', ['title' => 'Login']);

    }
    public function register(){

        return view('register', ['title' => 'Register']);
        
    }
    
}
