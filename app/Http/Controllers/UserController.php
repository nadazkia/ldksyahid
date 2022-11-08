<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard', [
            "title" => "Dashboard | LDK Syahid",
            "active" => "dashboard"
        ]);
    }
    public function calendar()
    {
        return view('calendar', [
            "title" => "Calendar | LDK Syahid",
            "active" => 'calendar'
        ]);
    }

    public function help()
    {
        return view('help', [
            "title" => "Help | LDK Syahid",
            "active" => "help"
        ]);
    }
}
