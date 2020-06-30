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
use Illuminate\Support\Str;

class TicketController extends Controller
{

    public function getAll()
    {
        $tickets = Ticket::with(['user', 'flight'])->get();
        return $tickets;
    }


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

    public function send_sms($phone, $id)
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
            'to' => '977' . $phone,
            'text' => 'Your ticket has been booked successfully with ticket# ' . $id
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
        $phone = $request->passenger_phone;
        $token = Str::random(10);
        $array = $request->all();
        $array["token"] = $token;
        // $fullname = $request->passenger_name;
        $ticket = Ticket::create($array);
        // $this->send_sms($phone, $ticket->id);

        if (isset($ticket)) {
            Mail::to($email)->send(new TicketMail($ticket));
        } else {
        }
        return $ticket;
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
