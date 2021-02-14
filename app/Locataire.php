<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Locataire extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
       'id', 'prenom', 'nom', 'NIN','sexe','lieudelivre', 'datedelivre', 'date_naissance','lieu_naissance','appartement_id', 'profession','contact','deb_mois','deb_ans','fin_mois','fin_ans',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}