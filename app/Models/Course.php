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
}
