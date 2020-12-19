<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlights extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     
     * Flights(ID, საიდენტიფიკაციო კოდი, გაფრენა-აეროპორტის დასახელება, დაშვება-აეროპორტის დასახელება, გაფრენის
        დრო, დაშვების დრო).
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("identification_code");
            $table->string("leave_airport_name");
            $table->string("cum_airport_name");
            $table->date("leave_time");
            $table->date("cum_time");
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
        Schema::dropIfExists('flights');
    }
}
