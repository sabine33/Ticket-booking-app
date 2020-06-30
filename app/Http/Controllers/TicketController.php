<?php

namespace App\Http\Controllers;

use App\Mail\TicketMail;
use App\Models\Flight;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;



class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with(['user', 'flight'])->get();
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $users = User::all();
        // return json_encode($flights);
        return view('pages.tickets', compact(['users', 'tickets', 'flights']));
    }

    public function show($id)
    {
        return Ticket::find($id);
    }

    public function send_sms(Request $request)
    {
        // $client = new Client(['verify' => false]);

        $url = "https://aakashsms.com/admin/public/sms/v3/send";
        $auth_token = "3342a0198eab741fb611c61111c1a5ff75703c7a9cdf525711e84486223eccf2";
        // $res = $client->request('POST', $url, [
        //     'form_params' => [
        //         'auth_token' => $auth_token,
        //         'to' => '9779863180880',
        //         'text' => 'Your ticket has been booked successfully with ticket# T123.'
        //     ]
        // ]);

        // if ($res->getStatusCode() == 200) { // 200 OK
        //     $response_data = $res->getBody()->getContents();
        //     return $response_data;
        // } else {
        //     return 'error';
        // }
        $response = Http::withOptions([
            'verify' => false
        ])->post($url, [
            'auth_token' => $auth_token,
            'to' => '9779863180880',
            'text' => 'Your ticket has been booked successfully with ticket# T124.'
        ]);
        return $response;
    }
    public function getTicket(Request $request)
    {
        $ticket = Ticket::find(1);
        return view('partials.mail.ticket', compact(['ticket']));
    }
    public function front(Request $request)
    {
        $ticket = Ticket::find(1);
        return view('front.home', compact(['ticket']));
    }
    public function send_mail(Request $request)
    {
        $ticket = Ticket::find(1);
        $mode = array(["email" => false]);
        Mail::to("sabin.khanal.33@gmail.com")->send(new TicketMail($ticket));
        return
            view('partials.mail.ticket', compact(['ticket', 'mode']));
    }
    public function store(Request $request)
    {
        $email = $request->passenger_email;
        $fullname = $request->passenger_name;
        $ticket = Ticket::create($request->all());
        $mailData = $ticket;
        if (isset($ticket)) {
            Mail::to($email)->send(new TicketMail($mailData));
        } else {
        }
        return $mailData;
    }

    public function update(Request $request, $id)
    {
        $Ticket = Ticket::findOrFail($id);
        $Ticket->update($request->all());

        return $Ticket;
    }

    public function delete(Request $request, $id)
    {
        $Ticket = Ticket::findOrFail($id);
        $Ticket->delete();

        return 204;
    }
}
