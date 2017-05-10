<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPersonIdAndBusinessIdToBusinessPeoples extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_people', function (Blueprint $table) {
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id_person')->on('people');
            $table->integer('business_id')->unsigned();
            $table->foreign('business_id')->references('id_business')->on('businesses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_people', function (Blueprint $table) {
            //
        });
    }
}
