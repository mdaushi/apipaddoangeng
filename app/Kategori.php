<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $guarded = [];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    
    public function doa()
    {
        return $this->hasMany(Doa::class, 'id_kategori', 'id');
    }
}