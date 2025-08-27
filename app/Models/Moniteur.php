<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moniteur extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'salaire',
        'categorie_permis',
        'cv',
        'utilisateur_id',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function seances()
    {
        return $this->hasMany(Seance::class);
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class);
    }

}
