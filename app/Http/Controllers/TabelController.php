<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelController extends Controller
{
    public function create()
    {
        return view('tabel.upload');
    }

    public function store(Request $request)
    {
        // Validasi file
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,txt|max:2048',
        ]);

        // Simpan file ke storage
        $path = $request->file('file')->store('uploads');

        return redirect()->route('tabel.upload')
                         ->with('success', 'File berhasil diupload ke: ' . $path);
    }
}
