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

// Route::get('/campaign', function () {
//     return view('campaign');
// });

// Route::get('/berita', function () {
//     return view('berita');
// });


Route::get('/', App\Livewire\Landing::class);

Route::get('/campaign', App\Livewire\Campaign::class);

Route::get('/berita', App\Livewire\Berita::class);

// Route::get('/daftar', App\Livewire\Daftar::class);

// Route::get('/login', App\Livewire\Login::class);

Route::get('/detail-berita', App\Livewire\DetailBerita::class);
