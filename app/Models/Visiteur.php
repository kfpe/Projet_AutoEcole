<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    use HasFactory;
    protected $fillable = ['num_permis', 'utilisateur_id'];

    public function utilisateur(){

        return $this->belongsTo(Utilisateur::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }



}
