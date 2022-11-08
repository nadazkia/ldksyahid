<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
            "title" => "Login | LDK Syahid",
            "body_class" => "bg-success",
            "active" => "login",
        ]);
    }

    public function forgotPassword()
    {
        return view('forgot-password', [
            "title" => "Lupa Password | LDK Syahid",
            "body_class" => "bg-success",
            "active" => "",
        ]);
    }
}
