<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dash | TourAfrica</title>

    <!-- Favicons -->
    <link href="assets/img/logo.jpeg" rel="icon">

    <link rel="stylesheet" type="text/css" href="assets/mystyle.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>

<!---->
<!---->
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="assets/img/logo.jpeg" height="15" alt="TourAfrica Logo" loading="lazy"/>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="" >My profile</a>
                    <a class="dropdown-item" href="" >Settings</a>
                    <a class="dropdown-item" href="" >Logout</a>
                </div>
            </div>

        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<br>
<br>
<!--body start-->
<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow" style="background-color: greenyellow;">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Get An Account</h4>
            </div>
            <div class="card-body">
                <p>Start earning.<br> Register as a driver today</p>
                <a href="account_request.php">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary"> Sign up for free </button>
                </a>
            </div>
        </div>

        <div class="card mb-4 box-shadow" style="background-color: greenyellow;">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Login</h4>
            </div>
            <div class="card-body">
                <p>Access Your Account</p>
                <a href="login.php">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary"> Sign In </button>
                </a>
            </div>
        </div>
        <div class="card mb-4 box-shadow" style="background-color: greenyellow;">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Book A Vehicle</h4>
            </div>
            <div class="card-body">
                <p>Get a vehicle from our fleet.</p>
                <a href="fleet.php">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Book Vehicle</button>
                </a>
            </div>
        </div>
    </div>

</div>
<!--body ends-->

</body>
</html>