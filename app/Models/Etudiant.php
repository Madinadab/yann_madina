<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'genre',
        'date_naissance',
        'filliere',
        'nationalite',
        'niveau_etude',
        'cycle',
        'annee_academique',
    ];
}
