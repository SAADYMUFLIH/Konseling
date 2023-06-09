<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jadwalController extends Controller
{
    public function jadwal(){
        return view('jadwal.jadwal');
    }
}
