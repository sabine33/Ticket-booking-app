<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Location;


class FlightController extends Controller
{
    public function index()
    {
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $airlines = Airlines::all();
        $locations = Location::all();
        return view('pages.flights', compact(['flights', 'locations', 'airlines']));
    }

    public function show($id)
    {
        return Flight::with(['airlines', 'from_location', 'to_location'])->find($id);
    }

    public function store(Request $request)
    {
        return Flight::create($request->all());
    }


    public function update(Request $request, $id)
    {
        $flight = Flight::findOrFail($id);
        $flight->update($request->all());
        return $flight;
    }

    public function destroy(Request $request, $id)
    {
        $flight = Flight::findOrFail($id);
        $flight->delete();
        return ["message" => 'Successfully Deleted', 'status' => 204];
    }
}
