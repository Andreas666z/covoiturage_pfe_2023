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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->float('etat');
            $table->date('dateEtat');
            $table->float('nbrPlaces');

            $table->unsignedBigInteger('idPassager');
            $table->foreign('idPassager')->references('id')->on('passager');

            $table->unsignedBigInteger('idTrajet');
            $table->foreign('idTrajet')->references('id')->on('trajet');

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
        Schema::dropIfExists('reservations');
    }
};
