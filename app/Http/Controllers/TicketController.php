<?php

namespace App\Http\Controllers;

use App\Mail\TicketMail;
use App\Models\Flight;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\User;
use Exception;
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
    public function send_email($ticket, $email)
    {
        if (isset($ticket)) {
            Mail::to($email)->send(new TicketMail($ticket));
        } else {
        }
    }
    public function send_cancelled_email($ticket, $email)
    {
        if (isset($ticket)) {
            Mail::raw('Ticket cancellation request sent successfully.', function ($message) use ($email) {
                $message->subject('Ticket Cancellation')->to($email);
            });
        } else {
        }
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
        $ticket = Ticket::create($array);
        $this->send_email($ticket, $email);
        // $this->send_sms($phone, $ticket->id);

        return $ticket;
        // return array('message' => 'Ticket successfully saved.', 'data' => $ticket);
    }
    public function cancelTicket(Request $request)
    {
        return view('front.cancel_ticket');
    }
    public function cancelTicketPost(Request $request)
    {
        $id = $request->id;
        $token = $request->token;
        $remarks = addslashes($request->remarks);

        $message = array();
        try {
            $ticket = Ticket::all()->where('id', '=', $id)->where('token', '=', $token)->first();
            $email = $ticket->passenger_email;
            if (isset($ticket)) {
                $ticket->status = false;
                $ticket->remarks = $remarks;
                $ticket = $ticket->save();
                $this->send_cancelled_email($ticket, $email);
                $message = array('message' => 'TICKET CANCELLED SUCCESSFULLY');
            } else {
                throw new Exception("Ticket Not found");
            }
        } catch (\Exception $e) {
            // do task when error
            $message = array('message' => $e->getMessage());   // insert query
        }

        return view('front.cancel_ticket', compact('message'));
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
