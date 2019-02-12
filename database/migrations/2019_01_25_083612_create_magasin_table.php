<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagasinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magasin', function (Blueprint $table) {
            $table->increments('idMagasin');
            $table->string('nomMagasin',45);
            $table->string('adresseMagasin',45);
            $table->string('latMagasin',45);
            $table->string('longMagasin',45);
            $table->string('mailMagasin',45);
            $table->string('siret',45);
            $table->string('photo1',45);
            $table->string('photo2',45);
            $table->integer('idCategorie')->unsigned();
            $table->foreign('idCategorie')->references('idCategorie')->on('categorie');
            $table->integer('idType')->unsigned();
            $table->foreign('idType')->references('idType')->on('type');
            $table->integer('idville')->unsigned();
            $table->foreign('idville')->references('idville')->on('ville');
            $table->integer('idResponsable')->unsigned();
            $table->foreign('idResponsable')->references('idResponsable')->on('responsable');

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
        Schema::dropIfExists('magasin');
    }
}
