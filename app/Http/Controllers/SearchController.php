<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use App\Models\Flight;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    //
    public function search()
    {
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $airlines = Airlines::all();
        $locations = Location::all();
        return view('pages.flights', compact(['flights', 'locations', 'airlines']));
    }

    public function bookTickets(Request $request)
    {
        $id = $request->flight_id;
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $airlines = Airlines::all();
        $locations = Location::all();
        $layout = 'backend';
        return view('front.booking_frontend', compact(['flights', 'airlines', 'locations', 'layout', 'id']));
    }
}
