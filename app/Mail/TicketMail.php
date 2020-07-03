<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class TicketMail extends Mailable
{
    public $ticket;

    use Queueable, SerializesModels;

    public function __construct($ticket)
    {
        $this->ticket = $ticket;
    }


    public function build()
    {
        $pdf = App::make('dompdf.wrapper');
        $mode = 'email';
        $ticket = $this->ticket;

        $filepath = 'pdf/ticket_' . $ticket->id . '.pdf';

        // $path = Storage::get('app/pdf/' . 'tickets.pdf');

        return $this->view('partials.mail.ticket_info')
            ->from('karki.sunamika@gmail.com', 'Hawaijahaj')
            ->subject('Ticket Confirmation')
            ->with([
                '$ticket' => $this->ticket,
            ]);
        // ->attach($filepath, [
        //     'as' => 'ticket.pdf',
        //     'mime' => 'application/pdf',
        // ]);

        // return $this->view('views.partials.mail.ticket');
    }
}
