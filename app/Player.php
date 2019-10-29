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
}
