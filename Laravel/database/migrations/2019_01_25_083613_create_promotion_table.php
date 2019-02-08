<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion', function (Blueprint $table) {
            $table->increments('idPromotion');
            $table->string('promotionLibelle');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->string('photo1',45);
            $table->string('photo2',45);
            $table->string('photo3',45);
            $table->string('codePromo',45);
            $table->integer('active');
            $table->integer('idMagasin')->unsigned();
            $table->foreign('idMagasin')->references('idMagasin')->on('magasin');

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
        Schema::dropIfExists('promotion');
    }
}
