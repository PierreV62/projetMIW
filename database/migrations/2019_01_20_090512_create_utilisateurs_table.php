<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('idUtilisateur');
            $table->string('nomUtilisateur',45);
            $table->string('prenomUtilisateur',45);
            $table->date('Ddn');
            $table->string('telUtilisateur',45);
            $table->string('mailUtilisateur',45);
            $table->string('mdpUtilisateur',45);
            $table->string('adresseUtilisateur',45);
            $table->integer('idville')->unsigned();
            $table->foreign('idville')->references('idville')->on('ville');
            $table->boolean('displayed')->default(0)->change();
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
        Schema::dropIfExists('utilisateurs');
    }
}
