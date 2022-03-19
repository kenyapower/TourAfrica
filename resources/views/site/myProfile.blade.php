<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Profile | TourAfrica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

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

        .delete {
            margin:auto;
            display:block;
        }
    </style>

</head>
<body>
@include('sweetalert::alert')

{{--{{dd($myInfo)}}--}}

<div class="container p-0">
    <h1 class="h3 mb-3">Settings</h1>

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
                    <a class="list-group-item list-group-item-action" data-toggle = "list" href = "#assistant" role = "tab" >
                        + Add Assistant Driver
                    </a >
                    <a class="list-group-item list-group-item-action" data-toggle = "list" href = "#new-vehicle" role = "tab" >
                        + Add Vehicle
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
                    <a class="list-group-item list-group-item-action" data-toggle = "list" href = "#delete" role = "tab" onclick="togglePopup()" >
                            Delete account
                    </a >

                </div>
            </div>
        </div >

        <div class="col-md-7 col-xl-8" >
            <div class="tab-content" >

                {{--my account panel--}}
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
                                        <a class="dropdown-item" href = "#" > Update Profile</a >
                                    </div >
                                </div >
                            </div >
                            <h5 class="card-title mb-0" >public info </h5 >
                        </div >
                        <div class="card-body" >
                            <form >
                                <div class="row" >
                                    <div class="col-md-8">
                                        <div class="form-group" >
                                            <label for="inputUsername"> Username </label >
                                            <input type = "text" class="form-control" id = "inputUsername" value="{{ old('username') ?? $myInfo->usercode}}" placeholder = "Username" readonly>
                                        </div >
                                        <div class="form-group" >
                                            <label for="inputUsername" > Biography</label >
                                            <textarea rows = "2" class="form-control" id = "inputBio" placeholder = "Tell something about yourself" ></textarea >
                                        </div >
                                    </div >
                                    <div class="col-md-4" >
                                        <div class="text-center" >
                                            <img alt = "Andrew Jones" src = "/uploads/profiles/{{$myInfo->driverimage}}" class="rounded-circle img-responsive mt-2" width = "128" height = "128" >
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
                                        <a class="dropdown-item" href = "#" > Update Details</a >
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
                                        <input type = "text" class="form-control" id = "inputFirstName" placeholder = "First name" value="{{ old('fname') ?? $myInfo->fname}}" >
                                    </div >
                                    <div class="form-group col-md-6" >
                                        <label for="inputLastName" > Second name </label >
                                        <input type = "text" class="form-control" id = "inputLastName" placeholder = "second name" value="{{ old('sname') ?? $myInfo->sname}}" >
                                    </div >
                                </div >
                                <div class="form-group" >
                                    <label for="inputLastName" > Last name </label >
                                    <input type = "text" class="form-control" id = "inputLastName" placeholder = "last name" value="{{ old('lname') ?? $myInfo->lname}}" >
                                </div >

                                <div class="form-group" >
                                    <label for="inputEmail4" > Email</label >
                                    <input type = "email" class="form-control" id = "inputEmail4" placeholder = "Email" value="{{ old('email') ?? $myInfo->email}}" >
                                </div >
                                <div class="form-group" >
                                    <label for="inputAddress" > Phone</label >
                                    <input type = "number" class="form-control" id = "inputAddress" placeholder = "Phone" value="{{ old('phoneNumber') ?? $myInfo->phoneNumber}}">
                                </div >
                            </form >

                        </div >
                    </div >

                </div >
                {{--my account panel ends--}}

                {{--add assistant driver panel--}}
                <div class="tab-pane fade" id = "assistant" role = "tabpanel">

                    <div class="card" >
                        <div class="card-header" >
                            <h5 class="card-title mb-0" >Assistant info </h5 >
                        </div >
                        <div class="card-body" >
                            <form action="addAss" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-row" >
                                    <div class="form-group col-md-6" >
                                        <label for="inputFirstName" > First name </label >
                                        <input type = "text" class="form-control" id = "inputFirstName" placeholder = "First name" name="fname" required>
                                    </div >
                                    <div class="form-group col-md-6" >
                                        <label for="inputLastName" > Second name </label >
                                        <input type = "text" class="form-control" id = "inputLastName" placeholder = "second name" name="sname" >
                                    </div >
                                </div >
                                <div class="form-group" >
                                    <label for="inputLastName" > Last name </label >
                                    <input type = "text" class="form-control" id = "inputLastName" placeholder = "last name" name="lname" required>
                                </div >

                                <div class="form-group" >
                                    <label for="inputEmail4" > Email</label >
                                    <input type = "email" class="form-control" id = "inputEmail4" placeholder = "Email" name="email" required>
                                </div >
                                <div class="form-group" >
                                    <label for="inputAddress" > Phone</label >
                                    <input type = "number" class="form-control" id = "inputAddress" placeholder = "Phone" name="phone" required>
                                </div >

                                <div class="form-group" >
                                    <label for="inputEmail4" > Their Profile Image: </label >
                                    <input type = "file"  accept="image/jpeg,png" name="profile" required>
                                    <div class="small text-muted mt-2">Upload your image. Max file size 25 MB</div>

                                </div >
                                <div class="form-group" >
                                    <label for="inputEmail4" > Their Driving License: </label >
                                    <input type = "file"  accept="image/jpeg,png" name="dl" required>
                                    <div class="small text-muted mt-2">Upload your image. Max file size 25 MB</div>

                                </div >

                                <button type = "submit" class="btn btn-primary delete"> Add Assistant Driver </button >

                            </form >
                        </div >
                    </div >

                </div >
                {{--assistant driver ends--}}

                {{--add vehicle panel--}}
                <div class="tab-pane fade" id = "new-vehicle" role = "tabpanel">

                    <div class="card" >
                        <div class="card-header" >
                            <h5 class="card-title mb-0" >Vehicle info </h5 >
                        </div >
                        <div class="card-body" >
                            <form action="addVehicle" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-row" >
                                    <div class="form-group col-md-6" >
                                        <label for="inputFirstName" > Vehicle Registration Number </label >
                                        <input type = "text" class="form-control" id = "inputFirstName" placeholder = "eg KVK 12GS" name="v_reg" required>
                                    </div >
                                    <div class="form-group col-md-6" >
                                        <label for="inputLastName" > Vehicle Make </label >
                                        <input type = "text" class="form-control" id = "inputLastName" placeholder = "vehicle make" name="v_make" required>
                                    </div >
                                </div >
                                <div class="form-group" >
                                    <label for="inputLastName" > Vehicle Capacity </label >
                                    <input type = "number" class="form-control" id = "inputLastName" placeholder = "capacity" name="v_capacity" required>
                                </div >

                                <div class="form-group" >
                                    <label for="inputEmail4" > Charges/ per day</label >
                                    <input type = "number" class="form-control" id = "inputEmail4" placeholder = "charges" name="v_charges" required>
                                </div >

                                <div class="form-group" >
                                    <label for="inputEmail4" > Vehicle Image: </label >
                                    <input type = "file"  accept="image/jpeg,png" name="v_image" required>
                                    <div class="small text-muted mt-2">Upload your image. Max file size 25 MB</div>

                                </div >

                                <button type = "submit" class="btn btn-primary delete"> Add Vehicle </button >

                            </form >
                        </div >
                    </div >

                </div >
                {{--vehicle panel ends--}}

                {{--password panel--}}
                <div class="tab-pane fade" id = "password" role = "tabpanel" >
                    <div class="card" >
                        <div class="card-body" >
                            <h5 class="card-title" > Password</h5 >

                            <form action="updatePass/{{$myInfo->usercode}}" method="POST">
                                {{ csrf_field() }}

                                <div class="form-group" >
                                    <label for="inputPasswordCurrent" > Current password </label >
                                    <input type = "password" class="form-control" id = "inputPasswordCurrent" name="old_password" value="{{ old('password') ?? $myInfo->password}}">
                                    <small ><a href = "#" > Forgot your password ?</a ></small >
                                </div >
                                <div class="form-group" >
                                    <label for="inputPasswordNew" > new password</label >
                                    <input type = "password" class="form-control" name="password" minlength="6" id = "inputPasswordNew" >
                                </div >
                                <div class="form-group" >
                                    <label for="inputPasswordNew2" > Verify password </label >
                                    <input type = "password" class="form-control" name="password_confirmation" minlength="6" id = "inputPasswordNew2" >
                                </div >
                                <button type = "submit" class="btn btn-primary" > Save changes </button >
                            </form >

                        </div >
                    </div >
                </div >

                {{--delete account panel--}}
                <div class="tab-pane fade" id = "delete" role = "tabpanel" >
                    <div class="card" >
                        <div class="card-body">

                            <h5 class="card-title" style="text-align: center" > Are You Sure ?</h5 >

                            <form action="deleteAcc/{{$myInfo->usercode}}" method="POST">
                                {{ csrf_field() }}
                                <button type = "submit" class="btn btn-danger delete"> Delete My Account </button >

                            </form >

                        </div >
                    </div >
                </div >
                {{--delete account panel ends--}}
            </div >
        </div >
    </div >

</div>
<script type="text/javascript">

    // Function to show and hide the popup
    function togglePopup() {
        $(".content").toggle();
    }
</script>
</body>
</html>
