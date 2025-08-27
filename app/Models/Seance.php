<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;
       protected $fillable = [
        'heure_debut',
        'heure_fin',
        'etat',
        'cours_id',
        'moniteur_id',
    ];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }

    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class);
    }

     public function seances()
    {
        return this->belongsToMany(Seance::class, 'assister')
                    ->withPivot('presence')
                    ->withTimestamps();
    }

}
