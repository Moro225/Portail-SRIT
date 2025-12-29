<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>@yield('title', 'Espace Agent')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#E7EEEA]">

<div class="min-h-screen flex">

    {{-- Sidebar --}}
    <aside class="w-64 bg-[#162819] text-white flex flex-col">
        <div class="p-6 text-xl font-bold text-center">
            SRIT Manager
        </div>

        <nav class="flex-1 space-y-4 px-4 mt-6">
            <a href="{{ route('agent.dashboard') }}"
               class="block py-2 px-3 rounded hover:bg-green-800">
                Tableau de bord
            </a>

            <a href="{{ route('agent.absences.index') }}"
               class="block py-2 px-3 rounded hover:bg-green-800">
                Mes demandes
            </a>

            <a href="{{ route('agent.documents.index') }}"
               class="block py-2 px-3 rounded hover:bg-green-800">
                Mes documents
            </a>

            <a href="#"
               class="block py-2 px-3 rounded hover:bg-green-800">
                Mon compte
            </a>
        </nav>

        <form method="POST" action="{{ route('logout') }}" class="p-4">
            @csrf
            <button class="text-red-300 hover:text-red-500">
                Déconnexion
            </button>
        </form>
    </aside>

    {{-- Contenu --}}
    <div class="flex-1 flex flex-col">

        {{-- Header --}}
        <header class="bg-white shadow h-16 flex items-center px-6">
            <h1 class="text-lg font-semibold">@yield('page-title')</h1>
        </header>

        {{-- Informations utilisateurs --}}
        <div class="bg-[#3C9E5D] text-white p-6 rounded-md mb-4 text-center shadow-lg">
            <h2 class="text-xl font-bold">
                SERVICE DES RESSOURCES INFORMATIQUES ET TECHNOLOGIQUES
            </h2>
            <p class="mt-2">
                01 41 04 14 49 | contact.srit@ufhb.edu.ci
            </p>
        </div>

        <div class="bg-[#F3F4F6] p-6 rounded-lg shadow-lg mb-4">
            <h3 class="font-semibold md:pb-2 mb-4 text-center border-b-1 border-b-slate-200">
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

        {{-- Main --}}
        <main class="p-6">
            @yield('content')
        </main>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>
</html>
