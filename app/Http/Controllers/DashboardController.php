<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use App\Models\Flight;
use App\Models\Location;
use App\Models\Ticket;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(Request $request)
    {
        $users_count = count(User::all());
        $locations_count = count(Location::all());
        $airlines_count = count(Airlines::all());
        $flights_count = count(Flight::all());
        $tickets_count = count(Ticket::all());

        return view('pages.home', compact(['users_count', 'locations_count', 'airlines_count', 'flights_count', 'tickets_count']));
    }
}
