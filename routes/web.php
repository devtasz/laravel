<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/master', function () {
    return view('template.master');
});

Route::get('/formula', function () {
    return view('formula');
});