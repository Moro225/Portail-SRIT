@extends('layouts.public')

@section('title', 'Demander une intervention | SRIT')

@section('content')

{{-- TITRE --}}
<section class="py-16 bg-[#EEF3EF]">
    <div class="max-w-7xl mx-auto px-6">
        <h1 class="text-2xl font-semibold text-center">
            Demander une intervention
        </h1>
    </div>
</section>

{{-- CONTENU --}}
<section class="pb-24 bg-[#EEF3EF]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            {{-- COLONNE GAUCHE --}}
            <div class="space-y-6">

                {{-- NOUS TROUVER --}}
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <h3 class="font-semibold mb-4">Nous trouver</h3>

                    <p class="text-sm text-gray-700 mb-4">
                        Université Félix Houphouët-Boigny (Cocody)<br>
                        Bâtiment U – 1er étage
                    </p>

                    <p class="text-sm text-gray-700">
                        Tél. :
                        <a href="tel:+2250141041449" class="text-green-700 font-medium">
                            +225 01 41 04 14 49
                        </a>
                        <br>
                        E-mail :
                        <a href="mailto:contact.srit@ufhb.edu.ci" class="text-green-700 font-medium">
                            contact.srit@ufhb.edu.ci
                        </a>
                    </p>
                </div>

                {{-- GOOGLE MAP --}}
                <div class="bg-white rounded-xl shadow-sm p-6 h-72 flex items-center justify-center text-gray-500 text-sm">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.454989606867!2d-3.98806415343638!3d5.347308196252019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ed3922572db3%3A0xe1685f755decfca6!2sB%C3%A2timent%20U%20(UFHB)!5e0!3m2!1sfr!2sci!4v1766070592990!5m2!1sfr!2sci" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

            {{-- COLONNE DROITE : FORMULAIRE --}}
            <div class="lg:col-span-2">
                {{-- MESSAGE SUCCES--}}
                @if(session('success'))
                    <div id="alert-3" class="flex sm:items-center p-4 mb-4 text-sm bg-green-100 text-green-700 rounded-md" role="alert">
                        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-2 text-sm ">
                            {{ session('success') }}
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 rounded focus:ring-2 focus:ring-success-medium p-1.5 hover:bg-success-medium inline-flex items-center justify-center h-8 w-8 shrink-0" data-dismiss-target="#alert-3" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/></svg>
                        </button>
                    </div>
                @endif
                {{-- MESSAGE ERROR--}}
                @if($errors->any())
                    <div id="alert-2" class="flex sm:items-center p-4 mb-4 text-sm bg-red-100 text-red-700 rounded-md" role="alert">
                        <svg class="w-4 h-4 shrink-0 mt-0.5 md:mt-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                        <span class="sr-only">Info</span>
                        <div class="ms-2 text-sm ">
                             <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-danger-soft text-fg-danger-strong rounded focus:ring-2 focus:ring-danger-medium p-1.5 hover:bg-danger-medium inline-flex items-center justify-center h-8 w-8 shrink-0" data-dismiss-target="#alert-2" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/></svg>
                        </button>
                    </div>
                @endif
                <div class="bg-white rounded-xl shadow-sm p-8">

                    <form action="{{ route('demande.intervention.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label class="block text-sm font-medium mb-1">
                                UFR / Direction <span class="text-red-500">*</span>
                            </label>
                            <select name="ufr_direction" class="w-full border rounded-md px-3 py-2">
                                <option>-- Sélectionner --</option>
                                <option value="DAFMG">DAFMG</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1">
                                Service / Département <span class="text-red-500">*</span>
                            </label>
                            <select name="service_departement" class="w-full border rounded-md px-3 py-2">
                                <option>-- Sélectionner --</option>
                                <option value="SRIT">SRIT</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1">
                                Nom complet <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nom_complet" class="w-full border rounded-md px-3 py-2">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" name="email" class="w-full border rounded-md px-3 py-2">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1">
                                Téléphone <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="telephone" class="w-full border rounded-md px-3 py-2">
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1">
                                Objet <span class="text-red-500">*</span>
                            </label>
                            <select name="objet" class="w-full border rounded-md px-3 py-2">
                                <option>-- Sélectionner --</option>
                                <option>Maintenance</option>
                                <option>Développement web</option>
                                <option>Réseau & Système</option>
                                <option>Sécurité</option>
                                <option>Formation</option>
                                <option>Autre</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium mb-1">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea
                                name="message"
                                rows="5"
                                class="w-full border rounded-md px-3 py-2">
                            </textarea>
                        </div>

                        <div>
                            <button type="submit"
                                    class="w-full bg-[#3E9B5F] hover:bg-green-700 text-white font-semibold py-3 rounded-md transition">
                                Envoyer la demande
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection
