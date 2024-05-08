<?php 
 namespace Tests\Unit;
 
 use Tests\TestCase;
 use App\Http\Controllers\Api\studenst;

 class StudentTest extends TestCase
 {

    //   public function test_get_students_not_studensts():void{
    //      $response = $this->get('/api/students');
    //      $this->assertJsonStringEqualsJsonString($response->getContent() , '{"message":"No se encontraron estudiantes","status":200}');
    //      $response->assertStatus(200);
         
    //   }

    //   public function test_create_student():void{

    //       $response  =  $this->post('/api/students', [
    //           'first_name' => 'juan',
    //           'last_name' => 'perez',
    //           'phone' => '123456789',
    //           'email' => 'qk5Cn@example.com',
    //           'lenguage' => 'espanol',
    
    //       ]);

    //       $response->assertStatus(201);
    //   }

       public function test_get_students():void{
                $studensts  = new studenst();
                //validar que exista el metodo getStudent

              
            //   //deberia devolver un error si no se le esta pasando  id
            //     $this->expectException(
            //       \ArgumentCountError::class
            //     );
                
            //     $response =  $studensts->getStudent(4);
            //     $this->assertNotNull($response);

                //deberia de retornar un objeto
                $response =  $studensts->getStudent(4);
                $this->assertIsObject($response);
            

                //deberia un stado 404 si el id no existe
                 $response = $this->get('/api/students/4');
                 $response->assertStatus(200);

            
       }

       public function test_delete_student():void{
             //deberia de existir el metodo deleteStudent
             $this->assertTrue(
                 method_exists(studenst::class, 'deleteStudent'
             ),
             'El metodo deleteStudent no existe'
             );

            // deberia de existir el parametro id
             $reflection = new \ReflectionClass(studenst::class);
             $parameters = $reflection->getMethod('deleteStudent')->getParameters();
             $this->assertCount(
                  1, $parameters
             );
            // deberia de retornar un objeto
             $studenst  = new studenst();
             $reponse = $studenst->deleteStudent(1);
             $this->assertIsObject($reponse);

            //  //deberia de retornar un stado 404 si el id no existe
            //  $reponse = $this->delete('/api/students/78');
            //  $reponse->assertStatus(404);

             //deberia de retornar un stado 200 si el id existe y se elimino correctamente
             $reponse = $this->delete('/api/students/3');
             $reponse->assertStatus(200);              
       }
      
 }