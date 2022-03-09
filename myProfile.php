<?php
 session_start();

 //start db connection
//$conn = mysqli_connect('localhost','root','');
//
//$db = mysqli_select_db("tours", $conn);
//
// echo ($_SESSION['email']);
 $myemail =  $_SESSION['email'];;
 echo $myemail;

//$query = mysqli_query("select * from employee", $connection);

//$sql23 = 'SELECT id, username, email, password, position, usercode FROM users where email = "$myemail"';

// $query1 = "SELECT usercode FROM users WHERE email='$myemail'";

//$result = $conn->query($sql);

// print_r($result);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Profile | TourAfric</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            margin-top:20px;
            background:#F0F8FF;
        }
        .card {
            margin-bottom: 1.5rem;
            box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
        }
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #e5e9f2;
            border-radius: .2rem;
        }
        .card-header:first-child {
            border-radius: calc(.2rem - 1px) calc(.2rem - 1px) 0 0;
        }
        .card-header {
            border-bottom-width: 1px;
        }
        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            color: inherit;
            background-color: #fff;
            border-bottom: 1px solid #e5e9f2;
        }
    </style>

</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="container p-0">
    <h1 class="h3 mb-3">Settings</h1>
    <?php
    //start db connection
    $conn = mysqli_connect('localhost','root','','tours','3307');

//    mysqli_select_db("tours", $conn);
    if(! $conn ) {
        die('Could not connect: ' . mysqli_error());
    }

    $sql = 'SELECT id, username, email, password, position, usercode FROM users where email = "$myemail"';
