<?php

namespace App\Listeners;

use App\Events\FilmCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WarningFilm
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
     * @param  FilmCreated  $event
     * @return void
     */
    public function handle(FilmCreated $event)
    {
        //
    }
}
