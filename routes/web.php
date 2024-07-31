<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('landing');
// });

Route::get('/login', function () {
    return view('card_login');
});

Route::get('/daftar', function () {
    return view('card_daftar');
});

Route::get('/campaign', function () {
    return view('campaign');
});


Route::get('/', App\Livewire\Landing::class);
