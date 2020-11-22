<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
     //
        protected $fillable = [
            'type', 'locataire_id', 'appartement_id','honoraire','materiel',
        ];
        
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
