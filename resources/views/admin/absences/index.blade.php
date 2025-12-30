@extends('layouts.admin')

@section('content')
<h1 class="text-xl font-semibold mb-6">Demandes d’absence en attente</h1>

@if(session('success'))
    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3">Agent</th>
                <th class="p-3">Du</th>
                <th class="p-3">Au</th>
                <th class="p-3">Motif</th>
                <th class="p-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($absences as $absence)
                <tr class="border-t">
                    <td class="p-3 text-center">
                        {{ $absence->user->name ?? $absence->user->email }}
                    </td>
                    <td class="p-3 text-center">{{ $absence->date_debut }}</td>
                    <td class="p-3 text-center">{{ $absence->date_fin }}</td>
                    <td class="p-3 text-center">{{ $absence->motif }}</td>
                    <td class="p-3 text-center flex justify-center gap-2">
                        <form method="POST" action="{{ route('admin.absences.valider', $absence) }}">
                            @csrf
                            @method('PATCH')
                            <button class="bg-green-600 text-white px-3 py-1 rounded">
                                Valider
                            </button>
                        </form>

                        <form method="POST" action="{{ route('admin.absences.rejeter', $absence) }}">
                            @csrf
                            @method('PATCH')
                            <button class="bg-red-600 text-white px-3 py-1 rounded">
                                Rejeter
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="p-4 text-center text-gray-500">
                        Aucune demande en attente
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
