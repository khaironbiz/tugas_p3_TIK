<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function forgot(){
        return view('auth.forgotPassword');
    }
    public function getPassword()
    {

    }

}
