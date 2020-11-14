<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    //
    protected $fillable = [
        'noma', 'nom', 'numb_elec','numb_eau','type',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
