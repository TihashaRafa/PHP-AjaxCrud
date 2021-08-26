<?php
namespace Ura\Dhura\Controler;

use Ura\Dhura\Support\Database;

/**
 * student class 
 */
class staff extends Database{


    /**
     * staff add to database 
     */
    public function createStaff($name, $email,  $cell ,$unique_name){

        $sql = "INSERT INTO staff(name, email, cell, photo) VALUES ('$name', '$email', '$cell','$unique_name') ";
        $data = $this ->create($sql);


        if($data){
            return true;
        }else{
            return false;
        }
    }

/**
 * all staff
 */
    public function allStaff(){
        return $this ->all('staff');
    }

//user id 
    public function deleteStaff($userId){



        $delete_user_data = $this ->find('staff', $userId);
        $delete_data = $delete_user_data -> fetch_assoc();

        // unlink('../photos/staff'. $delete_data['photo']);
        $data =  $this -> delete('staff', $userId);

       if($data){
           return true;
       }else{
        return false;
       }
    }
/**
 * user id
 */
    public function  showStaff($userId){
       return $this ->find('staff', $userId);
    }



    public function staffUpdate($name, $email, $cell, $photo, $id){
        $data = $this -> update(" UPDATE staff SET name ='$name', email='$email', cell='$cell', photo='$photo' WHERE id ='$id' ");

        if($data){
            return true;
        }else{
            return false;
        }
    }



 

/**
 * email check
 */
    public function emailCheck($email){
        return $this -> valueCheck('email', 'staff', $email);
    }









}

?>