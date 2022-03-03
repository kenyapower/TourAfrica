<?php  session_start();   // session starts with the help of this function


if(isset($_SESSION['use']))   // Checking whether the session is already there or not if
    // true then header redirect it to the home page directly
{
    header("Location:login.php");
}


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
//    $_SESSION['use']=$email;

    $_SESSION['email'] = $email;
    echo "Login successful !!! Welcome".$_SESSION['use']=$email;

//    echo "Login successful !!! Welcome".$_SESSION[$email];

    header('location:dashboard.php');
}else{
//    echo "Failed to login. Try again after some time";
    echo "Invalid UserName or Password";

    header("location:login.php");
}


