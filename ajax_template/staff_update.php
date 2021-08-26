<?php
    include_once "../vendor/autoload.php";

    use Ura\Dhura\Controler\Staff;


    $staff = new Staff;
    // print_r($_POST);


    // form data get
    $id =$_POST['id'];
    $name =$_POST['name'];
    $email =$_POST['email'];
    $cell =$_POST['cell'];
    $old_photo =$_POST['old_photo'];

// files
    $file_name =$_FILES['new_photo']['name'];
    $file_tmp_name =$_FILES['new_photo']['tmp_name'];
    $unique_name = md5(time().rand()) . $file_name;

    if(!empty($file_name)){
        move_uploaded_file($file_tmp_name, '../photos/staff/' .$unique_name );
        $photo_name =  $unique_name;
        // old photo delete
        // unlink('../photos/staff/' . $old_photo);
    }
    else{
        $old_photo = $old_photo;
    }

        $data = $staff -> staffUpdate($name, $email, $cell, $photo_name, $id );

  
   if($data){
        echo '<p class="alert alert-success" > Staff updated Successfull! <button class ="close" data-dismiss="alert">&times;</button></p>';
   }