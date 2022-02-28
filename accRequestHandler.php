<?php

$conn = mysqli_connect('localhost','root','','tours','3307');

mysqli_select_db($conn,'tours');

// String of all alphanumeric character
$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
// Shuffle the $str_result and returns substring
// of specified length
$driverCode =  substr(str_shuffle($str_result),0, 7);

//get data if submit button
//if (isset($_POST["btn_request"])){
    $fname      = $_POST["fname"];
    $sname      = $_POST["sname"];
    $phone      = $_POST["phone"];
    $email      = $_POST["email"];
    $password   = $_POST["password"];
    $tos        = $_POST["t.o.s"];
    $position   = $_POST["position"];

    $userCode   = $driverCode;

    //connect to db
//    require_once "db_connection.php";
    //insert data
    $insertQuery = "INSERT INTO `drivers` (id, fname, sname, phoneNumber, usercode, tos) VALUES (null,'$fname','$sname','$phone','$userCode','$tos')";
    //save using msqli_query
    $save = mysqli_query($conn, $insertQuery);
    //check if saved successfully
    if (isset($save)){
        header("Location:vehicle_regform.php");
    }else{
        echo "Requesting failed!!!";
    }
//}






//Check if button add has been clicked
//if (isset($_POST["btn_request"])){
//    //Start receiving data from the form
//    $fname      = $_POST["f_name"];
//    $sname      = $_POST["s_name"];
//    $phone      = $_POST["phone"];
//    $email      = $_POST["email"];
//    $password   = $_POST["password"];
//    $tos        = $_POST["t.o.s"];
//    $position   = $_POST["position"];
//
//    $userCode   = $driverCode;

//    //Connect to the database to save
//    require_once "db_connect.php";

    //start db conncetion
//    $conn = mysqli_connect('localhost','root','','tours','3307');

//    mysqli_select_db($conn,'tours');

//     insert the user into the database
//   $q1 = mysqli_query($conn, "INSERT INTO users (`id`, `email`, `password`, `usercode`, `position`)
//    VALUES (null,'$email','$password','$userCode', '$position')");

    // insert the user into the database
//       $q2 =  mysqli_query($conn, "INSERT INTO drivers (`id`, `f_name`, `s_name`, `phone`,`usercode`, `tos`)
//        VALUES (null,'$fname','$sname','$phone','$phone','$userCode','$tos')");

//    //insert into table users
//    $insertQuery1 = "INSERT INTO users (`id`, `email`, `password`, `usercode`, `position`)
//    VALUES (null,'$email','$password','$userCode', '$position')";

//    //insert into table drivers
//    $insertQuery2 = "INSERT INTO `drivers`(`id`, `f_name`, `s_name`, `phone`,`usercode`, `tos`)
//    VALUES (null,'$fname','$sname','$phone','$phone','$userCode','$tos')";

//    $save = mysqli_query($conn, $q1, $q2 );
//    if (isset($save)){
//        header("Location:vehicle_regform.php");
//    }else{
//        echo "Requesting failed!!!";
//    }
//}


