<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Commercant;

class CommercantMail extends Mailable
{
    use Queueable, SerializesModels;

    public $commercant;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Commercant $commercant)
    {
        $this->commercant = $commercant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Nouvelle demande de marché')
            ->view('emails.commercant');
    }
}
