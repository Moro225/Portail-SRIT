<footer class="bg-[#3E9B5F] text-white pt-14">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Liens --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-10">

            {{-- A PROPOS --}}
            <div>
                <h3 class="font-semibold mb-4 uppercase">À propos</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="https://w.univ-fhb.edu.ci/luniversite-fhb/#histoire" class="hover:underline">Historique</a></li>
                    <li><a href="https://w.univ-fhb.edu.ci/luniversite-fhb/#organisation" class="hover:underline">Organisation</a></li>
                    <li><a href="http://portail-srit.test/#" class="hover:underline">Stratégie / Grands projets</a></li>
                    <li><a href="http://portail-srit.test/#" class="hover:underline">Missions / Vision / Valeurs</a></li>
                </ul>
            </div>

            {{-- FORMATION --}}
            <div>
                <h3 class="font-semibold mb-4 uppercase">Formation</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="https://w.univ-fhb.edu.ci/ufr-ufhb/" class="hover:underline">Les UFR</a></li>
                    <li><a href="https://w.univ-fhb.edu.ci/formation/#domaines_de_formations" class="hover:underline">Programmes</a></li>
                    <li><a href="https://w.univ-fhb.edu.ci/formation/#cufop" class="hover:underline">École / Chaire</a></li>
                    <li><a href="https://w.univ-fhb.edu.ci/formation/#insertion_professionnelle" class="hover:underline">Insertion Professionnelle</a></li>
                </ul>
            </div>

            {{-- RECHERCHE --}}
            <div>
                <h3 class="font-semibold mb-4 uppercase">Recherche</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="https://w.univ-fhb.edu.ci/recherches-innovations/#centre" class="hover:underline">Centres et instituts</a></li>
                    <li><a href="https://w.univ-fhb.edu.ci/le-pole-scientifique-et-dinnovation/" class="hover:underline">Pôles scientifiques</a></li>
                    <li><a href="https://w.univ-fhb.edu.ci/recherches-innovations/#doctorales" class="hover:underline">Formations doctorales</a></li>
                    <li><a href="https://w.univ-fhb.edu.ci/recherches-innovations/#educi" class="hover:underline">Revues scientifiques</a></li>
                </ul>
            </div>

            {{-- ACTUALITÉS --}}
            <div>
                <h3 class="font-semibold mb-4 uppercase">Actualités</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="https://w.univ-fhb.edu.ci/actualites/news/" class="hover:underline">News</a></li>
                    <li><a href="https://w.univ-fhb.edu.ci/actualites/agenda/" class="hover:underline">Agenda</a></li>
                    <li><a href="https://w.univ-fhb.edu.ci/actualites/communiques/" class="hover:underline">Communiqués</a></li>
                    <li><a href="https://w.univ-fhb.edu.ci/documents-officiels" class="hover:underline">Documents officiels</a></li>
                </ul>
            </div>

        </div>

        {{-- Logo --}}
        <div class="flex justify-center py-6">
            <img src="{{ asset('images/logo-ufhb_blanc.png') }}"
                 alt="UFHB"
                 class="h-16 opacity-80">
        </div>

        {{-- Bas de footer --}}
        <div class="border-t border-white/20 py-6 flex flex-col md:flex-row justify-between items-center text-sm">

            <p>© 2025 Université Félix Houphouët-Boigny</p>

            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:underline">Facebook</a>
                <a href="#" class="hover:underline">LinkedIn</a>
                <a href="#" class="hover:underline">Twitter</a>
                <a href="#" class="hover:underline">YouTube</a>
            </div>

        </div>
    </div>
</footer>
