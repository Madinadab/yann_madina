<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __("L'ECOLE SUPERIEURE D'INFORMATIQUE DE L’UNIVERSITE NAZI BONI") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Vous êtes connecté !") }}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="{{ asset('image/info.jpg') }}" alt="logo" class="rounded mx-auto d-block" style="width: 100%; height: 100%;">
            </div>

            <div class="col-md-3 offset-1 pt-4">
                <div class="border bg-white h-0 rounded p-3">
                    <img src="{{ asset('image/secretaire.png') }}" alt="logo" class="rounded mx-auto d-block" style="width: 150px; height: 100px;">

                    <a href="{{ route('registersecretaire') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <x-primary-button class="ml-3">
                            <i class="fa-solid fa-user"></i>{{ __('Ajouter une secrétaire') }}
                        </x-primary-button>
                    </a>

                </div><br>
                <div class="border bg-white h-0 rounded p-3">
                    <img src="{{ asset('image/liste.png') }}" alt="logo" class="rounded mx-auto d-block" style="width: 150px; height: 100px;">
                    <a href="{{ route('liste') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <x-primary-button class=" ml-3">
                            <i class="fa-solid fa-list"></i> {{ __('Liste des etudiants') }}
                        </x-primary-button>
                    </a>
                </div>
            </div>

        </div>
    </div>
    @extends('./layouts/footer')
</x-app-layout>