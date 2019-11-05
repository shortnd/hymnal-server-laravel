<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function songbooks()
    {
        return $this->hasMany(Songbook::class);
    }
}
