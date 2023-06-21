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
        Schema::create('conducteur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_naissance')->nullable();
            $table->string('email');
            $table->string('password');
            $table->string('genre')->nullable();
            $table->string('tele')->nullable();
            $table->string('image')->nullable();
            $table->string('cin')->nullable();
            $table->float('permis')->nullable();
            $table->date('date_obtenu')->nullable();
            $table->string('type_permis')->nullable();
            $table->float('activated')->nullable();
            
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
        Schema::dropIfExists('conducteur');
    }
};
