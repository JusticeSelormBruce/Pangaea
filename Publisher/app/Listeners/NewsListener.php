<?php

namespace App\Listeners;

use App\Events\NewsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Redis;

class NewsListener
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
     * @param  NewsEvent  $event
     * @return void
     */
    public function handle(NewsEvent $event)
    {
        Redis::publish('general', json_encode($event->data));
    }
}
