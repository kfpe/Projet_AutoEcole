<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Agence extends Model
{
    use HasFactory;

       protected $fillable = [
        'nom',
        'ville',
        'quartier',
        'tel',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
