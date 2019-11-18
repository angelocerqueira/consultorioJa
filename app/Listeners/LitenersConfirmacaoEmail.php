<?php

namespace App\Listeners;

use App\Events\EventNovoRegistro;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\MailRegisterConfirmation;
use Illuminate\Support\Facades\Mail;

class LitenersConfirmacaoEmail
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
     * @param  EventNovoRegistro  $event
     * @return void
     */
    public function handle(EventNovoRegistro $event)
    {
        Mail::to($event->user)
            ->send(new MailRegisterConfirmation($event->$user));
    }
}
