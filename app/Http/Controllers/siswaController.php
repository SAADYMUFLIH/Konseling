<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function siswa(){
        $data = siswa::all();
        return view('siswa.siswa', compact('data'));
    }

    public function tambahsiswa(){
        return view('siswa.tambahsiswa');
    }

    public function insertsiswa(Request $request){
        siswa::create($request->all());
        return redirect()->route('siswa');
    }

    public function tampilsiswa($id){
        $data = siswa::find($id);
        return view('siswa.tampilsiswa',compact('data'));
    }
    
    public function updatesiswa(Request $request, $id){
        $data = siswa::find($id);
        $data->update($request->all());
        return redirect()->route('siswa');
    }

    public function deletesiswa($id){
        $data = siswa::find($id);
        $data->delete();
        return redirect()->route('siswa');
    }

}
