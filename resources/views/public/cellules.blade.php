@extends('layouts.public')

@section('title', 'Cellules | SRIT')

@section('content')

{{-- SOUS NAVIGATION --}}
<section>
        <nav class="cellules-nav bg-[#17341F] sticky top-[88px] z-40 shadow-md">
            <div class="container mx-auto flex gap-4 justify-between text-white font-semibold text-[20px]">
                <a href="#maintenance" class="cell-link px-4 py-4 rounded">Maintenance</a>
                <a href="#developpement" class="cell-link px-4 py-4 rounded">Développement</a>
                <a href="#reseau" class="cell-link px-4 py-4 rounded">Réseau &amp; Système</a>
                <a href="#securite" class="cell-link px-4 py-4 rounded">Sécurité</a>
                <a href="#formation" class="cell-link px-4 py-4 rounded">Formation</a>
                <a href="#gestion" class="cell-link px-4 py-4 rounded">Gestion</a>
            </div>
        </nav>
</section>

{{-- CONTENU CELLULES --}}
<section class="py-20 bg-[#EEF3EF]">
    <div class="max-w-7xl mx-auto px-6 space-y-24">

        @php
            $cells = [
                [
                    "id"    => "maintenance",
                    "title" => "Cellule Maintenance",
                    "logo"  => asset("assets/images/maintenance.png"),
                    "desc"  => "Pour garantir un fonctionnement optimal de l'infrastructure informatique, nos spécialistes assurent la maintenance 
                        continue de l’ensemble des équipements et logiciels du Système d’Information, allant de l’entretien des serveurs à la mise à jour 
                        des applications. Ils interviennent pour la réparation et le remplacement des composants défectueux, et assurent la gestion 
                        proactive des pannes afin d'éviter toute interruption dans les services critiques. Nos experts prennent en charge le suivi des 
                        performances des systèmes et interviennent sur le matériel informatique (ordinateurs, imprimantes, périphériques) pour assurer leur
                        longévité et leur bon fonctionnement, tout en anticipant les besoins futurs en termes d’upgrade ou de remplacement.",
                    "img"   => asset("assets/images/infrastructure.jpg"),
                ],
                [
                    "id"    => "developpement",
                    "title" => "Cellule Développement",
                    "logo"  => asset("assets/images/developpement.png"),
                    "desc"  => "SRIT déploie des solutions technologiques innovantes pour vous permettre d’optimiser le développement de votre organisation 
                        et répondre aux nombreux défis auxquels elle doit faire face...",
                    "img"   => asset("assets/images/Idev.jpg"),
                ],
                [
                    "id"    => "reseau",
                    "title" => "Cellule Réseau & Système",
                    "logo"  => asset("assets/images/infogerance.png"),
                    "desc"  => "Pour assurer la stabilité et la performance des systèmes informatiques, nos experts gèrent l’ensemble des infrastructures 
                        réseau et systèmes de l’université...",
                    "img"   => asset("assets/images/Ireseaux.jpg"),
                ],
                [
                    "id"    => "securite",
                    "title" => "Cellule Sécurité",
                    "logo"  => asset("assets/images/securite.png"),
                    "desc"  => "La sécurité des données et des échanges au sein du Système d’Information est primordiale...",
                    "img"   => asset("assets/images/Isecurity.jpg"),
                ],
                [
                    "id"    => "formation",
                    "title" => "Cellule Formation",
                    "logo"  => asset("assets/images/formation.png"),
                    "desc"  => "Dans un environnement technologique en constante évolution, nos équipes offrent des sessions de formation...",
                    "img"   => asset("assets/images/Iformation.jpg"),
                ],
                [
                    "id"    => "gestion",
                    "title" => "Cellule Gestion",
                    "logo"  => asset("assets/images/gestion.png"),
                    "desc"  => "Nos spécialistes en gestion des systèmes informatiques supervisent la planification...",
                    "img"   => asset("assets/images/Igestion.jpg"),
                ],
            ];
        @endphp


        @foreach ($cells as $index => $c)
            @php
                $isLeft  = $index % 2 === 0;
                $imgInit = $isLeft ? '-translate-x-20' : 'translate-x-20';
                $border  = $isLeft ? 'lg:border-l-4 lg:pl-10' : 'lg:border-r-4 lg:pr-10';
            @endphp

            <section id="{{ $c['id'] }}" class="scroll-mt-24">
                <div class="container mx-auto flex flex-col lg:flex-row {{ $isLeft ? '' : 'lg:flex-row-reverse' }} items-center gap-10">

                    <!-- Image -->
                    <div class="lg:w-1/2">
                        <img
                            src="{{ $c['img'] }}"
                            alt=""
                            class="cell-img w-full h-[50vh] rounded-xl shadow-lg object-cover transition-transform duration-700 {{ $imgInit }}">
                    </div>

                    <!-- Texte -->
                    <div class="lg:w-1/2 text-gray-700 leading-relaxed space-y-4 {{ $border }} border-[#162819]">
                        <div class="mb-6 flex items-center gap-4">
                            <img src="{{ $c['logo'] }}"
                                alt="Logo {{ $c['title'] }}"
                                class="w-16 h-16">

                            <h2 class="text-3xl font-bold text-[#162819]">
                                {{ $c['title'] }}
                            </h2>
                        </div>

                        <p>{{ $c['desc'] }}</p>
                    </div>
                </div>
            </section>
        @endforeach


    </div>
</section>

<script>
        document.addEventListener('DOMContentLoaded', () => {
            /* === ScrollSpy sur les sections =================================== */
            const links = document.querySelectorAll('.cell-link');
            const sections = Array.from(document.querySelectorAll('#maintenance,#developpement,#reseau,#securite,#formation,#gestion'));

            const navIO = new IntersectionObserver(
                entries => {
                    entries.forEach(e => {
                        if (e.isIntersecting) {
                            const id = e.target.id;
                            links.forEach(l => {
                                l.classList.toggle('bg-[#3C9E5D]', l.getAttribute('href') === '#' + id);
                                l.classList.toggle('text-[#FFFFFF]/80', l.getAttribute('href') !== '#' + id);
                            });
                        }
                    });
                }, {
                    rootMargin: '-45% 0px -45% 0px',
                    threshold: 0
                }
            );
            sections.forEach(s => navIO.observe(s));

            /* === Animation horizontale des images =============================== */
            const imgs = document.querySelectorAll('.cell-img');
            const imgIO = new IntersectionObserver(
                entries => {
                    entries.forEach(e => {
                        if (e.isIntersecting) {
                            e.target.classList.remove('translate-x-20', '-translate-x-20');
                            imgIO.unobserve(e.target); // une seule fois
                        }
                    });
                }, {
                    threshold: 0.3
                } // quand ~30 % de l’image est visible
            );
            imgs.forEach(img => imgIO.observe(img));
        });
</script>
@endsection
