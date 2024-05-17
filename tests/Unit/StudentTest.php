<?php 
 namespace Tests\Unit;
 
 use Tests\TestCase;
 use App\Http\Controllers\Api\studenst;
 use Illuminate\Http\Request;


 class StudentTest extends TestCase
 {

    //   public function test_get_students_not_studensts():void{
    //      $response = $this->get('/api/students');
    //      $this->assertJsonStringEqualsJsonString($response->getContent() , '{"message":"No se encontraron estudiantes","status":200}');
    //      $response->assertStatus(200);
         
    //   }

      // public function test_create_student():void{

      //     $response  =  $this->post('/api/students', [
      //         'first_name' => 'Juan Camilo',
      //         'last_name' => 'Penagos Yara',
      //         'phone' => '123456789',
      //         'email' => 'jcpenagos@example.com',
      //         'lenguage' => 'espanol',
    
      //     ]);

      //     $response->assertStatus(201);
      // }

      //  public function test_get_students():void{
      //           $studensts  = new studenst();
      //           //validar que exista el metodo getStudent

              
      //       //   //deberia devolver un error si no se le esta pasando  id
      //       //     $this->expectException(
      //       //       \ArgumentCountError::class
      //       //     );
                
      //       //     $response =  $studensts->getStudent(4);
      //       //     $this->assertNotNull($response);

      //           //deberia de retornar un objeto
      //           // $response =  $studensts->getStudent(4);
      //           // $this->assertIsObject($response);
            

      //           //deberia un stado 404 si el id no existe
      //           //  $response = $this->get('/api/students/7');
      //           //  $response->assertStatus(200);

            
      //  }

    //    public function test_delete_student():void{
    //          //deberia de existir el metodo deleteStudent
    //          $this->assertTrue(
    //              method_exists(studenst::class, 'deleteStudent'
    //          ),
    //          'El metodo deleteStudent no existe'
    //          );

    //         // deberia de existir el parametro id
    //          $reflection = new \ReflectionClass(studenst::class);
    //          $parameters = $reflection->getMethod('deleteStudent')->getParameters();
    //          $this->assertCount(
    //               1, $parameters
    //          );
    //         // deberia de retornar un objeto
    //          $studenst  = new studenst();
    //          $reponse = $studenst->deleteStudent(1);
    //          $this->assertIsObject($reponse);

    //         //  //deberia de retornar un stado 404 si el id no existe
    //         //  $reponse = $this->delete('/api/students/78');
    //         //  $reponse->assertStatus(404);

    //          //deberia de retornar un stado 200 si el id existe y se elimino correctamente
    //          $reponse = $this->delete('/api/students/3');
    //          $reponse->assertStatus(200);              
    //    }


    // public function test_update_student():void{

    //     //deberia de existir el metodo updateStudent
    //     $this->assertTrue(
    //         method_exists(studenst::class, 'updateStudent'), 
    //         'El metodo updateStudent no existe'
    //     );

    //      //deberia de retornar un objeto
    //     // $studens = new studenst();
    //     // $response = $studens->updateStudent(json_decode());
    //     // $this->assertIsObject($response);

       
    //     // deberia de retornar un stado 404 si el id no existe
    //     // $response = $this->put('/api/students/78');
    //     // $response->assertStatus(404);


    //     //deberia de retornar un 400 si fallan las validaciones 
    //     $response = $this->put('/api/students/7', [
    //         'first_name' => 'Juan Peres',
    //         'last_name' => 'Penagos Yara',
    //         'phone' => '123456789',
    //         'email' => 'penagos@example.com',
    //         'lenguage' => 'espanol',
    //     ]);

    //     $response->assertStatus(200);
        
      
        
    // }

     public function test_udapte_patch_statudent()
     {

         // probamos que exista un method llamada updatePachtStudnest
        //   $this->assertTrue(
        //        method_exists(studenst::class , 'updatePachtStudnest'),
        //        'Deberia de existir metodo updatePachtStudnest'
        //   );

        //   //deberi de resibir dos parametros 
        //   $reflection = new  \ReflectionClass(studenst::class);
        //   $parameters = $reflection->getMethod('updatePachtStudnest')->getParameters();
        //   $this->assertCount(2,  $parameters , 'Seberia de resivir dos parametros');
         
        // //deberia de retornar un ojecto'
        //   $request =  Request::create('/api/students/3', 'PATCH', []);
        //   $studens = new studenst();
        //   $response  =  $studens->updatePachtStudnest($request,2);
        //   $this->assertIsObject($response, 'seberia ser un objecto');
          

          //deberia de retornar un status code 400 si fallan las validaciones de los datos
          $response = $this->patch('/api/students/7' ,  [
                    'first_name' => 'Juan Peres',
                ]);

          $response->assertStatus(200);

     }
 }