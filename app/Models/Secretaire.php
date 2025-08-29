<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    use HasFactory;
     protected $fillable =[ 'utilisateur_id',
                            'salaire',
                            'cv',
     ];

     public function utilisateur(): \Illuminate\Database\Eloquent\Relations\BelongsTo
     {
        return $this->belongsTo(Utilisateur::class);
    }
    public function depense():\Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Depense::class);
    }
}
