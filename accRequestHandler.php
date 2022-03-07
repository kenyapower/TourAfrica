<?php
// servername => localhost
// username => root
// password => empty
// database name => tours
//port => 3307
//$conn = mysqli_connect("localhost", "root", "", "staff");

$conn = mysqli_connect('localhost','root','','tours','3307');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. ". mysqli_connect_error());
}

// String of all alphanumeric character
$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
// Shuffle the $str_result and returns substring
// of specified length
$driverCode =  substr(str_shuffle($str_result),0, 7);

// Taking all  values from the form data(input)
$fname      = $_REQUEST['fname'];
$sname      = $_REQUEST['sname'];
$phone      = $_REQUEST['phone'];
$tos        = 'agreed';
$userCode   = ($driverCode);
$username   = $fname.$userCode;

//vehicle detail
$v_reg      = $_REQUEST['v_reg'];
$v_make     = $_REQUEST['v_make'];
$v_region   = $_REQUEST['v_region'];
$v_capacity = $_REQUEST['v_capacity'];
$v_charges  = $_REQUEST['v_charges'];

$email      = $_REQUEST['email'];
$position   = $_REQUEST['position'];

//encrypt provided password
$pass       = md5($_REQUEST['password']);
$password   = ($pass);

//handling files uploaded
$targetDir = "documents/";
$v_logbook          = basename($_FILES["v_logbook"]["name"]);
$driver_license     = basename($_FILES["driver_license"]["name"]);
$v_image            = basename($_FILES["v_image"]["name"]);
$targetFilePath     = $targetDir . $v_logbook ;
$targetFilePath1    = $targetDir . $driver_license ;
$targetFilePath2    = $targetDir . $v_image ;

if(move_uploaded_file($_FILES["v_logbook"]["tmp_name"], $targetFilePath)) {

        echo "File uploaded successfully!";

} else{
    echo "Sorry, file not uploaded, please try again!";
}

if(move_uploaded_file($_FILES['driver_license']['tmp_name'], $targetFilePath1)) {

        echo "File uploaded successfully!";

} else{
    echo "Sorry, file not uploaded, please try again!";
}
if(move_uploaded_file($_FILES['v_image']['tmp_name'], $targetFilePath2)) {

        echo "File uploaded successfully!";

} else{
    echo "Sorry, file not uploaded, please try again!";
}


//insert data
$insertQuery = "INSERT INTO drivers (fname, sname, phoneNumber, usercode, vehicle_reg, tos) VALUES ('$fname','$sname','$phone','$userCode','$v_reg','$tos')";
//save using msqli_query
$save = mysqli_query($conn, $insertQuery);
//check if saved successfully
if (isset($save)){
    //save second mysqli_query
    $insertQuery2 = "INSERT INTO users  (username, email, password, position, usercode) VALUES ('$username', '$email','$password','$position','$userCode')";
    $save2 = mysqli_query($conn, $insertQuery2);

    //check if second save is successfully
    if (isset($save2)){
        //save third mysqli_query
        $insertQuery3 = "INSERT INTO vehicles (v_reg, v_make, v_capacity, v_region, v_charges, v_logbook, driver_license, v_image, v_usercode)
        VALUES ('$v_reg','$v_make','$v_capacity','$v_region','$v_charges','$v_logbook','$driver_license','$v_image','$userCode')";
        $save3 = mysqli_query($conn, $insertQuery3);

        //redirect if all insert queries are successful.
        header("location:login.php");
    }
}else{
    echo "Oopsy! An Error Occured.";
}

// Close connection
mysqli_close($conn);
