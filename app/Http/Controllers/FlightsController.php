<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightsController extends Controller
{
    //

    public function index()
    {
        $flights = Flight::all();

        return view("flights.index", ['flights' => $flights]);
    }


    public function insert()
    {

        return view("flights.insert");
    }



    public function Insertflights(Request $request)
    {
        $flight = new Flight();
        $flight->identification_code = $request->identification_code;
        $flight->leave_airport_name = $request->leave_airport_name;
        $flight->cum_airport_name = $request->cum_airport_name;
        $flight->leave_time = $request->leave_time;
        $flight->cum_time = $request->cum_time;

        $flight->save();

        return view("flights.insert");
    }


    public function edit($flightID)
    {

        $flight = Flight::where("id", $flightID)->first();


        return view("flights.edit", ['flight' => $flight]);
    }

    public function editFlights(Request $request, $flightID)
    {
        $flight = Flight::where("id", $flightID)->first();

        $flight->identification_code = $request->identification_code;
        $flight->leave_airport_name = $request->leave_airport_name;
        $flight->cum_airport_name = $request->cum_airport_name;
        $flight->leave_time = $request->leave_time;
        $flight->cum_time = $request->cum_time;

        $flight->save();

        return view("flights.edit", ['flight' => $flight]);
    }



    public function delete($flightID)
    {

        $flight = Flight::where("id", $flightID)->delete();


        return back();
    }
}
