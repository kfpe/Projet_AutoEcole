<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    protected $fillable = ['intitule', 'quiz_id'];

    public function quiz()
    {
        return this->belongsTo(Quiz::class);
    
    }
    public function reponses(){
    
        returnthis->hasMany(Reponse::class);
    }

}
