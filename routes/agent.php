<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agent\DashboardController;
use App\Http\Controllers\Agent\AbsenceController;
use App\Http\Controllers\Agent\DocumentController;

Route::middleware(['web', 'auth'])
    ->prefix('agent')
    ->name('agent.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        // Absences
        Route::get('/absences', [AbsenceController::class, 'index'])
            ->name('absences.index');
        Route::get('/absences/create', [AbsenceController::class, 'create'])
            ->name('absences.create');
        Route::post('/absences', [AbsenceController::class, 'store'])
            ->name('absences.store');

        // Documents
        Route::get('/documents', [DocumentController::class, 'index'])
            ->name('documents.index');
        Route::get('/documents/create', [DocumentController::class, 'create'])
            ->name('documents.create');
        Route::post('/documents', [DocumentController::class, 'store'])
            ->name('documents.store');
    });
