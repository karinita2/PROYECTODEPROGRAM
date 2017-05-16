<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiempoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiempo', function (Blueprint $table) {
            $table->increments('id_tiempo');
            $table->integer('reservation_id')->unsigned();
            $table->foreign('reservation_id')->references('id_reservation')->on('reservations');
            $table->date('plazo');
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
        Schema::dropIfExists('tiempo');
    }
}
