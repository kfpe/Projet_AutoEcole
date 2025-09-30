<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    use HasFactory;
     protected $fillable =[ 'user_id',
                            'salaire',
                            'cv',
     ];

     public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
     {
        return $this->belongsTo(User::class);
    }
    public function depense():\Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Depense::class);
    }
}
