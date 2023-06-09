<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guruController extends Controller
{
    public function guru(){
        return view('guru.guru');
    }
}
