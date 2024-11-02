<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Mengembalikan tampilan welcome.blade.php
});
