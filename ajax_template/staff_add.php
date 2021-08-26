<?php
    include_once "../vendor/autoload.php";

    use Ura\Dhura\Controler\Staff;
    $staff = new Staff;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];

    // photo upload
    $File_name = $_FILES['photo']['name'];
    $File_tmp_name = $_FILES['photo']['tmp_name'];
    $unique_name =md5(time() . rand()) . $File_name ;

    move_uploaded_file($File_tmp_name, '../photos/staff/' .$unique_name);

    $data = $staff ->createStaff($name, $email,  $cell, $unique_name);


    if($data){
        echo '<p class="alert alert-success" > Staff add Successfull! <button class ="close" data-dismiss="alert">&times;</button></p>';   
     }




?>