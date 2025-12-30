<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DemandeInterventionController;
use App\Http\Controllers\Admin\AbsenceValidationController;

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

Route::middleware(['web', 'auth', 'chefOrAdmin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/absences', [AbsenceValidationController::class, 'index'])
            ->name('absences.index');

        Route::patch('/absences/{absence}/valider', [AbsenceValidationController::class, 'valider'])
            ->name('absences.valider');

        Route::patch('/absences/{absence}/rejeter', [AbsenceValidationController::class, 'rejeter'])
            ->name('absences.rejeter');
});
