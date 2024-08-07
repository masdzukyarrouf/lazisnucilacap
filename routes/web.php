<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('landing');
// });


Route::middleware('auth')->group(function () {

    Route::get('/admin', App\Livewire\Admin\Index::class)->name('admin');
    Route::get('/user', App\Livewire\User\Index::class)->name('user');
});


Route::get('/', App\Livewire\Landing::class);

Route::get('/campaign', App\Livewire\Campaign::class);

Route::get('/berita', App\Livewire\Berita::class)->name('berita');

Route::get('/daftar', App\Livewire\Daftar::class);

Route::get('/login', App\Livewire\Login::class)->name('login')->middleware('guest');

Route::get('/detail-berita', App\Livewire\DetailBerita::class);

Route::get('/landing-mobile', App\Livewire\LandingMobile::class);

Route::get('/detail-campaign', App\Livewire\DetailCampaign::class);

Route::post('logout', App\Http\Controllers\logout::class)->name('logout');

