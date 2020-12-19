<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FlightsController;

use App\Http\Controllers\AirportsController;


Route::get('/', function () {
    return view('welcome');
});



Route::get("/flights", "App\Http\Controllers\FlightsController@index");


Route::get("/flightsInsert", "App\Http\Controllers\FlightsController@insert");

Route::post("/flightsInsert", "App\Http\Controllers\FlightsController@Insertflights");

Route::get("/flightsEdit/{flightID}", "App\Http\Controllers\FlightsController@edit");

Route::post("/flightsEdit/{flightID}", "App\Http\Controllers\FlightsController@editFlights");



Route::get("/flightsDelete/{flightID}", "App\Http\Controllers\FlightsController@delete");




Route::get("/airports", "App\Http\Controllers\AirportsController@index");


Route::get("/airportsInsert", "App\Http\Controllers\AirportsController@insert");

Route::post("/airportsInsert", "App\Http\Controllers\AirportsController@Insertairports");

Route::get("/airportsEdit/{airportID}", "App\Http\Controllers\AirportsController@edit");

Route::post("/airportsEdit/{airportID}", "App\Http\Controllers\AirportsController@editAirports");



Route::get("/airportsDelete/{airportID}", "App\Http\Controllers\AirportsController@delete");
