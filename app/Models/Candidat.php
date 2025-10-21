<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
   protected $fillable = [
        'date_naissance',
        'lieu_naissance',
        'nom_pere',
        'nom_mere',
        'decision',
        'photo',
        'statut',
        'user_id',
        'formation_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }

    public function seances()
    {
        return $this->belongsToMany(Seance::class, 'assister')
                    ->withPivot('presence','etat')
                    ->withTimestamps();
    }
}
