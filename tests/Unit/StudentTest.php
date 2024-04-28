<?php 
 namespace Tests\Unit;
 
 use Tests\TestCase;

 class StudentTest extends TestCase
 {

      public function test_get_students_not_studensts():void{
         $response = $this->get('/api/students');
         $this->assertJsonStringEqualsJsonString($response->getContent() , '{"message":"No se encontraron estudiantes","status":200}');
         $response->assertStatus(200);
         
      }

      public function test_create_student():void{

          $response  =  $this->post('/api/students', [
              'first_name' => 'juan',
              'last_name' => 'perez',
              'phone' => '123456789',
              'email' => 'qk5Cn@example.com',
              'lenguage' => 'espanol',
    
          ]);

          $response->assertStatus(201);
      }
      
 }