<nav class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex items-center py-4 gap-6">

            {{-- Logo --}}
            <div class="flex items-center gap-3 max-w-[260px] shrink-0">
                <img src="{{ asset('images/logo-ufhb.png') }}"
                     alt="UFHB"
                     class="h-12 w-12 object-contain">

                <span class="font-semibold text-gray-700 hidden lg:block whitespace-nowrap">
                    Service des Ressources Informatiques <br> & Technologiques - UFHB
                </span>
            </div>

            {{-- Menu --}}
            <div class="flex items-center gap-8 font-medium text-gray-700 flex-1 justify-center">
                <a href="{{ route('home') }}"
                   class="hover:text-green-700 whitespace-nowrap {{ request()->routeIs('home') ? 'text-green-700 font-semibold' : '' }}">
                    Accueil
                </a>

                <a href="{{ route('cellules') }}"
                   class="hover:text-green-700 whitespace-nowrap {{ request()->routeIs('cellules') ? 'text-green-700 font-semibold' : '' }}">
                    Cellules
                </a>

                <a href="{{ route('login') }}"
                   class="hover:text-green-700 whitespace-nowrap">
                    Espace agent
                </a>
            </div>

            {{-- CTA --}}
            <div class="shrink-0">
                <a href="{{ route('demande.intervention') }}"
                   class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-full font-semibold transition whitespace-nowrap">
                    Demander une intervention
                </a>
            </div>

        </div>
    </div>
</nav>
