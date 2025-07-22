<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
     protected $fillable = ['Categorie', 'Prix', 'Durée', 'type', 'mode'];

    public function candidats(){
    
        returnthis->hasMany(Candidat::class);
    }

}
