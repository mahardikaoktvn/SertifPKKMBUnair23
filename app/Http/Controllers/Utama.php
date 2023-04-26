<?php

namespace App\Http\Controllers;
use App\DataMahasiswa;
use Illuminate\Http\Request;

class Utama extends Controller
{
    public function utama(Request $request)
    {
        $mahasiswa = DataMahasiswa::where('NIM', $request -> NIM)->get();
        return view('welcome',['mahasiswa' => $mahasiswa]);
    }
}
