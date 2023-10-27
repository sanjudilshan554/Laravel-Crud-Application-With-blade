<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userLoginIntController extends Controller
{
    
    // calling user login interface
    function login(){
        return view('login.login');
    }

}
