@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-semibold mb-6">Détail de la demande</h1>

@if(session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white shadow rounded-lg p-6 space-y-4">
    <p><strong>Nom :</strong> {{ $demande->nom_complet }}</p>
    <p><strong>Email :</strong> {{ $demande->email }}</p>
    <p><strong>Téléphone :</strong> {{ $demande->telephone }}</p>
    <p><strong>UFR / Direction :</strong> {{ $demande->ufr_direction }}</p>
    <p><strong>Service :</strong> {{ $demande->service_departement }}</p>
    <p><strong>Objet :</strong> {{ $demande->objet }}</p>
    <p><strong>Message :</strong></p>
    <div class="border rounded p-3 bg-gray-50">
        {{ $demande->message }}
    </div>

    <form action="{{ route('admin.demandes.updateStatut', $demande) }}"
          method="POST"
          class="mt-6 flex items-center gap-4">
        @csrf
        @method('PATCH')

        <select name="statut" class="border rounded px-3 py-2">
            <option value="nouvelle" @selected($demande->statut === 'nouvelle')>Nouvelle</option>
            <option value="en_cours" @selected($demande->statut === 'en_cours')>En cours</option>
            <option value="traitee" @selected($demande->statut === 'traitee')>Traitée</option>
            <option value="rejete" @selected($demande->statut === 'rejete')>Rejetée</option>
        </select>

        <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Mettre à jour
        </button>
    </form>
</div>
@endsection
