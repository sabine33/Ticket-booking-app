<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use App\Models\Flight;
use App\Models\Location;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FrontController extends Controller
{


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
    public function ticket(Request $request)
    {
        $pdf = PDF::loadView('pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
    }
    public function contact_us(Request $request)
    {
        return view('front.contact');
    }





    //booking ticket UI
    public function booking(Request $request)
    {
        $id = $request->flight_id;
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $airlines = Airlines::all();
        $locations = Location::all();
        $layout = 'frontend';
        return view('front.booking_frontend', compact(['flights', 'airlines', 'locations', 'layout', 'id']));
    }
}
