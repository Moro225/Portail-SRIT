<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use Illuminate\Http\Request;

class AbsenceController extends Controller
{
    public function index()
    {
        $absences = Absence::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('agent.absences.index', compact('absences'));
    }

    public function create()
    {
        return view('agent.absences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'motif' => 'required|string|max:255',
            'commentaire' => 'nullable|string'
        ]);

        Absence::create([
            'user_id' => auth()->id(),
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'motif' => $request->motif,
            'commentaire' => $request->commentaire            
        ]);

        return redirect()
            ->route('agent.absences.index')
            ->with('success', 'Demande d\'absence effectuée avec succès.');
    }
}
