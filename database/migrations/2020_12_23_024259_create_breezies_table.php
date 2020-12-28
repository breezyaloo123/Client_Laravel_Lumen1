<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreeziesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breezies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numEtudiant');
            $table->string('nom');
            $table->string('prenom');
            $table->string('statut');
            $table->double('montantBourse');
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
        Schema::dropIfExists('breezies');
    }
}
