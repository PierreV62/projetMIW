<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noter', function (Blueprint $table) {
            $table->increments('codeAvis');
            $table->string('commentaire',75);
            $table->string('note',1);
            $table->integer('idClient')->unsigned();
            $table->foreign('idClient')->references('idClient')->on('client');
            $table->integer('idPromotion')->unsigned();
            $table->foreign('idPromotion')->references('idPromotion')->on('promotion');

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
        Schema::dropIfExists('noter');
    }
}
