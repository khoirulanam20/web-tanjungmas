<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Assuming Article model is in App\Models namespace

class BerandaController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(3)->get(); // Ambil 3 artikel terbaru
        return view('page_web.beranda.beranda', compact('articles'));
    }
}
