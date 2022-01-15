<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scenery extends Model
{
    protected $fillable = [
        'title',
        'license',
        'simulator',
        'link',
        'icao'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
