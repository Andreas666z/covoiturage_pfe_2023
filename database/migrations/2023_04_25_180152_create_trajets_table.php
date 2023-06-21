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
        Schema::create('trajet', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('villeDepart');
            $table->string('villeArrive');
            $table->date('dateDepart');
            $table->time('heureDepart');
            $table->float('prix');

            $table->unsignedBigInteger('idVoiture');
            $table->foreign('idVoiture')->references('id')->on('voiture');

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
        Schema::dropIfExists('trajet');
    }
};
