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
        Schema::create('plaintes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelerin_id');
            $table->foreign('pelerin_id')->references('id')->on('pelerins')->onUpdate('cascade')->onDelete('cascade');
            $table->string('description');
            $table->string('date_emission');
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
        Schema::dropIfExists('plaintes');
    }
};
