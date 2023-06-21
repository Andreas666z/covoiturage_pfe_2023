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
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contenu');
            $table->float('read');

            $table->unsignedBigInteger('idPassager');
            $table->foreign('idPassager')->references('id')->on('passager');

            $table->unsignedBigInteger('idConducteur');
            $table->foreign('idConducteur')->references('id')->on('conducteur');

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
        Schema::dropIfExists('messages');
    }
};
