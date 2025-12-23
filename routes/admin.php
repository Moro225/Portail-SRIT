<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DemandeInterventionController;

Route::middleware(['web', 'auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('/demandes', [DemandeInterventionController::class, 'index'])
            ->name('demandes.index');

        Route::get('/demandes/{demande}', [DemandeInterventionController::class, 'show'])
            ->name('demandes.show');

        Route::patch('/demandes/{demande}/statut', [DemandeInterventionController::class, 'updateStatut'])
            ->name('demandes.updateStatut');
    });
