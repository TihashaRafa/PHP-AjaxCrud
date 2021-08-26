<?php

namespace Ura\Dhura\Support;
use mysqli;

/**
 * Database class
 */
abstract class Database{
   private $host = 'localhost';
   private $usr = 'root';
   private $pass = '';
   private $bd = 'ajax_staff';
   private $connection = '';

/**
 * database connection 
 */

    private function connection(){
       return  $this -> connection =  new mysqli($this-> host, $this-> usr, $this-> pass, $this-> bd );
    }


    /**
     * for insert data
     */
    protected function create($sql){
      $status = $this -> connection()-> query($sql);  
      
      if($status){
         return true; 
      }else{
         return false; 
      }
    }
    /**
     * for data select
     */
    public function all($tbl, $order= 'DESC'){
      return $this -> connection()-> query("SELECT * FROM $tbl ORDER BY id $order ");
    }

    /**
     * for single data
     */
    public function find($tbl, $id){
      return $this -> connection()-> query(" SELECT * FROM $tbl WHERE id='$id' ");
   }

   /**
    * for delete data
    */
    public function delete( $tbl, $id){
     $status = $this -> connection()-> query("DELETE FROM $tbl WHERE id ='$id' ");
     if( $status ){
         return true;
     }else{
         return false;
     }
   }

   /**
    * for update data
    */
  public function update($sql){
   $this -> connection()-> query($sql);
  }





  public function valueCheck($col, $tbl, $val){
   $sql = "SELECT $col FROM $tbl WHERE $col='$val' ";
   $status = $this -> connection() ->query($sql);
   $num =  $status -> num_rows;


   if($num > 0 ){
      return false;
   }else{
      return true;
   }
}


}








?>