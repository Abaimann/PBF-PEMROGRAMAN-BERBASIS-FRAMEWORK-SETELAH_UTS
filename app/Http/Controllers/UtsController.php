<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uts;

class UtsController extends Controller
{
    // menampilkan semua data uts
    public function index()
    {
        $data = Uts::all(); 
        return view('uts.index', compact('data'));
    }

    // halaman pemrograman
    public function pemrograman()
    {
        return view('uts.pemrograman');
    }

    // halaman database
    public function database()
    {
        return view('uts.database');
    }
}
