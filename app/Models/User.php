<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
    'prenom',
    'sexe',
    'adresse',
    'email',
    'telephone',
    'password',
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
