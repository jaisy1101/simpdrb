<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LapanganUsahaController extends Controller
{
    public function upload()
    {
        return view('lapangan.upload');
    }

    public function daftar()
    {
        return view('lapangan.daftar');
    }

    public function perubahan()
    {
        return view('lapangan.perubahan');
    }

    public function hasilKonserda()
    {
        return view('lapangan.hasil');
    }
}