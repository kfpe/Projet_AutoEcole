<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    use HasFactory;
    protected $fillable = ['num_permis', 'user_id', 'num_anc',
'piece',
'motif',
'experiences',
'permis',
'certificat',
'capacite',
'exigences',
'duree',
'formalite'];

    public function users(){

        return $this->belongsTo(User::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }



}
