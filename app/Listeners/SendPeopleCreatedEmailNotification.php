<?php

namespace App\Listeners;

use App\Events\PeopleCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\PeopleCreatedMail;
use Illuminate\Support\Facades\Mail;

class SendPeopleCreatedEmailNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PeopleCreated  $event
     * @return void
     */
    public function handle(PeopleCreated $event)
    {

        Mail::to($event->people->email)->send(new PeopleCreatedMail($event->people));
    }
}
