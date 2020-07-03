<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Location;


class FlightController extends Controller
{
    public function search(Request $request)
    {
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $airlines = Airlines::all();
        $locations = Location::all();
        return view('front.search_frontend', compact(['flights', 'airlines', 'locations']));
    }
    public function searchFlights(Request $request)
    {

        $from_date = $request->from_date;
        $to_date = $request->to_date;
        $departure_type = $request->departure_type;
        $ticket_count = $request->ticket_count;
        $from_location_id = $request->from_location_id;
        $to_location_id = $request->to_location_id;


        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get()->whereBetween('departure_date', [$from_date, $to_date])->where('available_tickets', '>=', $ticket_count)->where('from_location_id', '=', $from_location_id)->where('to_location_id', '=', $to_location_id);
        $airlines = Airlines::all();
        $locations = Location::all();
        return view('front.search_frontend', compact(['flights', 'airlines', 'locations']));
    }


    public function getAll()
    {
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();

        return $flights;
    }
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
