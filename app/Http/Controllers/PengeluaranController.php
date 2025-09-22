<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function upload()
    {
        return view('pengeluaran.upload');
    }

    public function daftar()
    {
        return view('pengeluaran.daftar');
    }

    public function perubahan()
    {
        return view('pengeluaran.perubahan');
    }

    public function hasilKonserda()
    {
        return view('pengeluaran.hasil');
    }
}
