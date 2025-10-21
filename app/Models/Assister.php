<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assister extends Model
{
    use HasFactory;
     protected $table = 'assister';

    protected $fillable = ['candidat_id', 'seance_id', 'presence', 'etat'];

}
