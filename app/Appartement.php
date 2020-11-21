<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    //
    protected $fillable = [
       'id','noma','nom','numb_elec','numb_eau','type','prix','prix_l','piece'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}
