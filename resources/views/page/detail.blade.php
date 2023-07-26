<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/all.css') }}" rel="stylesheet">
    <style>
        /* .container {
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
            padding: 10px;
        }

        .cloture {
            border: 1px solid #000;
            width: 50%;
            margin: 4rem 20rem;
        } */

        /**codepen */
        @import url('https://fonts.googleapis.com/css?family=Bitter|Arvo|ato&display=swap');

        body {
            background-image: url(https://mangetoica.com/gallery_images/homepage/background-mosaiques//bg.png);
            display: flex;
        }

        h1,
        h2,
        p {
            margin: 0;
        }

        h1 {
            font-family: 'Arvo', serif;
            font-weight: lighter;
            font-size: 25px;
        }

        .cardtitle {
            font-family: 'Bitter', serif;
            font-weight: bold;
        }

        p {
            font-family: 'Lato', sans-serif;
            display: inline-block;
            margin: 5px 1px;
            font-size: 15px;
        }

        #card {
            border: solid 2px #000;
            border-radius: 10px;
            box-shadow: 1px 2px 10px #000;
            background-color: #E9EEF2;
            margin: auto;
        }

        #card-title {
            padding: 5px;
            color: #fff;
            letter-spacing: 2px;
            text-align: center;
            text-transform: uppercase;
            background-color: #2C6C73;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        #card-id {
            padding: 5px;
            display: flex;
        }

        #card-number {
            display: inherit;
            margin-right: 50px;
        }

        #card-information {
            display: flex;
            padding: 5px;
        }

        #card-photo {
            /* background: url(https://www.habbo.fr/habbo-imaging/avatarimage?hb=image&user=null&headonly=0&direction=3&head_direction=3&action=&gesture=&size=l) no-repeat, #BFAE99; */
            background-position: center;
            background-repeat: none;
            border: solid 2px #000;
            height: 150px;
            width: 150px;
        }

        #card-detail {
            display: flex;

        }

        .card-box {
            margin-right: 20px;
        }

        #cardsign {

            background-position: center;
            height: 38px;
            width: 350px;
        }

        #card-code {
            padding: 5px;
            background-color: #fff;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }
    </style>
</head>

<body>
    <div id="card">
        <div id="card-title">
            <h1>ECOLE SUPERIEURE D'INFORMATIQUE</h1>
        </div>
        <div id="card-id">
            <div id="card-number">
                <p class="cardtitle">Matricule :</p>
                <p>000 2023 00{{ $etudiants->id }}</p>
            </div>
            <p class="cardtitle">Nationalité {{ $etudiants->nationalite }}</p>

        </div>
        <div id="card-information">
            <div id="card-photo">
                @if ($etudiants->image)
                <img src="{{ asset('image/' . $etudiants->image) }}" alt="photo de l'étudiant" width="100%" height="100%">
                @endif
            </div>
            <div id="card-text">
                <div id="card-name">
                    <div class="card-box"></div>
                    <p class="cardtitle">Nom :</p>
                    <p>{{ $etudiants->nom }}</p>
                    <div class="card-box"></div>
                    <p class="cardtitle">Prénom :</p>
                    <p>{{ $etudiants->prenom }}</p>
                </div>
                <div id="card-detail">
                    <div class="card-box">
                        <p class="cardtitle">Sexe :</p>
                        <p>{{ $etudiants->genre }}</p>
                    </div>
                    <div class="card-box">
                        <p class="cardtitle">Né(e) le :</p>
                        <p>{{ $etudiants->date_naissance}}</p>
                    </div>
                </div>
                <div id="card-detail">
                    <div class="card-box">
                        <p class="cardtitle">{{ $etudiants->niveau_etude }} de {{ $etudiants->cycle }}</p>
                    </div>
                    <div class="card-box">
                        <p class="cardtitle">Fillière :</p>
                        <p>{{ $etudiants->filliere }}</p>
                    </div>

                </div>
            </div>
        </div>
        <div id="card-code">
            <p class=" text-center">
                Année Academique : {{ $etudiants->annee_academique }} </p>
        </div>
    </div>

    <!-- <div class="cloture">
        <div class="container bg-dark text-success">
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
        <div class="row">
            <div class="col-md-6">
                <h5>Matricule : {{ $etudiants->id }}</h5>
                <h5>Nom : {{ $etudiants->nom }}</h5>
                <h5>Prenon : {{ $etudiants->prenom }}</h5>
                <h5>Date de naissance : {{ $etudiants->date_naissance}}</h5>
                <h5>Genre : {{ $etudiants->genre }}</h5>
                <h5>Filliere : {{ $etudiants->filliere }}</h5>
                <h5>Nationalité : {{ $etudiants->nationalite }}</h5>
                <h5>Niveau d'etude : {{ $etudiants->niveau_etude }}</h5>
                <h5>Cycle : {{ $etudiants->cycle }}</h5>
            </div>
            <div class="col-md-6">
                <div>
                    @if ($etudiants->image)
                    <img src="{{ asset('image/' . $etudiants->image) }}" alt="photo de l'étudiant" width="70%" height="80%" class="rounded">
                    @else
                    Aucune photo
                    @endif
                </div>
            </div>
            <h4 class=" text-center">Année Academique : {{ $etudiants->annee_academique }}</h4>
        </div>
    </div> -->

    <a href="{{ route('liste') }}">
        <x-primary-button class=" ml-3">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            {{ __('Retour') }}
        </x-primary-button></a>

    <a href="{{ route('mail',$etudiants->id) }}">
        <x-primary-button class=" ml-3">
            {{ __('Envoyer la carte') }}
        </x-primary-button></a>
</body>

</html>