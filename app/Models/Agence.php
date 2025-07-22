<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    use HasFactory;

     protected $fillable = ['adresse', 'nom', 'telephone'];
    public function utilisateurs()
    {
        return this->hasMany(Utilisateur::class);
    }
}
