<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{
    protected $fillable = [
        'rosterTitle',
        'season',
        'active',
        'default'
    ];

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'active' => 'boolean',
        'default' => 'boolean'
    ];

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
