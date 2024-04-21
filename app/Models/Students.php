<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

     protected $table = 'students'; // relasionamos la tabla con la clase 
     protected $fillable  = [  //relacionamos los campo que necesitamos utlizar de la clase 
         'first_name',
         'last_name',
         'email',
         'phone',
         'lenguage'
     ];

}
