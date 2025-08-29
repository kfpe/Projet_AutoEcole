<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
     protected $fillable = ['titre', 'description',  'cours_id'];

    public function cours(){

        return $this->belongsTo(Cour::class);
    }

}
