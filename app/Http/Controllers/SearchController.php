<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q'); // ambil input dari form "q"
        
        // Untuk sementara, tampilkan hasil pencarian saja
        return view('search.result', compact('query'));
    }
}
