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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelerin_id');
            $table->foreign('pelerin_id')->references('id')->on('pelerins')->onUpdate('cascade')->onDelete('cascade');
            $table->string('observation');
            $table->string('prescription');
            $table->string('date_prescription');
            $table->string('date_rendez_vous');
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
        Schema::dropIfExists('consultations');
    }
};
