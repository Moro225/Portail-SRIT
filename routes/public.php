<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\DemandeInterventionController;

Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/cellules', function () {
    return view('public.cellules');
})->name('cellules');

Route::get('/demande_intervention', function () {
    return view('public.demande-intervention');
})->name('demande.intervention');

Route::get('/demande-intervention', [DemandeInterventionController::class, 'create'])
        ->name('demande.intervention');

Route::post('/demande-intervention', [DemandeInterventionController::class, 'store'])
        ->name('demande.intervention.store');
