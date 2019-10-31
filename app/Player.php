<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'flag',
        'squadNumber',
        'team',
        'bio',
        'thumbnail',
        'image',
        'twitter',
        'instagram'
    ];

    protected $guarded = [
        'id',
        'uuid'
    ];

    // protected $hidden = [
    //     'id'
    // ];

    protected $casts = [
        'uuid' => 'uuid'
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function rosters()
    {
        return $this->belongsToMany(Roster::class);
    }
}
