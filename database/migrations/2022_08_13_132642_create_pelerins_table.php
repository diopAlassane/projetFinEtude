<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelerins', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('date_nais');
            $table->string('passeport')->unique();
            $table->string('niveau_etude');
            $table->string('contact');
            $table->string('email')->unique();
            $table->string('langueParler');
            $table->string('situation_matrimonaile');
            $table->string('affinite');
            $table->string('adresse');
            $table->string('nom_conjoint');
            $table->string('contact_conjoint');
            $table->string('nombre_enfant');
            $table->string('profession');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelerins');
    }
};
