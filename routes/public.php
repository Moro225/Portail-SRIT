<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/cellules', function () {
    return view('public.cellules');
})->name('cellules');

Route::get('/demande-intervention', function () {
    return view('public.demande-intervention');
})->name('demande.intervention');
