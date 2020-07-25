<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doa extends Model
{
    // protected $table = 'doas';

    protected $guarded = [];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}