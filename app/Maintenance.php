<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maintenance extends Model
{
     //
     use SoftDeletes;

        protected $fillable = [
            'id','type', 'locataire_id', 'appartement_id','honoraire','materiel',
        ];
        
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
