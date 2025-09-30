<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function contenus()
    {
        return $this->hasMany(Contenu::class);
    }
}
