<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Airports(ID, საიდენტიფიკაციო კოდი, სახელი, ქვეყანა, ქალაქი, დროის სარტყელი);
     */
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("unique_identifier");
            $table->string("name");
            $table->string("country");
            $table->string("city");
            $table->string("timezone");
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
        Schema::dropIfExists('airports');
    }
}
