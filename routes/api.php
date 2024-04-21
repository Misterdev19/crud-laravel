<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\studenst;


Route::get('/students', [studenst::class, 'index' ]); 

Route::get('/students/{id}', function(){
    return "Obteniendo un solo estudiante";
}); 

Route::post('/students', function(){
    return "creando estudiante";
}); 

Route::put('/students/{id}', function(){
    return "actulizando estudiante";
}); 

Route::delete('/students/{id}', function(){
    return "eliminando estudiante";
}); 