@extends('layouts.admin')

@section('content')
@section('title', 'Demandes d’intervention')
<h1 class="text-2xl font-semibold mb-6">Demandes d’intervention</h1>

<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="p-3">Nom</th>
                <th class="p-3">UFR / Direction</th>
                <th class="p-3">Objet</th>
                <th class="p-3">Statut</th>
                <th class="p-3">Date</th>
                <th class="p-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($demandes as $demande)
                <tr class="border-t">
                    <td class="p-3">{{ $demande->nom_complet }}</td>
                    <td class="p-3">{{ $demande->ufr_direction }}</td>
                    <td class="p-3">{{ $demande->objet }}</td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-sm
                            @if($demande->statut === 'nouvelle') text-blue-700
                            @elseif($demande->statut === 'en_cours') text-yellow-700
                            @elseif($demande->statut === 'traitee') text-green-700
                            @else text-red-700 @endif">
                            {{ ucfirst(str_replace('_',' ', $demande->statut)) }}
                        </span>
                    </td>
                    <td class="p-3">{{ $demande->created_at->format('d/m/Y') }}</td>
                    <td class="p-3 text-right">
                        <a href="{{ route('admin.demandes.show', $demande) }}"
                           class="text-green-700 hover:underline">
                            Voir
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $demandes->links() }}
</div>
@endsection
