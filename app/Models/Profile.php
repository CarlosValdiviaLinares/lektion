<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    //  Relacion Uno-A-Uno Inversa
	
    public function user(){
		return $this->belongsTo('App\Models\User');
	}
}
