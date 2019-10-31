<?php

namespace App\Observers;

use App\Player;
use Illuminate\Support\Str;

class PlayerObserver
{

    /**
     * Handel the player "creating" event.
     * 
     * @param \App\Player $player
     * @return void
     */
    public function creating(Player $player)
    {
        $player->uuid = (string) Str::uuid();
    }

    /**
     * Handle the player "created" event.
     *
     * @param  \App\Player  $player
     * @return void
     */
    public function created(Player $player)
    {
        //
    }

    /**
     * Handle the player "updated" event.
     *
     * @param  \App\Player  $player
     * @return void
     */
    public function updated(Player $player)
    {
        //
    }

    /**
     * Handel the player "deleting" event.
     * 
     * @param \App\Player $player
     * @return void
     */
    public function deleting(Player $player)
    {
        $player->rosters()->detach();
    }

    /**
     * Handle the player "deleted" event.
     *
     * @param  \App\Player  $player
     * @return void
     */
    public function deleted(Player $player)
    {
        // $player->rosters()->detach();
        //
    }

    /**
     * Handle the player "restored" event.
     *
     * @param  \App\Player  $player
     * @return void
     */
    public function restored(Player $player)
    {
        //
    }

    /**
     * Handle the player "force deleted" event.
     *
     * @param  \App\Player  $player
     * @return void
     */
    public function forceDeleted(Player $player)
    {
        //
    }
}
