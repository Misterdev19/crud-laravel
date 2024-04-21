<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;

class studenst extends Controller
{
     public function index(){
         $studensts  =  Students::all();
           
          if(count($studensts)  ===  0){
                  $data  =  [
                       'message' => "No se encontraron estudiantes",
                       'status' => 404
                  ];
               return response()->json($data ,  404);
          }

          return response()->json($studensts ,  404);
     }
}
