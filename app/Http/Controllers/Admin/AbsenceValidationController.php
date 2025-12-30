<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use Illuminate\Http\Request;

class AbsenceValidationController extends Controller
{
    public function index()
    {
        $absences = Absence::with('user')
            ->where('statut', 'en_attente')
            ->latest()
            ->get();

        return view('admin.absences.index', compact('absences'));
    }

    public function valider(Absence $absence)
    {
        $absence->update(['statut' => 'validee']);

        return back()->with('success', 'Demande validée.');
    }

    public function rejeter(Absence $absence)
    {
        $absence->update(['statut' => 'rejetee']);

        return back()->with('success', 'Demande rejetée.');
    }
}
