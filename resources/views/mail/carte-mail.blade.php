<x-mail::message>
    # Bonjour {{ $etudiant->nom }}

    Votre carte d'étudiant est disponible, veillez passer recupérer.

    Thanks,
    Yann KABORE et Madina DABONE

    <x-mail::button :url="''">
        Télecharger carte
    </x-mail::button>
</x-mail::message>