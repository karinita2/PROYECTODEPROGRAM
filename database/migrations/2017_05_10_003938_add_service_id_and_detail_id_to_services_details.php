<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddServiceIdAndDetailIdToServicesDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services_details', function (Blueprint $table) {
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id_service')->on('services');
            $table->integer('detail_id')->unsigned();
            $table->foreign('detail_id')->references('id_detail')->on('details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services_details', function (Blueprint $table) {
            //
        });
    }
}
