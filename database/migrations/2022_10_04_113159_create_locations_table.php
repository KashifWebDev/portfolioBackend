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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('countryName');
            $table->string('countryCode');
            $table->string('regionCode');
            $table->string('regionName');
            $table->string('cityName');
            $table->string('zipCode');
            $table->string('isoCode')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->string('metroCode')->nullable();
            $table->string('areaCode');
            $table->string('timezone');
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
        Schema::dropIfExists('locations');
    }
};
