<h2 class="font-semibold text-xl text-white dark:text-gray-200 leading-tight bg-success opacity-75 text-center p-2 dark:bg-gray-800 shadow">
    {{ __("L'ECOLE SUPERIEURE D'INFORMATIQUE DE L’UNIVERSITE NAZI BONI") }}
</h2>


@if (session('status'))
<div class="alert alert-dismissible fade show alert-success" id="alert" role="alert">
    <strong>Bravo!</strong> {{ session('status') }}.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<a href="{{ route('dashboard') }}">
    <x-primary-button class=" ml-3">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        {{ __('Retour') }}
    </x-primary-button></a>
<a href="{{ route('formulaire_etude') }}">
    <x-primary-button class=" ml-3">
        <i class="fa-solid fa-user"></i>{{ __('Ajouter un étudiant') }}
    </x-primary-button></a>
<div class="container-fluide">
    <table class="table table-striped table-bordered pad text-center mt-3">
        <thead class="table-info">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">NOM</th>
                <th scope="col">PRÉNOM</th>
                <th scope="col">EMAIL</th>
                <th scope="col">DATE NAISSANCE</th>
                <th scope="col">GENRE</th>
                <th scope="col">FILLIERE</th>
                <th scope="col">NATIONALITE</th>
                <th scope="col">NIVEAU D'ETUDE</th>
                <th scope="col">CYCLE</th>
                <th scope="col">ANNEE ACADEMIQUE</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i = 1;
            @endphp

            @forelse ($etudiants as $etudiant)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->email }}</td>
                <td>{{ $etudiant->date_naissance }}</td>
                <td>{{ $etudiant->genre }}</td>
                <td>{{ $etudiant->filliere }}</td>
                <td>{{ $etudiant->nationalite }}</td>
                <td>{{ $etudiant->niveau_etude }}</td>
                <td>{{ $etudiant->cycle }}</td>
                <td>{{ $etudiant->annee_academique }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('modifier', $etudiant->id) }}"><i class="fas fa-edit" aria-hidden="true"></i></a>
                </td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')" href="{{ route('supprimer', $etudiant->id) }}"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </td>
                <td>
                    <a class="btn btn-primary" href="{{ route('detail', $etudiant->id) }}"><i class="fa fa-print" aria-hidden="true"></i>Imprimer</a>
                </td>
            </tr>
            @php
            $i++;
            @endphp
            @empty

            @endforelse
        </tbody>
    </table>
</div>


@extends('./layouts/footer')