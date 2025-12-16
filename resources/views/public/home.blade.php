@extends('layouts.public')

@section('title', 'Accueil | Portail SRIT')

@section('content')

{{-- HERO --}}
<section class="bg-[#17341F] text-white py-28">
    <div class="max-w-5xl mx-auto text-center px-6">
        <h1 class="text-3xl md:text-4xl font-bold leading-relaxed">
            Bienvenu sur le portail officiel du <br>
            Service des Ressources Informatiques & Technologiques de
            l’Université Félix Houphouët-Boigny
        </h1>
    </div>
</section>

{{-- ACTIVITÉS --}}
<section class="py-20 bg-[#EEF3EF]">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-xl font-semibold mb-12">Nos activités</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:mt-6">

            @php
                $activites = [
                    ['title' => 'Maintenance Informatique', 'link' => '#', 'desc' => 'Assurer le bon fonctionnement et la réparation des équipements informatiques de l’Université.', 'img' => 'maintenance.png'],
                    ['title' => 'Développement web', 'link' => '#', 'desc' => 'Créer et maintenir les sites et applications web pour les différents services de l’Université.', 'img' => 'dev_web.png'],
                    ['title' => 'Réseau & Système', 'link' => '#', 'desc' => 'Gérer le réseau et l’accès aux ressources informatiques de l’Université.', 'img' => 'res_sys.png'],
                    ['title' => 'Sécurité Informatique', 'link' => '#', 'desc' => 'Garantir la protection des données et des systèmes informatiques de l’UFHB.', 'img' => 'secure.png'],
                    ['title' => 'Formations', 'link' => '#', 'desc' => 'Organisation de sessions de formation pour le personnel administratif et technique.', 'img' => 'formations.png'],
                    ['title' => 'Gestion', 'link' => '#', 'desc' => 'Gérer l’inventaire, l’entretien et la distribution des équipements informatiques.', 'img' => 'gestion.png'],
                ];
            @endphp

            @foreach($activites as $activite)
                <div class="flex justify-center">
                    <a href="">
                        <div class="relative bg-white border border-[#162819] rounded-lg shadow p-6 transition-all duration-300 hover:-translate-y-2 hover:bg-[#162819] hover:text-white group" data-aos="fade-up" data-aos-duration="1000">
                            <div class="absolute -top-4 -left-4 bg-[#3C9E5D] p-2 rounded-full shadow">
                                <img src="{{ asset('images/' . $activite['img']) }}"
                                    alt="{{ $activite['title'] }}"
                                    class="w-8 h-8"
                                >
                            </div>
                            <h3 class="text-xl font-semibold text-[#162819] mb-2 mt-4 group-hover:text-white">{{ $activite['title'] }}</h3>
                            <p class="text-gray-600 group-hover:text-white">
                                {{ $activite['desc'] }}
                            </p>
                            <button class="absolute bottom-0 right-0 text-white p-2 text-3xl rounded-md">+</button>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>

{{-- ACTUALITÉS --}}
<section class="py-20 bg-[#F6F8F6]">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-xl font-semibold">Actualités</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:mt-6">

            @for($i = 0; $i < 3; $i++)
                <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-44 bg-gray-200 flex items-center justify-center text-gray-500">
                        Image
                    </div>

                    <div class="p-5">
                        <div class="text-xs text-gray-500 mb-2">
                            Formation • Publié le 01/01/2026
                        </div>

                        <p class="text-sm text-gray-700 mb-4">
                            Dans le cadre du renforcement des compétences des agents du SRIT, la DAFMG a mis en place un programme de formation spécialisé...
                        </p>

                        <a href="#" class="text-sm font-semibold hover:underline">
                            Lire la suite
                        </a>
                    </div>
                </div>
            @endfor

        </div>
    </div>
</section>

{{-- MOT DU DIRECTEUR --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-xl font-semibold mb-12">
            Mot du Directeur
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">

            {{-- Photo --}}
            <div class="flex justify-center">
                <div class="w-48 h-48 rounded-full bg-gray-200 overflow-hidden">
                    {{-- Image du directeur --}}
                    <img src="{{ asset('images/directeur-srit.jpg') }}"
                         alt="Directeur du SRIT"
                         class="w-full h-full object-cover">
                </div>
            </div>

            {{-- Texte --}}
            <div class="md:col-span-2">
                <p class="text-gray-700 mb-4 leading-relaxed">
                    Le Service des Ressources Informatiques et Technologiques (SRIT)
                    joue un rôle stratégique dans la transformation numérique de
                    l’Université Félix Houphouët-Boigny.
                </p>

                <p class="text-gray-700 mb-4 leading-relaxed">
                    À travers ce portail, nous souhaitons faciliter la communication
                    entre le SRIT et l’ensemble des services de l’Université, améliorer
                    la prise en charge des demandes et renforcer l’efficacité de nos interventions.
                </p>

                <p class="text-gray-700 leading-relaxed">
                    Nous vous remercions pour votre confiance et restons engagés à
                    fournir des services informatiques fiables, sécurisés et adaptés
                    aux besoins de notre institution.
                </p>

                <div class="mt-6">
                    <p class="font-semibold text-gray-900">
                        M. DIAKO IBRAHIME
                    </p>
                    <p class="text-sm text-gray-600">
                        Directeur du Service des Ressources Informatiques et Technologiques
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection
