<?php
namespace Ura\Dhura\Controler;

use Ura\Dhura\Support\Database;

/**
 * student class 
 */
class Student extends Database{



    /**
     * student data create
     */
    public function studentTumi($name, $email, $cell, $uname ){

       $data=  $this ->create ("INSERT INTO students (name, email, cell, uname ) VALUES ('$name', '$email', '$cell', '$uname' ) ");

       if($data){
           return '<p class= "alert alert-success" > All filed are required! <button class ="close" data-dismiss="alert" >&times;</button> </p>'; 
       }
    

        // $sql = "INSERT INTO students(name, email,cell,uname) VALUES ('$name', '$email', '$cell', '$uname') ";
        // $data = $this -> connection() -> query($sql);

        // if( $data ){
        //     return '<p class= "alert alert-success" > Student created successfully! <button class ="close" data-dismiss="alert" >&times;</button> </p>'; 
        // }else{
        //     return false;
        // }

    }

    /**
     * get all students 
     */
    public function shobdata(){
       $data=  $this ->all('students');
       return $data; 
   }


/**
 * delete strudent
 */
   public function DeleteStudent($id){
    $data = $this -> delete('students', $id);

    if($data){
        return '<p class= "alert alert-success" > student delete successfull!! <button class ="close" data-dismiss="alert" >&times;</button> </p>';
    }else{

    }
    
   }
/**
 * find student
 */
   public function singleStudent($id){
    $data = $this ->find('students', $id);
    return $data;
   }

/**
 * edit data
 */
   public function editstudent($id){
    $data = $this ->find('students', $id);
    return $data;
   }



   public function Updatedata($name, $email, $cell, $uname, $id ){
       $this ->update("UPDATE students SET name='$name', email= '$email', cell = '$cell', uname = '$uname' WHERE id ='$id' ");
       header('location:students.php');
       
}

}

?>