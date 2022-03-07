<?php
// session starts with the help of this function
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dash | TourAfrica</title>
    <!-- Favicons -->
    <link href="assets/img/logo.jpeg" rel="icon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/mystyle.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
         /*body{*/
         /*    background-color: #8fc4b7 ;*/
         /*    !*background-image: url("assets/img/jungle.jpg");*!*/

        /* !*}*!*/
        /*!* Set height of the grid so .sidenav can be 100% (adjust as needed) *!*/
        /*.row.content {height: 550px}*/

        /*!* Set gray background color and 100% height *!*/
        /*.sidenav {*/
        /*    background-color: #f1f1f1;*/
        /*    height: 100%;*/
        /*}*/

        /*!* On small screens, set height to 'auto' for the grid *!*/
        /*@media screen and (max-width: 767px) {*/
        /*    .row.content {height: auto;}*/
        /*}*/
    </style>
</head>
<body>
<div class="wrapper">
    <?php

    //start db connection
    $conn = mysqli_connect('localhost','root','','tours','3307');

    //execute the query first
    $query= "SELECT * FROM `users` WHERE `email` = '".$_SESSION['email']."'"or die(mysqli_connect_error());
    //store the result to a variable
    $result = mysqli_query($conn, $query);
    //fetch the stored variable
    $arr = mysqli_fetch_array($result);
    //print results
    //print_r($arr);
    ?>

    <!--if user is admin show this dashboard section-->
    <?php if( $arr['position'] === 'admin'){ ?>
        <nav class="navbar navbar-inverse visible-xs">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="/assets/img/logo.jpeg"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><?php echo $_SESSION['email'];?></a></li>
                        <li><a href="#">Age</a></li>
                        <li><a href="#">Gender</a></li>
                        <li><a href="#">Geo</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-3 sidenav hidden-xs">
                    <h2><img src="assets/img/logo.jpeg" width="290" height="99"></h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#section1"><?php echo $_SESSION['email'];?></a></li>
                        <li><a href="#section2">Age</a></li>
                        <li><a href="#section3">Gender</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul><br>
                </div>
                <br>

                <div class="col-sm-9">
                    <div class="well">
                        <h4>You are logged in as: <?php echo $arr['position'];?></h4>
                        <p>Some text..</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>Drivers</h4>
                                <p><a href="drivers.php"> view Drivers >>></a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>Vehicles</h4>
                                <p><a href="adminFleet.php">View Vehicles >>></a></p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>Invoices</h4>
                                <p>10 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>Bounce</h4>
                                <p>30%</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="well">
                                <p>Text</p>
                                <p>Text</p>
                                <p>Text</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="well">
                                <p>Text</p>
                                <p>Text</p>
                                <p>Text</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="well">
                                <p>Text</p>
                                <p>Text</p>
                                <p>Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="well">
                                <p>Text</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="well">
                                <p>Text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    end admin section-->

        <!--if user is driver show this dashboard section-->
    <?php }elseif( $arr['position'] === 'driver'){ ?>
        <nav class="navbar navbar-inverse visible-xs">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="/assets/img/logo.jpeg"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><?php echo $_SESSION['email'];?></a></li>
                        <li><a href="#">Age</a></li>
                        <li><a href="#">Gender</a></li>
                        <li><a href="myProfile.php">My Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row content">
                <div class="col-sm-3 sidenav hidden-xs">
                    <h2><img src="assets/img/logo.jpeg" width="290" height="99"></h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#section1"><?php echo $_SESSION['email'];?></a></li>
                        <li><a href="#section2">Age</a></li>
                        <li><a href="myProfile.php">My Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul><br>
                </div>
                <br>

                <div class="col-sm-9">
                    <div class="well">
                        <h4>You are logged in as: <?php echo $arr['position'];?></h4>
                        <p>Some text..</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>My Vehicle</h4>
                                <p>1 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>My Invoices</h4>
                                <p>100 Million</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="well">
                                <h4>My Profile</h4>
                                <p>10 Million</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }?>
    <!--    end driver section-->

    <!--call footer-->
    <?php include 'footer.php'; ?>

</div>
</body>
</html>