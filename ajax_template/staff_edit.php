<?php
    include_once "../vendor/autoload.php";

    use Ura\Dhura\Controler\Staff;


    $staff = new Staff;
    $userId =  $_POST['id'];

    $data = $staff -> showStaff( $userId );

    $single_staff_data = $data -> fetch_assoc();

    echo json_encode( $single_staff_data);
