<?php

//$conn = mysqli_connect('localhost','root','','tours','3307');


// String of all alphanumeric character
//$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
// Shuffle the $str_result and returns substring
// of specified length
//$invoice =  substr(str_shuffle($str_result),0, 4);

//// Taking all  values from the form data(input)
//$fname      = $_POST['fname'];
//$lname      = $_POST['lname'];
//$phone      = $_POST['phone'];
//$email      = $_POST['email'];
//$date       = $_POST['date'];
//$daysbooked = $_POST['daysbooked'];
//$invoicenumber = $fname.$invoice;
//$invoicestatus = "Unpaid";
//$vreg          = $_POST['v_reg'];
//$vusercode     = $_POST['v_usercode'];
//$vcharges      = $_POST['v_charges'];
//$amount        = $vcharges*$daysbooked;

//check connection
//    $insertQuery = "INSERT INTO invoices (invoicenumber, fname, lname, phone, email, vehicle_reg, drivercode, date, amountpaid, daysbooked, invoicestatus )
//                VALUE('$invoicenumber', '$fname', '$lname', '$phone', '$email', '$vreg', '$vusercode', '$date', '$amount', '$daysbooked','$invoicestatus')";

//    $save = mysqli_query($conn, $insertQuery);
//
//// Close connection
//mysqli_close($conn);




/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','','tours','3307');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// String of all alphanumeric character
$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
// Shuffle the $str_result and returns substring
// of specified length
$invoice =  substr(str_shuffle($str_result),0, 4);

// Taking all  values from the form data(input)
// Escape user inputs for security
$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$date = mysqli_real_escape_string($conn, $_REQUEST['date']);
$daysbooked = mysqli_real_escape_string($conn, $_REQUEST['daysbooked']);
$vreg = mysqli_real_escape_string($conn, $_REQUEST['v_reg']);
$vusercode = mysqli_real_escape_string($conn, $_REQUEST['v_usercode']);
$vcharges = mysqli_real_escape_string($conn, $_REQUEST['v_charges']);
$invoicenumber = $fname.$invoice;
$invoicestatus = "Unpaid";
$amount        = $vcharges*$daysbooked;

// Attempt insert query execution
$insertQuery = "INSERT INTO invoices (invoicenumber, fname, lname, phone, email, vehicle_reg, drivercode, date, amountpaid, daysbooked, invoicestatus )
                VALUE('$invoicenumber', '$fname', '$lname', '$phone', '$email', '$vreg', '$vusercode', '$date', '$amount', '$daysbooked','$invoicestatus')";
if(mysqli_query($conn, $insertQuery)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $insertQuery. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
