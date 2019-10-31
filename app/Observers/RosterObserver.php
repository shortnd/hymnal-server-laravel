<?php

namespace App\Observers;

use App\Roster;
use Illuminate\Support\Str;

class RosterObserver
{
    public function saving(Roster $roster)
    {
        $roster->slug = Str::slug($roster->rosterTitle, '-');
    }

    public function creating(Roster $roster)
    {
        $roster->uuid = (string) Str::uuid();
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
     * Hanel the roster "deleting" event.
     * 
     * @param \App\Roster $roster
     * @return void
     */
    public function deleting(Roster $roster)
    {
        $roster->players()->detach();
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
