<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
{
    //
    protected $fillable = [
        'prenom', 'nom', 'NIN','sexe','lieudelivre', 'datedelivre', 'date_naissance','lieu_naissance','appartement_id', 'profession','contact','deb_mois','deb_ans','fin_mois','fin_ans',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}