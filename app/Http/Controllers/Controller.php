<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    // Kode atau metode umum untuk semua controller dapat diletakkan di sini
}

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome'); // Mengembalikan tampilan welcome.blade.php
    }
}
