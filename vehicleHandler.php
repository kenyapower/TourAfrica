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
$fname      =   $_REQUEST['fname'];
$sname      =   $_REQUEST['sname'];
$phone      =   $_REQUEST['phone'];
$email      =   $_REQUEST['email'];
$password   =   $_REQUEST['password'];
$tos        =   'agreed';
$position   =   $_REQUEST['position'];


$userCode   = $driverCode;

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO drivers  (fname, sname, phoneNumber, usercode, tos) VALUES ('$fname','$sname','$phone','$userCode','$tos')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Data entry successfully. </h3>";
    header("Location:vehicle_regform.php");

    echo nl2br("\n$fname\n $sname\n "
        . "$phone\n $userCode\n $tos");
} else{
    echo "ERROR: Oopsy! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

