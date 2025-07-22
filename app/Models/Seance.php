<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;
     protected $fillable = ['dateSeance', 'heure', 'duree', 'etat'];

    public function moniteur()
    {
        return this->belongsTo(Moniteur::class);
    }


    public function candidats(){
    
        return this->belongsToMany(Candidat::class, 'assister')->withPivot('presence');
    }

}
