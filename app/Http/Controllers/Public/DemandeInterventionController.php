<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\DemandeIntervention;
use Illuminate\Http\Request;

class DemandeInterventionController extends Controller
{
    public function create() 
    {
        return view('public.demande-intervention');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ufr_direction' => 'required|string|max:255',
            'service_departement' => 'required|string|max:255',
            'nom_complet' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:50',
            'objet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        DemandeIntervention::create($validated);

        return redirect()
                ->route('demande.intervention')
                ->with('success', 'Votre demande a été envoyée avec succès. Le SRIT vous contactera dans les plus brefs délais.');
    }
}
