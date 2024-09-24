<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Jika ada data yang perlu diambil, bisa ditambahkan di sini
        return view('page_web.beranda.beranda');
    }
}
