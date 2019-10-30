<?php

namespace App\Observers;

use App\Roster;
use Illuminate\Support\Str;

class RosterObserver
{
    public function saving(Roster $roster)
    {
        $roster->slug = Str::slug($roster->rosterTitle, '-');
        // $roster->slug = str_slug($roster->rosterTitle);
    }

    /**
     * Handle the roster "created" event.
     *
     * @param  \App\Roster  $roster
     * @return void
     */
    public function created(Roster $roster)
    {
        // 
    }

    /**
     * Handle the roster "updated" event.
     *
     * @param  \App\Roster  $roster
     * @return void
     */
    public function updated(Roster $roster)
    {
        //
    }

    /**
     * Handle the roster "deleted" event.
     *
     * @param  \App\Roster  $roster
     * @return void
     */
    public function deleted(Roster $roster)
    {
        //
    }

    /**
     * Handle the roster "restored" event.
     *
     * @param  \App\Roster  $roster
     * @return void
     */
    public function restored(Roster $roster)
    {
        //
    }

    /**
     * Handle the roster "force deleted" event.
     *
     * @param  \App\Roster  $roster
     * @return void
     */
    public function forceDeleted(Roster $roster)
    {
        //
    }
}
