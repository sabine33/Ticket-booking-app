<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

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

        return $this->view('partials.mail.ticket_info')
            ->from('programmersabin33@gmail.com', 'Hawaijahaj')
            ->subject('Ticket Confirmation')
            ->with([
                '$ticket' => $this->ticket,
            ]);

        // return $this->view('views.partials.mail.ticket');
    }
}
