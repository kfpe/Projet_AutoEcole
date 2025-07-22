<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;
     protected $fillable = ['type', 'intitule', 'formation_id'];

    public function quiz(){
    
        return this->hasMany(Quiz::class);
    }

}
