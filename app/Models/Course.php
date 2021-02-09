<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    Const BORRADOR = 1;
	Const REVISION = 2;
	Const PUBLICADO = 3;

    //  Relacion Uno-A-Muchos
    public function reviews(){
        return $this->hasMany('App\Models\Review');
    }

    //  Relacion Uno-A-Muchos-Inversa

    public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

  	public function level(){
		return $this->belongsTo('App\Models\Level');
	}

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function price(){
        return $this->belongsTo('App\Models\Price');
    }	
    
    //  Relación Muchos-A-Muchos
    public function students(){
        return $this->belongsToMany('App\Models\User');
    }

    

}
