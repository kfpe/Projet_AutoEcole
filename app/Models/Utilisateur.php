<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
    'nom',
    'prenom',
    'sexe',
    'adresse',
    'email',
    'telephone',
    'mot_de_passe',
    'role',
    'agence_id',
];

         public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

    public function administrateur()
    {
        return $this->hasOne(Administrateur::class);
    }

    public function moniteur()
    {
        return $this->hasOne(Moniteur::class);
    }

    public function secretaire()
    {
        return $this->hasOne(Secretaire::class);
    }

    public function visiteur()
    {
        return $this->hasOne(Visiteur::class);
    }

    public function candidat()
    {
        return $this->hasOne(Candidat::class);
    }

    public function reponses()
    {
        return $this->belongsToMany(Reponse::class, 'ChoixCandidat')->withTimestamps();
    }

    public function contenu(){
             return $this->hasMany(Contenu::class);
    }
        // J'ai ajouté ces elements qui viennent du model User generer par defaut dans Laravel.
        // Je me dis que ça peut nous etre utile pour la gestion des utilisateurs plus tard .

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];




}


