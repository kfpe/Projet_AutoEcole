<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moniteur extends Model
{
    use HasFactory;
     protected $fillable = [
    'utilisateur_id',
    'categoris_permis',
    'salaire',
    'cv',
];

    public function utilisateur(){
    
        returnthis->belongsTo(Utilisateur::class);
    }

}
