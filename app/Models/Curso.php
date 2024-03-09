<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $filable = ['name', 'descripcion', 'categoria'];
    protected $guarded = [];  // lo dejamos vacio porque no tenemos un campo protegido 

   public function getRouteKeyName(){
        return 'slug'; 
   }
}
