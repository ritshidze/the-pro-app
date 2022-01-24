<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PeopleCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $people;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($people)
    {
        $this->people = $people;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ritchie@testingstuff.com')
                        ->subject('Information Has Been Captured')
                        ->markdown('emails.people.people-created');
    }
}