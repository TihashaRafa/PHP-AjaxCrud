<?php
    include_once "../vendor/autoload.php";

    use Ura\Dhura\Controler\Staff;


    $staff = new Staff;

    $email =  $_POST['email'];  


    $status = $staff -> emailCheck($email);

    if($status == false){
        echo "<span style= 'color: red;'>Email already exist!</span>";
    }
    
