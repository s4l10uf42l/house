<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facture extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'id', 'type','locataire_name','appartement_id','deb_mois','fin_mois','numb_jour','locataire_id',
     ];
 
 
 
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
