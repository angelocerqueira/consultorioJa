<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
                // 'user_id'=> 1,
                'title',
                'description' ,
                'cep' ,
                'uf' ,
                'cidade',
                'endereco' ,
                'number' ,
                'structure' ,
                'specialties' ,
                'equipaments' ,
                'period_atend' ,
                'days_atend' ,
                'value_h' ,
                'value_m'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
