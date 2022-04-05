<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  
    public function signup(){

        return view('template.sign_up');
    }
    public function login(){

        return view('template.log_in');
    }
}
