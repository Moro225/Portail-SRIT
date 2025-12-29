@extends('layouts.srit')

@section('page-title', 'Mes demandes d’absence')

@section('content')

@if(session('success'))
    {{-- <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        {{ session('success') }}
    </div> --}}

    <div id="alert-3" class="flex sm:items-center p-4 mb-4 text-sm text-green-700 rounded-base bg-green-100" role="alert">
        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
        <span class="sr-only">Info</span>
        <div class="ms-2 text-sm ">
            {{ session('success') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 rounded focus:ring-2 focus:ring-success-medium p-1.5 hover:bg-success-medium inline-flex items-center justify-center h-8 w-8 shrink-0 shrink-0" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/></svg>
        </button>
    </div>
@endif

<div class="mb-4 text-right">
    <a href="{{ route('agent.absences.create') }}"
       class="bg-green-600 text-white px-4 py-2 rounded">
        Nouvelle demande
    </a>
</div>

<div class="bg-white rounded shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3">Du</th>
                <th class="p-3">Au</th>
                <th class="p-3">Motif</th>
                <th class="p-3">Statut</th>
            </tr>
        </thead>
        <tbody>
            @forelse($absences as $absence)
                <tr class="border-t">
                    <td class="p-3">{{ $absence->date_debut }}</td>
                    <td class="p-3">{{ $absence->date_fin }}</td>
                    <td class="p-3">{{ $absence->motif }}</td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-sm
                            @if($absence->statut === 'en_attente') text-yellow-700
                            @elseif($absence->statut === 'validee') text-green-700
                            @else text-red-700 @endif">
                            {{ ucfirst(str_replace('_',' ', $absence->statut)) }}
                        </span>
                    </td>
                </tr>   
            @empty
                <tr>
                    <td colspan="4" class="p-4 text-center text-gray-500">
                        Aucune demande d’absence
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
