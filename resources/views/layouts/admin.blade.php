<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield('title', 'Dashboard SRIT')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex">

    {{-- Sidebar --}}
    <aside class="w-64 bg-white shadow-md hidden md:block">
        <div class="p-6 font-bold text-lg text-green-700">
            SRIT - UFHB
        </div>

        <nav class="mt-6 space-y-1">
            <a href="{{ route('admin.dashboard') }}"
               class="block px-6 py-3 hover:bg-green-50">
                Tableau de bord
            </a>

            <a href="{{ route('admin.demandes.index') }}"
               class="block px-6 py-3 hover:bg-green-50">
                Demandes
            </a>
        </nav>
    </aside>

    {{-- Main --}}
    <div class="flex-1 flex flex-col">

        {{-- Topbar --}}
        <header class="bg-white shadow-sm h-16 flex items-center justify-between px-6">
            <span class="font-medium">Dashboard SRIT</span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="text-red-600 hover:underline">
                    Déconnexion
                </button>
            </form>
        </header>

        {{-- Content --}}
        <main class="p-6">
            @yield('content')
        </main>

    </div>
</div>

</body>
</html>
