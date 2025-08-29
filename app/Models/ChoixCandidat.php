<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoixCandidat extends Model
{
    use HasFactory;

    protected $fillable = [
        // Ont ne met pas des champs fillable sur des elements qui seront des id. En realiter c'est le systeme qui est censer l'ecrire.
        'id_reponse',
        'utilisateur_id',
    ];


}
