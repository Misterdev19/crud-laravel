<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\studenst;


Route::get('/students', [studenst::class, 'index' ]); 

Route::get('/students/{id}', [studenst::class, 'getStudent']); 

Route::post('/students',[studenst::class, 'store' ]); 

Route::put('/students/{id}', [studenst::class, 'updateStudent']); 

Route::delete('/students/{id}', [studenst::class, 'deleteStudent']); 