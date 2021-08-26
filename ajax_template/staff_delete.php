<?php
    include_once "../vendor/autoload.php";

    use Ura\Dhura\Controler\Staff;


    $staff = new Staff;

    $userId =  $_POST['id'];


    $data = $staff -> deleteStaff($userId);


    if($data){
        echo '<p class="alert alert-success" > Staff add Successfull! <button class ="close" data-dismiss="alert">&times;</button></p>';
    }