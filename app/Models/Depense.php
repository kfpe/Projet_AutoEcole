<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;
    protected $fillable = [
    'libelle',
    'justificatif_dep',
    'montant',
    'secretaire_id'
];

    public function secretaire()
    {
        return this->belongsTo(Secretaire::class);
    } 
}
