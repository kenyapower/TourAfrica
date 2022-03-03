<?php

session_start();

//start db conncetion
$conn = mysqli_connect('localhost','root','','tours','3307');

mysqli_select_db($conn,'tours');

//get values from login file
$email      = $_POST['email'];
$pass       = $_POST['password'];
$password   = md5($pass);

$query = "select * from users where email = '$email' && password = '$password'";

$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['email'] = $email;
    echo "Login successful !!! Welcome".$_SESSION[$email];

    header('location:dashboard.php');
}else{
    echo "Failed to login. Try again after some time";
    header("location:login.php");
}


