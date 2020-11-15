<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    //
    protected $fillable = [
        'prenom', 'nom', 'NIN','date_naissance','lieu_naissance','appartement_id', 'profession','contact',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}