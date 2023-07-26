<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('date_naissance');
            $table->string('genre');
            $table->string('filliere');
            $table->string('nationalite');
            $table->string('niveau_etude');
            $table->string('cycle');
            $table->string('annee_academique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
