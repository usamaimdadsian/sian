<?php

namespace App\Listeners;

use App\Mail\ClientMessagesMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientMessageListener implements ShouldQueue
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to('usamaimdadsian@gmail.com')->send(new ClientMessagesMail($event->name, $event->email, $event->subject, $event->message));
    }
}
