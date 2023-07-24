<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight">
            {{ __("L'ECOLE SUPERIEURE D'INFORMATIQUE DE L’UNIVERSITE NAZI BONI") }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('registersecretaire') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-4">
                <i class="fa-solid fa-registered"></i> {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>