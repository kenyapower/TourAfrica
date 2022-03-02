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

//vehicle detail
$v_reg      = $_REQUEST['v_reg'];
$v_make     = $_REQUEST['v_make'];
$v_region   = $_REQUEST['v_region'];
$v_capacity = $_REQUEST['v_capacity'];
$v_charges  = $_REQUEST['v_charges'];
//$v_logbook  = $_REQUEST['v_logbook'];
//$driver_license  = $_REQUEST['driver_license'];
//$v_image  = $_REQUEST['v_image'];

$email      = $_REQUEST['email'];
$position   = $_REQUEST['position'];
//encrypt provided password
$pass       = md5($_REQUEST['password']);
$password   = ($pass);

//handling files uploaded
$v_logbook    = $_FILES["v_logbook"]["name"];

$driver_license = $_FILES["driver_license"]["name"];

$v_image    = $_FILES["v_image"]["name"];

$target_dir = "documents/";

    if (($_FILES["v_logbook"]["name"] != "")) {
// Where the file is going to be stored
        $file = $_FILES["v_logbook"]["name"];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES["v_logbook"]["name"];
        $path_filename_ext = $target_dir . $filename . "." . $ext;


        if (($_FILES["driver_license"]["name"] != "")) {
// Where the file is going to be stored
            $file = $_FILES["driver_license"]["name"];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES["driver_license"]["name"];
            $path_filename_ext = $target_dir . $filename . "." . $ext;

            if (($_FILES["v_image"]["name"] != "")) {
// Where the file is going to be stored
                $file = $_FILES["v_image"]["name"];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES["v_image"]["name"];
                $path_filename_ext = $target_dir . $filename . "." . $ext;

// Check if file already exists
                if (file_exists($path_filename_ext)) {
                    echo "Sorry, file already exists.";
                } else {
                    move_uploaded_file($temp_name, $path_filename_ext);
                    echo "Congratulations! File Uploaded Successfully.";
                }
            }
        }
    }

// Performing insert query execution
// here our drivers table
$sql = "INSERT INTO drivers (fname, sname, phoneNumber, usercode, tos) VALUES ('$fname','$sname','$phone','$userCode','$tos')";
$sql = "INSERT INTO users  (email, password, position, usercode) VALUES ('$email','$password','$position','$userCode')";
$sql = "INSERT INTO vehicles (v_reg, v_make, v_capacity, v_region, v_charges, v_logbook, driver_license, v_image, v_usercode)
        VALUES ('$v_reg','$v_make','$v_capacity','$v_region','$v_charges','$v_logbook','$driver_license','$v_image','$userCode')";

/* execute multi query */
mysqli_multi_query($conn, $sql);

if($conn === true){
    echo "<h3>Data entry successfully. </h3>";
    header("Location:dashboard.php");

    echo nl2br("\n$fname\n $sname\n "
        . "$phone\n $userCode\n $tos");
} else{
    echo "ERROR: Oopsy! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
