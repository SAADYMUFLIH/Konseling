<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('layout.dashboard');
    }

    public function home(){
        return view('layout.home');
    }
}
