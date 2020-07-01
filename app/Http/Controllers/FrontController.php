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

    public function search(Request $request)
    {
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $airlines = Airlines::all();
        $locations = Location::all();
        return view('front.search_frontend', compact(['flights', 'airlines', 'locations']));
    }
    public function getAvailableTickets(Request $request)
    {
        $id = $request->id;
        $bought = DB::table('tickets')
            ->selectRaw('sum(adults_count)+sum(kids_count) as bought')->where('flight_id', '=', 1)
            ->pluck('bought')[0];
        $max = DB::table('flights')
            ->selectRaw('max_ticket_count')->where('id', '=', 1)
            ->pluck('max_ticket_count')[0];
        //         $bought_tickets = DB::select(DB::raw("select sum(adults_count)+sum(kids_count) as bought_tickets from tickets where flight_id=:id
        // "), array(
        //             'id' => 1
        //         ));

        return array('available_tickets' => $max - $bought);
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
