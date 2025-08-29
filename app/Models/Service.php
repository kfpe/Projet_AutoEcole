<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
     protected $fillable = ['libelle', 'description', 'etat', 'visiteur_id'];


    public function visiteur(){

        return $this->belongsTo(Visiteur::class);
    }

}
