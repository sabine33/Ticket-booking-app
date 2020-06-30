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
    public function cancelTicket(Request $request)
    {
        return view('front.cancel_ticket');
    }
    public function cancelTicketPost(Request $request)
    {
        $id = $request->id;
        $token = $request->token;

        $message = array();
        try {
            $ticket = Ticket::findOrFail($id);
            $ticket->status = false;
            $ticket = $ticket->save();
            // $ticket = Ticket::findOrFail($id);
            $message = array('message' => 'TICKET CANCELLED SUCCESSFULLY');
        } catch (\Exception $e) {
            // do task when error
            $message = array('message' => $e->getMessage());   // insert query
        }
        // $result = DB::table('tickets')
        //     ->where('id', $id)
        //     ->where('token', $token)
        //     ->update(['status' => false]);
        // return $result;


        return view('front.cancel_ticket', compact('message'));
    }
    public function search(Request $request)
    {
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $airlines = Airlines::all();
        $locations = Location::all();
        return view('front.search', compact(['flights', 'airlines', 'locations']));
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
        // $flights = DB::table('flights')
        //     ->where('departure_date', '>=', "$from_date")
        //     ->get();

        $airlines = Airlines::all();
        $locations = Location::all();
        return view('front.search', compact(['flights', 'airlines', 'locations']));
    }
    public function booking(Request $request)
    {
        $id = $request->id;
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $airlines = Airlines::all();
        $locations = Location::all();
        return view('front.book', compact(['flights', 'airlines', 'locations']));
    }
}
