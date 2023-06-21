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
        Schema::create('voiture_option', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idVoiture');
            $table->unsignedBigInteger('idOption');
            $table->foreign('idVoiture')->references('id')->on('voiture')->onDelete('cascade');
            $table->foreign('idOption')->references('id')->on('option')->onDelete('cascade');
            
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
        Schema::dropIfExists('voiture_option');
    }
};
