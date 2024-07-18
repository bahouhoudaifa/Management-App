<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiairesTable extends Migration
{
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->increments('idStag');
            $table->string('CEF');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Etudiant_Actif',3);
            $table->string('Filiere');
            $table->string('Groupe');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stagiaires');
    }
}
