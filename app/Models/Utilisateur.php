<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
    'nom',
    'prenom',
    'sexe',
    'adresse',
    'email',
    'telephone',
    'mot_de_passe',
    'role',
    'agence_id',
];

         public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function administrateur()
    {
        return $this->hasOne(Administrateur::class);
    }

    public function moniteur()
    {
        return $this->hasOne(Moniteur::class);
    }

    public function secretaire()
    {
        return $this->hasOne(Secretaire::class);
    }

    public function visiteur()
    {
        return $this->hasOne(Visiteur::class);
    }

    public function candidat()
    {
        return $this->hasOne(Candidat::class);
    }

    public function reponses()
    {
        return $this->belongsToMany(Reponse::class, 'ChoixCandidat')
         ->withTimestamps();
    }

    

    
}


