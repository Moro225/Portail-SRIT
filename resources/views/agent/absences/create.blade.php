@extends('layouts.srit')

@section('page-title', 'Nouvelle demande d’absence')

@section('content')

<form action="{{ route('agent.absences.store') }}" method="POST"
      class="">
    @csrf

    <div class="flex flex-row gap-2">
        <div class="mb-4 w-1/2">
            <label class="block mb-1">Date de début</label>
            <input type="date" name="date_debut" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4 w-1/2">
            <label class="block mb-1">Date de fin</label>
            <input type="date" name="date_fin" class="w-full border rounded px-3 py-2" required>
        </div>
    </div>

    <div class="flex flex-row gap-2">
        <div class="mb-4 w-1/2">
            <label class="block mb-1">Motif</label>
            {{-- <input type="text" name="motif" class="w-full border rounded px-3 py-2" required> --}}
            <select name="motif" id="motif" class="w-full border rounded px-3 py-2" required>
                <option value="maladie">Médical</option>
                <option value="personnel">Personnel</option>
                <option value="professionnel">Professionnel</option>
                <option value="autres">Autres</option>
            </select>
        </div>

        <div class="mb-4 w-1/2">
            <label class="block mb-1">Commentaire (optionnel)</label>
            <textarea name="commentaire" class="w-full border rounded px-3 py-2"></textarea>
        </div>
    </div>

    <button class="bg-[#3C9E5D] text-white px-4 py-2 rounded">
        Envoyer la demande
    </button>
</form>

@endsection
