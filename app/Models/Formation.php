<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
     
    
 protected $fillable = [
        'categorie',
        'type',
        'mode',
        'prix',
        'duree',
    ];

    public function candidats()
    {
        return $this->hasMany(Candidat::class);
    }

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }
}