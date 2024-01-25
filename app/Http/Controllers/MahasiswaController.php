<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        return view('mahasiswa');
    }
    public function store(Request $request){
        $request -> validate([
            'nama' => 'required|max:32',
            'nim' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
            'sks' => 'required',
            'ipk' => 'required',
        ]);
        $mahasiswa = new Mahasiswa();
        $mahasiswa ->nama = $request->input('nama');
        $mahasiswa ->nim = $request->input('nim');
        $mahasiswa ->jurusan = $request->input('jurusan');
        $mahasiswa ->fakultas = $request->input('fakultas');
        $mahasiswa ->sks = $request->input('sks');
        $mahasiswa ->ipk = $request->input('ipk');
        $mahasiswa ->save();

        return redirect()->back()->with('success', 'data tersimpen alhamdulillahirobbilalamin');
    }
}
