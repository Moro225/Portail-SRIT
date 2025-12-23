<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DemandeInterventionController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('agent.dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
