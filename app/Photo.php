<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'photo', 'is_thumb'
    ];

    public function office(){
        return $this->belongsTo(Office::class, 'photo');
    }
}
