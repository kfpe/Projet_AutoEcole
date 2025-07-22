<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
     protected $fillable = [ 'date_nais',
    'lieu_nais',
    'nom_pere',
    'nom_mere',
    'decision',
    'statut',
    'utilisateur_id',
];
     public function utilisateur()
    {
        return this->belongsTo(Utilisateur::class);
    }

    public function paiements(){
    
        returnthis->hasMany(Paiement::class);
    }

    public function seances()
    {
        return this->belongsToMany(Seance::class, 'assister')->withPivot('presence');
    }
}
