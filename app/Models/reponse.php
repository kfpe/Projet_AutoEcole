<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reponse extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero',
        'reponse',
        'etat',
        'question_id',

    ];
    public function question(){

        return $this->belongsTo(Question::class);
    }

   public function utilisateur()
    {
        return $this->belongsToMany(utilisateur::class, 'ChoixCandidat')
         ->withTimestamps();
    }

}
