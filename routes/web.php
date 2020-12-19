<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FlightsController;


Route::get('/', function () {
    return view('welcome');
});



Route::get("/flights", "App\Http\Controllers\FlightsController@index");


Route::get("/flightsInsert", "App\Http\Controllers\FlightsController@insert");

Route::post("/flightsInsert", "App\Http\Controllers\FlightsController@Insertflights");

Route::get("/flightsEdit/{flightID}", "App\Http\Controllers\FlightsController@edit");

Route::post("/flightsEdit/{flightID}", "App\Http\Controllers\FlightsController@editFlights");



Route::get("/flightsDelete/{flightID}", "App\Http\Controllers\FlightsController@delete");
