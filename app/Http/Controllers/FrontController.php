<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use App\Models\Flight;
use App\Models\Location;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function homepage(Request $request)
    {
        return view('front.welcome');
    }
    public function about(Request $request)
    {
        return view('front.about');
    }
    public function search_flights(Request $request)
    {
        return view('front.booking');
    }
    public function news(Request $request)
    {
        return view('front.news');
    }
    public function contact_us(Request $request)
    {
        return view('front.contact');
    }
    public function booking(Request $request)
    {
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $airlines = Airlines::all();
        $locations = Location::all();
        return view('front.book', compact(['flights', 'airlines', 'locations']));
    }
}
