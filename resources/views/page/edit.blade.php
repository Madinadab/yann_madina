<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __("L'ECOLE SUPERIEURE D'INFORMATIQUE DE L’UNIVERSITE NAZI BONI") }}
        </h2>
    </x-slot>

    <form method="POST" action="/updade/traitement">
        @csrf
        <div class="container">
            <h2 class="text-success opacity-75">Formulaire d'actualisation</h2>
            <div class="row">
                <input type="text" name="id" style="display: none;" value="{{ $etudiants->id }}">
                <div class="col-md-6">
                    <!-- <img src="{{ asset('image/info.jpg') }}" alt="logo" class="rounded mx-auto d-block " style="width: 100%;"> -->
                    <!-- image -->
                    <div class="mt-4">
                        <x-input-label for="image" :value="__('Profil')" />
                        <x-text-input id="image" class="form-select block mt-1 w-full" type="file" name="image" :value="old('image')" required autofocus autocomplete="image" accept="image/jpg, image/png, image/jpeg" value="{{ $etudiants->nom }}" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>
                    <!-- Nom -->
                    <div class="mt-4">
                        <x-input-label for="nom" :value="__('Nom')" />
                        <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" value="{{ $etudiants->nom }}" />
                        <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                    </div>

                    <!-- Prenom -->
                    <div class="mt-4">
                        <x-input-label for="prenom" :value="__('Prenom')" />
                        <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" value="{{ $etudiants->prenom }}" />
                        <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                    </div>

                    <!-- email -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" value="{{ $etudiants->email }}" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <!-- Date de naissance -->
                    <div class="mt-4">
                        <x-input-label for="date_naissance" :value="__('Date de naissance')" />
                        <x-text-input id="date_naissance" class="block mt-1 w-full" type="date" name="date_naissance" :value="old('date_naissance')" required autocomplete="date_naissance" value="{{ $etudiants->date_naissance }}" />
                        <x-input-error :messages="$errors->get('date_naissance')" class="mt-2" />
                    </div>
                    <!-- genre -->
                    <div class="mt-4">
                        <x-input-label for="genre" :value="__('Genre')" />
                        <select class="select form-select" name="genre" id="filliere" value="{{ $etudiants->genre }}" required>
                            <option value="">-- Sélectionnez --</option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>
                        <x-input-error :messages="$errors->get('genre')" class="mt-2" />
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Filliere -->
                    <div class="mt-4">
                        <x-input-label for="filliere" :value="__('Fillière')" />
                        <x-text-input id="filliere" class="block mt-1 w-full" type="text" name="filliere" :value="old('filliere')" required autocomplete="filliere" value="{{ $etudiants->filliere }}" />
                        <x-input-error :messages="$errors->get('filliere')" class="mt-2" />
                    </div>

                    <!-- Nationalité -->
                    <div class="mt-4">
                        <x-input-label for="nationalite" :value="__('Nationalité')" />
                        <x-text-input id="nationalite" class="block mt-1 w-full" type="text" name="nationalite" :value="old('nationalite')" required autocomplete="nationalite" value="{{ $etudiants->nationalite }}" />
                        <x-input-error :messages="$errors->get('niveau_etude')" class="mt-2" />
                    </div>
                    <!-- Niveau d'etude -->
                    <div class="mt-4">
                        <x-input-label for="niveau_etude" :value="__('Niveau Etude')" />
                        <select class="select form-select" id="niveau_etude" value="{{ $etudiants->niveau_etude }}" name="niveau_etude" required>
                            <option value="">-- Sélectionnez --</option>
                            <option value="masculin">1ere Année</option>
                            <option value="feminin">2e Année</option>
                            <option value="feminin">3e Année</option>
                        </select>
                        <x-input-error :messages="$errors->get('niveau_etude')" class="mt-2" />
                    </div>

                    <!-- cycle -->
                    <div class="mt-4">
                        <x-input-label for="cycle" :value="__('Cycle')" />
                        <select class="select form-select" id="cycle" name="cycle" value="{{ $etudiants->cycle }}" required>
                            <option value="">-- Sélectionnez --</option>
                            <option value="masculin">Licence</option>
                            <option value="feminin">Master</option>
                            <option value="feminin">Doctorat</option>
                        </select>
                        <x-input-error :messages="$errors->get('cycle')" class="mt-2" />
                    </div>

                    <!-- Annee Academique -->
                    <div class="mt-4">
                        <x-input-label for="annee_academique" :value="__('Année Academique')" />

                        <x-text-input id="annee_academique" class="block mt-1 w-full" type="text" name="annee_academique" required autocomplete="annee_academique" value="{{ $etudiants->annee_academique }}" />

                        <x-input-error :messages="$errors->get('annee_academique')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify mt-4">
                        <x-primary-button class="ml-4">
                            <i class="fa-solid fa-registered"></i> {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>

    </form>



    @extends('./layouts/footer')
</x-guest-layout>
<a href="{{ route('liste') }}">
    <x-primary-button class=" ml-3">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        {{ __('Retour') }}
    </x-primary-button></a>