<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CastController;

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
route::get('/genre/create', [GenreController::class,'create'])->name('genre.create');
route::post('/genre', [GenreController::class,'store'])->name('genre.store');
route::get('/genre', [GenreController::class,'index'])->name('genre.index');
route::get('/genre/{id}', [GenreController::class,'show'])->name('genre.show');
route::put('/genre/{id}', [GenreController::class,'update'])->name('genre.update');
route::get('/genre/{id}/edit', [GenreController::class,'edit'])->name('genre.edit');
route::delete('/genre/{id}', [GenreController::class,'destroy'])->name('genre.delete');

route::get('/cast/create', [CastController::class,'create'])->name('cast.create');
route::post('/cast', [CastController::class,'store'])->name('cast.store');
route::get('/cast', [CastController::class,'index'])->name('cast.index');
route::get('/cast/{id}', [CastController::class,'show'])->name('cast.show');
route::put('/cast/{id}', [CastController::class,'update'])->name('cast.update');
route::get('/cast/{id}/edit', [CastController::class,'edit'])->name('cast.edit');
route::delete('/cast/{id}', [CastController::class,'destroy'])->name('cast.delete');