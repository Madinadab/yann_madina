<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/all.css') }}" rel="stylesheet">
    <style>
        .container {
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
            padding: 10px;
        }

        .cloture {
            border: 1px solid #000;
            width: 50%;
            margin: 4rem 20rem;
        }
    </style>
</head>

<body>

    <div class="cloture">
        <div class="container bg-dark opacity-75 text-success">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('image/logo.jpeg') }}" alt="logo" class=" rounded-5 rounded fill-current text-gray-500" style="width: 3cm; height: 2cm;">
                </div>
                <div class="col-md-6">
                    <h3>Université Nazi Boni De Bobo Dioulasso</h3>
                </div>
            </div>
        </div>
        <h3 class="text-danger text-center">La carte d'etudiant</h3><br>

        <h4>Nom : {{ $etudiants->nom }}</h4>
        <h4>Prenon : {{ $etudiants->prenom }}</h4>
        <h4>Date de naissance : {{ $etudiants->date_naissance}}</h4>
        <h4>Genre : {{ $etudiants->genre }}</h4>
        <h4>Filliere : {{ $etudiants->filliere }}</h4>
        <h4>Nationalité : {{ $etudiants->nationalite }}</h4>
        <h4>Niveau d'etude : {{ $etudiants->niveau_etude }}</h4>
        <h4>Cycle : {{ $etudiants->cycle }}</h4>
        <h4>Année Academique : {{ $etudiants->annee_academique }}</h4>
    </div>

    <a href="{{ route('liste') }}">
        <x-primary-button class=" ml-3">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            {{ __('Retour') }}
        </x-primary-button></a>

    <a href="{{ route('mail',$etudiants->id) }}">
        <x-primary-button class=" ml-3">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            {{ __('Envoyer la carte') }}
        </x-primary-button></a>
</body>

</html>