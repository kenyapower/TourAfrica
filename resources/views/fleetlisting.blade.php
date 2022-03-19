
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Fleet | TourAfrica </title>

    <!-- Favicons -->
    <link href="assets/img/logo.jpeg" rel="icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mystyle.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>

</head>
<body>

<section id="cars">
    <div class="container py-5">
        <h3 class="text-center mb-5"><strong>Available vehicles</strong></h3>
        <div class="row justify-content-center mb-3">
            <div class="col-md-12 col-xl-10">
                <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                    <img src="documents/vehicle['v_image']?>" class="w-100"/>
                                    <a href="#!">
                                        <div class="hover-overlay">
                                            <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6">
                                <h5>vehicle['v_reg'] ?></h5>
                                <div class="d-flex flex-row">
                                    <div class="text-danger mb-1 me-2">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span>vehicle['v_capacity']?> seater</span>
                                </div>
                                <div class="mt-1 mb-0 text-muted small">
                                    <span> 4 wheel drive</span>
                                    <span class="text-primary"> • </span>
                                    <span>Offroader</span>
                                    <span class="text-primary"> • </span>
                                    <span>Sun Roof<br /></span>
                                </div>
                                <div class="mb-2 text-muted small">
                                    <span>Retractable roof</span>
                                    <span class="text-primary"> • </span>
                                    <span>Glass windows</span>
                                    <span class="text-primary"> • </span>
                                    <span>Jungle Green Color<br /></span>
                                </div>
                                <p class="text-truncate mb-4 mb-md-0">
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                <div class="d-flex flex-row align-items-center mb-1">
                                    <h4 class="mb-1 me-1">$12</h4>
                                    <span class="text-danger"><s>$20.99</s></span>/ per day
                                </div>
                                <h6 class="text-success">vehicle['v_status']?></h6>
                                <div class="d-flex flex-column mt-4">
                                    <a href="#" data-toggle="modal" data-target="#staticBackdrop">
                                        <button type="button" class="btn btn-outline-primary btn-sm mt-2">
                                            Book Vehicle
                                        </button>
                                    </a>
                                </div>

                            </div>
                            <div class="wrapper">
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Book Vehicle </h5>
                                                <!--                                                    <span class="text-info">   seater</span>-->

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="background-color: #8fc4b7">
                                                <h5> Payment Form </h5>

                                                <form action="#" method="POST">
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" name="fname" class="form-control" placeholder="First name">
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" name="lname" class="form-control" placeholder="Last name" required>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="email" name="email" class="form-control" placeholder="email" required>
                                                        </div>
                                                        <div class="col">
                                                            <input type="number" name="phone" class="form-control" minlength="10" maxlength="10" placeholder="Your phone number">
                                                            <span class="text-danger">To use during payments!</span>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="date" class="form-control" placeholder="Date" required>
                                                        </div>
                                                        <div class="col">
                                                            <input type="number" name="daysbooked" class="form-control" placeholder="Number of days" required>
                                                        </div>
                                                    </div>
                                                    <input name="v_reg" class="form-control" value="vehicle['v_reg'] ;?>" hidden>
                                                    <input name="daysbooked" class="form-control" value="vehicle['v_usercode'] ;?>" hidden>
                                                    <input name="daysbooked" class="form-control" value="vehicle['v_charges'] ;?>" hidden>

                                                    <br>
                                                </form>
                                            </div>
                                            <div class="modal-footer" style="background-color: #8fc4b7;">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" data-dismiss="modal">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
