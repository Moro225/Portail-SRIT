<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title', 'Espace Agent')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex">

    {{-- Sidebar --}}
    <aside class="w-64 bg-green-900 text-white flex flex-col">
        <div class="p-6 text-xl font-bold">
            SRIT<br>Manager
        </div>

        <nav class="flex-1 space-y-1 px-4">
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

        {{-- Main --}}
        <main class="p-6">
            @yield('content')
        </main>

    </div>
</div>

</body>
</html>
