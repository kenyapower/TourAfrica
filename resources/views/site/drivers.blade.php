{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>Drivers | TourAfrica</title>--}}

{{--    <!-- Favicons -->--}}
{{--    <link href="img/logo.jpeg" rel="icon">--}}

{{--    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">--}}
{{--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">--}}

{{--    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>--}}
{{--    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}


{{--</head>--}}
{{--<body>--}}
{{--<div class="wrapper">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="main-box clearfix">--}}
{{--                    @foreach($drivers as $driver)--}}
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table user-list">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th><span>Driver</span></th>--}}
{{--                                <th><span>Created</span></th>--}}
{{--                                <th class="text-center"><span>Status</span></th>--}}
{{--                                <th><span>Email</span></th>--}}
{{--                                <th>&nbsp;</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    @if(is_null($driver->driverimage))--}}
{{--                                    <img src="/img/avatar.png" alt="">--}}
{{--                                    @else--}}
{{--                                    <img src="/uploads/profiles/{{$driver->driverimage}} " alt="">--}}
{{--                                    @endempty--}}
{{--                                    @empty(!$driver->driverimage)--}}
{{--                                    <img src="/img/avatar.png" alt="">--}}
{{--                                    @else--}}
{{--                                    <img src="/uploads/profiles/{{$driver->driverimage}} " alt="">--}}
{{--                                    @endempty--}}
{{--                                    <a href="#" class="user-link">fname'])?> sname'])?> </a>--}}
{{--                                    <span class="user-subhead">'usercode'] ?></span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    created_at'] ?>--}}
{{--                                </td>--}}
{{--                                <td class="text-center">--}}
{{--                                    <span class="label label-default">['driverstatus'] ?></span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="#">phoneNumber'] ?></a>--}}
{{--                                </td>--}}
{{--                                <td style="width: 20%;">--}}
{{--                                    <a href="#" class="table-link">--}}
{{--									<span class="fa-stack">--}}
{{--										<i class="fa fa-square fa-stack-2x"></i>--}}
{{--										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>--}}
{{--									</span>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="table-link">--}}
{{--									<span class="fa-stack">--}}
{{--										<i class="fa fa-square fa-stack-2x"></i>--}}
{{--										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>--}}
{{--									</span>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="table-link danger">--}}
{{--									<span class="fa-stack">--}}
{{--										<i class="fa fa-square fa-stack-2x"></i>--}}
{{--										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>--}}
{{--									</span>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}

{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                    <ul class="pagination pull-right">--}}
{{--                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>--}}
{{--                        <li><a href="#">1</a></li>--}}
{{--                        <li><a href="#">2</a></li>--}}
{{--                        <li><a href="#">3</a></li>--}}
{{--                        <li><a href="#">4</a></li>--}}
{{--                        <li><a href="#">5</a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!--call footer-->--}}

{{--</body>--}}
{{--</html>--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Contacts page - Bootdey.com</title>

    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body{
            color: #8a909d;
            background:#eee;
            margin-top:20px;
        }

        @media (min-width: 992px){
            .card-default {
                margin-bottom: 2rem;
            }
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #ffffff;
            background-clip: border-box;
            border: 1px solid #e5e9f2;
            border-radius: 0.25rem;
        }

        .card-default .card-header {
            padding-top: 1.875rem;
            padding-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            background-color: transparent;
            border-bottom: none;
            flex-wrap: wrap;
            text-transform: capitalize;
        }

        .p-4 {
            padding: 1.25rem !important;
        }

        a{
            text-decoration:none;
        }

        .contact-list img {
            width:100px;
            height:100px;
        }
    </style>

</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
<div class="container">
    <div class="content contact-list">
        <div class="card card-default">
            <div class="card-header align-items-center px-3 px-md-5">
                <h2>Drivers</h2>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-contact">Add Contact</button>
            </div>

            <div class="card-body px-3 px-md-5">
                <div class="row">
                    @foreach($drivers as $driver)
                    <div class="col-lg-6 col-xl-4 col-md-6 col-sm-12">
                        <div class="card card-default p-4">
                            <a href="javascript:0" class="media text-secondary" data-toggle="modal" data-target="#modal-contact">
                                @if(is_null($driver->driverimage))
                                    <img src="/img/avatar.png" alt="">
                                @else
                                    <img src="/uploads/profiles/{{$driver->driverimage}} " alt="">
                                @endempty
                                <div class="media-body">
                                    <h5 class="mt-0 mb-2 text-dark">Emma Smith</h5>
                                    <ul class="list-unstyled text-smoke text-smoke">
                                        <li class="d-flex">
                                            <i class="mdi mdi-map mr-1"></i>
                                            <span>Nulla vel metus 15/178</span>
                                        </li>
                                        <li class="d-flex">
                                            <i class="mdi mdi-email mr-1"></i>
                                            <span>exmaple@email.com</span>
                                        </li>
                                        <li class="d-flex">
                                            <i class="mdi mdi-phone mr-1"></i>
                                            <span>(123) 888 777 632</span>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Contact Modal -->
        <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-end border-bottom-0">
                        <button type="button" class="btn-edit-icon" data-dismiss="modal" aria-label="Close">
                            <i class="mdi mdi-pencil"></i>
                        </button>

                        <div class="dropdown">
                            <button class="btn-dots-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </button>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                            </div>
                        </div>

                        <button type="button" class="btn-close-icon" data-dismiss="modal" aria-label="Close">
                            <i class="mdi mdi-close"></i>
                        </button>
                    </div>

                    <div class="modal-body pt-0">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="profile-content-left px-4">
                                    <div class="card text-center px-0 border-0">
                                        <div class="card-img mx-auto">
                                            <img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user image" />
                                        </div>

                                        <div class="card-body">
                                            <h4 class="py-2">Albrecht Straub</h4>
                                            <p>Albrecht.straub@gmail.com</p>
                                            <a class="btn btn-primary btn-pill btn-lg my-4" href="javascript:void(0)">Follow</a>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <div class="text-center pb-4">
                                            <h6 class="pb-2">1503</h6>
                                            <p>Friends</p>
                                        </div>

                                        <div class="text-center pb-4">
                                            <h6 class="pb-2">2905</h6>
                                            <p>Followers</p>
                                        </div>

                                        <div class="text-center pb-4">
                                            <h6 class="pb-2">1200</h6>
                                            <p>Following</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="contact-info px-4">
                                    <h4 class="mb-1">Contact Details</h4>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                                    <p>Albrecht.straub@gmail.com</p>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                                    <p>+99 9539 2641 31</p>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                                    <p>Nov 15, 1990</p>
                                    <p class="text-dark font-weight-medium pt-4 mb-2">Event</p>
                                    <p>Lorem, ipsum dolor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Contact Button  -->
        <div class="modal fade" id="modal-add-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header px-4">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Create New Contact</h5>
                        </div>
                        <div class="modal-body px-4">
                            <div class="form-group row mb-6">
                                <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                                <div class="col-sm-8 col-lg-10">
                                    <div class="custom-file mb-1">
                                        <input type="file" class="custom-file-input" id="coverImage" required="" />
                                        <label class="custom-file-label" for="coverImage">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstName">First name</label>
                                        <input type="text" class="form-control" id="firstName" value="Albrecht" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lastName">Last name</label>
                                        <input type="text" class="form-control" id="lastName" value="Straub" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="userName">User name</label>
                                        <input type="text" class="form-control" id="userName" value="Doe" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" value="albrecht.straub@gmail.com" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="Birthday">Birthday</label>
                                        <input type="text" class="form-control" id="Birthday" value="01-10-1993" />
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="event">Event</label>
                                        <input type="text" class="form-control" id="event" value="Some value for event" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer px-4">
                            <button type="button" class="btn btn-smoke btn-pill" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary btn-pill">Save Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

</script>
</body>
</html>