//    mysqli_select_db('tours');
    $ans = mysqli_query( $conn, $sql );
     print_r($ans);


    if (!$ans) {
            printf("Error: %s\n", mysqli_error());
            exit();
     }
    while($row = mysqli_fetch_array($ans, MYSQLI_ASSOC)){?>
        <div class="row" >
        <div class="col-md-5 col-xl-4" >

            <div class="card" >
                <div class="card-header" >
                    <h5 class="card-title mb-0" > Profile Settings </h5 >
                </div >

                <div class="list-group list-group-flush" role = "tablist" >
                    <a class="list-group-item list-group-item-action active" data-toggle = "list" href = "#account" role = "tab" >
            Account
                    </a >
                    <a class="list-group-item list-group-item-action" data-toggle = "list" href = "#password" role = "tab" >
            Password
                    </a >
                    <a class="list-group-item list-group-item-action" data-toggle = "list" href = "#" role = "tab" >
            Privacy and safety
        </a >
                    <a class="list-group-item list-group-item-action" data-toggle = "list" href = "#" role = "tab" >
            Email notifications
        </a >
                    <a class="list-group-item list-group-item-action" data-toggle = "list" href = "#" role = "tab" >
            Web notifications
        </a >
                    <a class="list-group-item list-group-item-action" data-toggle = "list" href = "#" role = "tab" >
            Widgets
                    </a >
                    <a class="list-group-item list-group-item-action" data-toggle = "list" href = "#" role = "tab" >
            Your data
        </a >
                    <a class="list-group-item list-group-item-action" data-toggle = "list" href = "#" role = "tab" >
            Delete account
        </a >
                </div >
            </div >
        </div >

        <div class="col-md-7 col-xl-8" >
            <div class="tab-content" >
                <div class="tab-pane fade show active" id = "account" role = "tabpanel" >

                    <div class="card" >
                        <div class="card-header" >
                            <div class="card-actions float-right" >
                                <div class="dropdown show" >
                                    <a href = "#" data-toggle = "dropdown" data-display = "static" >
                                        <svg xmlns = "http://www.w3.org/2000/svg" width = "24" height = "24" viewBox = "0 0 24 24" fill = "none" stroke = "currentColor" stroke-width = "2" stroke-linecap = "round" stroke-linejoin = "round" class="feather feather-more-horizontal align-middle" >
                                            <circle cx = "12" cy = "12" r = "1" ></circle >
                                            <circle cx = "19" cy = "12" r = "1" ></circle >
                                            <circle cx = "5" cy = "12" r = "1" ></circle >
                                        </svg >
                                    </a >

                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <a class="dropdown-item" href = "#" > Action</a >
                                        <a class="dropdown-item" href = "#" > Another action </a >
                                        <a class="dropdown-item" href = "#" > Something else here </a >
                                    </div >
                                </div >
                            </div >
                            <h5 class="card-title mb-0" >public info </h5 >
                        </div >
                        <div class="card-body" >
                            <form >
                                <div class="row" >
                                    <div class="col-md-8" >
                                        <div class="form-group" >
                                            <label for="inputUsername" > Username</label >
                                            <input type = "text" class="form-control" id = "inputUsername"
                                                   value="<?php echo "{$ans['emp_id']}"; ?>" placeholder = "Username" >
                                        </div >
                                        <div class="form-group" >
                                            <label for="inputUsername" > Biography</label >
                                            <textarea rows = "2" class="form-control" id = "inputBio" placeholder = "Tell something about yourself" ></textarea >
                                        </div >
                                    </div >
                                    <div class="col-md-4" >
                                        <div class="text-center" >
                                            <img alt = "Andrew Jones" src = "https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle img-responsive mt-2" width = "128" height = "128" >
                                            <div class="mt-2" >
                                                <span class="btn btn-primary" ><i class="fa fa-upload" ></i ></span >
                                            </div >
                                            <small >for best results, use an image at least 128px by 128px in . jpg format </small >
                                        </div >
                                    </div >
                                </div >

                                <button type = "submit" class="btn btn-primary" > Save changes </button >
                            </form >

                        </div >
                    </div >

                    <div class="card" >
                        <div class="card-header" >
                            <div class="card-actions float-right" >
                                <div class="dropdown show" >
                                    <a href = "#" data-toggle = "dropdown" data-display = "static" >
                                        <svg xmlns = "http://www.w3.org/2000/svg" width = "24" height = "24" viewBox = "0 0 24 24" fill = "none" stroke = "currentColor" stroke-width = "2" stroke-linecap = "round" stroke-linejoin = "round" class="feather feather-more-horizontal align-middle" >
                                            <circle cx = "12" cy = "12" r = "1" ></circle >
                                            <circle cx = "19" cy = "12" r = "1" ></circle >
                                            <circle cx = "5" cy = "12" r = "1" ></circle >
                                        </svg >
                                    </a >

                                    <div class="dropdown-menu dropdown-menu-right" >
                                        <a class="dropdown-item" href = "#" > Action</a >
                                        <a class="dropdown-item" href = "#" > Another action </a >
                                        <a class="dropdown-item" href = "#" > Something else here </a >
                                    </div >
                                </div >
                            </div >
                            <h5 class="card-title mb-0" >private info </h5 >
                        </div >
                        <div class="card-body" >
                            <form >
                                <div class="form-row" >
                                    <div class="form-group col-md-6" >
                                        <label for="inputFirstName" > First name </label >
                                        <input type = "text" class="form-control" id = "inputFirstName" placeholder = "First name" >
                                    </div >
                                    <div class="form-group col-md-6" >
                                        <label for="inputLastName" > Last name </label >
                                        <input type = "text" class="form-control" id = "inputLastName" placeholder = "Last name" >
                                    </div >
                                </div >
                                <div class="form-group" >
                                    <label for="inputEmail4" > Email</label >
                                    <input type = "email" class="form-control" id = "inputEmail4" placeholder = "Email" >
                                </div >
                                <div class="form-group" >
                                    <label for="inputAddress" > Address</label >
                                    <input type = "text" class="form-control" id = "inputAddress" placeholder = "1234 Main St" >
                                </div >
                                <div class="form-group" >
                                    <label for="inputAddress2" > Address 2 </label >
                                    <input type = "text" class="form-control" id = "inputAddress2" placeholder = "Apartment, studio, or floor" >
                                </div >
                                <div class="form-row" >
                                    <div class="form-group col-md-6" >
                                        <label for="inputCity" > City</label >
                                        <input type = "text" class="form-control" id = "inputCity" >
                                    </div >
                                    <div class="form-group col-md-4" >
                                        <label for="inputState" > State</label >
                                        <select id = "inputState" class="form-control" >
                                            <option selected = "" > Choose...</option >
                                            <option >...</option >
                                        </select >
                                    </div >
                                    <div class="form-group col-md-2" >
                                        <label for="inputZip" > Zip</label >
                                        <input type = "text" class="form-control" id = "inputZip" >
                                    </div >
                                </div >
                                <button type = "submit" class="btn btn-primary" > Save changes </button >
                            </form >

                        </div >
                    </div >

                </div >
                <div class="tab-pane fade" id = "password" role = "tabpanel" >
                    <div class="card" >
                        <div class="card-body" >
                            <h5 class="card-title" > Password</h5 >

                            <form >
                                <div class="form-group" >
                                    <label for="inputPasswordCurrent" > Current password </label >
                                    <input type = "password" class="form-control" id = "inputPasswordCurrent" >
                                    <small ><a href = "#" > Forgot your password ?</a ></small >
                                </div >
                                <div class="form-group" >
                                    <label for="inputPasswordNew" > new password</label >
                                    <input type = "password" class="form-control" id = "inputPasswordNew" >
                                </div >
                                <div class="form-group" >
                                    <label for="inputPasswordNew2" > Verify password </label >
                                    <input type = "password" class="form-control" id = "inputPasswordNew2" >
                                </div >
                                <button type = "submit" class="btn btn-primary" > Save changes </button >
                            </form >

                        </div >
                    </div >
                </div >
            </div >
        </div >
    </div >
   <?php
    }?>

</div>

</body>
</html>