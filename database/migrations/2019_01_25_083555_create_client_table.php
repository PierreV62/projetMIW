<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('idClient');
            $table->string('nomClient',45);
            $table->string('prenomClient',45);
            $table->date('Ddn');
            $table->string('telClient',45);
            $table->string('mailClient',45);
            $table->string('mdpClient',45);
            $table->string('adresseClient',45);
            $table->integer('idville')->unsigned();
            $table->foreign('idville')->references('idville')->on('ville');

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
        Schema::dropIfExists('client');
    }
}
