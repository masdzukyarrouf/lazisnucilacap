<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/login', function () {
    return view('card_login');
});

Route::get('/daftar', function () {
    return view('card_daftar');
});

Route::get('/campaign', function () {
    return view('campaign');
});