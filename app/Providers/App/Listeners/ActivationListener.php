<?php

namespace App\Providers\App\Listeners;

use App\Providers\ActivationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ActivationListener
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
     * @param  ActivationEvent  $event
     * @return void
     */
    public function handle(ActivationEvent $event)
    {
        //
    }
}
