<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DemandeIntervention;
use Illuminate\Http\Request;

class DemandeInterventionController extends Controller
{
    public function index()
    {
        $demandes = DemandeIntervention::latest()->paginate(10);
        return view('admin.demandes.index', compact('demandes'));
    }

    public function show(DemandeIntervention $demande)
    {
        return view('admin.demandes.show', [
        'demande' => $demande
    ]);
    }

    public function updateStatut(Request $request, DemandeIntervention $demande)
    {
        $request->validate([
            'statut' => 'required|in:nouvelle,en_cours,traitee,rejete'
        ]);

        $demande->update([
            'statut' => $request->statut
        ]);

        return back()->with('success', 'Statut mis à jour avec succès.');
    }
}
