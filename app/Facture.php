<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    //
    protected $fillable = [
        'type','locataire_name','appartement_id','deb_mois','fin_mois','numb_jour',
     ];
 
 
 
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
