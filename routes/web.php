<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/aboutts', function () {
    return view('aboutts');
});
