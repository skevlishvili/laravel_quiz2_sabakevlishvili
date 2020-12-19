<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;

class AirportsController extends Controller
{
    //


    public function index()
    {
        $airports = Airport::all();

        return view("airports.index", ['airports' => $airports]);
    }


    public function insert()
    {

        return view("airports.insert");
    }



    public function Insertairports(Request $request)
    {
        $airport = new Airport();
        $airport->unique_identifier = $request->unique_identifier;
        $airport->name = $request->name;
        $airport->country = $request->country;
        $airport->city = $request->city;
        $airport->timezone = $request->timezone;

        $airport->save();

        return view("airports.insert");
    }


    public function edit($airportID)
    {

        $airport = Airport::where("id", $airportID)->first();


        return view("airports.edit", ['airport' => $airport]);
    }

    public function editAirports(Request $request, $airportID)
    {
        $airport = Airport::where("id", $airportID)->first();

        $airport->unique_identifier = $request->unique_identifier;
        $airport->name = $request->name;
        $airport->country = $request->country;
        $airport->city = $request->city;
        $airport->timezone = $request->timezone;

        $airport->save();

        return view("airports.edit", ['airport' => $airport]);
    }



    public function delete($airportID)
    {

        $airport = Airport::where("id", $airportID)->delete();


        return back();
    }
}
