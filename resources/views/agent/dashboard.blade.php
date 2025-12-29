@extends('layouts.srit')

@section('page-title', 'Tableau de bord')

@section('content')
<div class="bg-green-600 text-white p-6 rounded-lg mb-6 text-center">
    <h2 class="text-xl font-bold">
        SERVICE DES RESSOURCES INFORMATIQUES ET TECHNOLOGIQUES
    </h2>
    <p class="mt-2">
        01 41 04 14 49 | contact.srit@ufhb.edu.ci
    </p>
</div>

<div class="bg-white p-6 rounded-lg shadow mb-6">
    <h3 class="font-semibold mb-4 text-center">
        INFORMATIONS DE L’UTILISATEUR
    </h3>

    <div class="grid grid-cols-3 gap-4 text-center">
        <div>
            <strong>Nom :</strong><br>
            {{ auth()->user()->firstName }}
        </div>
        <div>
            <strong>Prénoms :</strong><br>
            {{ auth()->user()->lastName }}
        </div>
        <div>
            <strong>Email :</strong><br>
            {{ auth()->user()->email }}
        </div>
    </div>
</div>

<div class="grid grid-cols-3 gap-6">
    <div class="bg-green-500 text-white p-4 rounded-lg">
        <p>Demandes envoyées</p>
        <p class="text-2xl font-bold">0</p>
    </div>

    <div class="bg-green-500 text-white p-4 rounded-lg">
        <p>Demandes en attente</p>
        <p class="text-2xl font-bold">0</p>
    </div>

    <div class="bg-green-500 text-white p-4 rounded-lg">
        <p>Nombre de documents</p>
        <p class="text-2xl font-bold">0</p>
    </div>
</div>
@endsection
