<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    use HasFactory;
     protected $fillable = [ 'utilisateur_id',
    'salaire',
    'cv',
];
     public function utilisateur()
    {
        return this->belongsTo(Utilisateur::class);
    }
    public function depense(){
    
        returnthis->hasMany(Depense::class);
    }
}
