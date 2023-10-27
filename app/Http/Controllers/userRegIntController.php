<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userRegIntController extends Controller
{
    // calling register interface
    function register(){
        return view('registration.registration');
    }
}
