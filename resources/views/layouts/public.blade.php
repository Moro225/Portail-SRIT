<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portail SRIT - UFHB')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#EEF3EF] text-gray-800">

    <div>
        @include('partials.public.topbar')
    </div>
    <div>
        @include('partials.public.navbar')
    </div>

    <main>
        @yield('content')
    </main>

    @include('partials.public.footer')

</body>
</html>
