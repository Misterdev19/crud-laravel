<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\Validator;

class studenst extends Controller
{
     public function index(){
         $studensts  =  Students::all();
           
          if($studensts->isEmpty()){
                  $data  =  [
                       'message' => "No se encontraron estudiantes",
                       'status' => 200
                  ];
               return response()->json($data ,  200);
          }

          return response()->json($studensts ,  200);
     }

     public function store(Request $request){


             $responseValidator =  Validator::make($request->all() , [
                 'first_name' => 'required',
                 'last_name' => 'required',
                 'phone' => 'required',
                 'email' => 'required|email',
                 'lenguage' => 'required',
             ]); 


             if($responseValidator->fails()){
                 $data  =  [
                     'message' => "Error en la validacion de los datos",
                     'erross' => $responseValidator->errors(),
                     'status' => 400
                 ];

                 return response()->json($data ,  400);
               
             }

             $student =  Students::create([
                 'first_name' => $request->first_name,
                 'last_name' => $request->last_name,
                 'phone' => $request->phone,
                 'email' => $request->email,
                 'lenguage' => $request->lenguage,
             ]);
              

             if(!$student){
                 $data  =  [
                     'message' => "Error al crear el estudiante",
                     'status' => 501
                 ];

                 return response()->json($data ,  501);

             }

             $data  =  [
                 'statudenst' => $student,
                 'message' => "Estudiante creado correctamente",
                 'status' => 201
             ];

             return response()->json($data ,  201);
     }

     public function getStudent($id){

        $student  =  Students::find($id);

        
        if(!$student){
            $data  =  [
                'message' => "No se encontraron estudiantes",
                'status' => 404
            ];
           return response()->json($data ,  404);
        }

        $data  =  [
            'student' => $student,
            'status' => 200
        ];
         
        
         return  response()->json($data ,  200);
     }

     public function deleteStudent($id){

        $student  =  Students::find($id);

        
        if(!$student){
            $data  =  [
                'message' => "No se encontraron estudiantes",
                'status' => 404
            ];
           return response()->json($data ,  404);
        }

        $student->delete();

        $data = [
            'message' => 'Estudiante eliminado',
            'status' => 200
        ];
         
       return response()->json($data ,  200); 
     }
}
