<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contenu extends Model
{
    use HasFactory;

    protected $fillable = [
    'titre',
    'type',
    'lien',
    'cour_id',
    'moniteur_id',
    'administrateur_id'
];



    public function cours()
    {
        return $this->belongsTo(Cour::class);

    }

    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class);
    }

    public function moniteur()
    {
        return $this->belongsTo(Moniteur::class);
    }
}

