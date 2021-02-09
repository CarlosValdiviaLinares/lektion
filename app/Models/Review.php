<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //  Relacion Uno-A-Muchos-Inversa
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
