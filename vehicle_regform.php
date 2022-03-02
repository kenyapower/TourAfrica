<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Reg | TourAfrica</title>

    <!-- Favicons -->
    <link href="assets/img/logo.jpeg" rel="icon">

    <link rel="stylesheet" type="text/css" href="assets/mystyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>

</head>
<body>

<div class="wrapper">
    <!-- Creating notification when the
        user logs in -->

    <!-- Accessible only to the users that
            have logged in already -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>
    <section class="h-100 h-custom">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <h1 class="text-white mb-4">Provide Vehicle Info</h1>

                    <div class="card" style="border-radius: 15px;">
                        <form action="vehicleHandler.php" method="POST">
                            <div class="card-body">

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Vehicle Plate</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="vehicle_reg" class="form-control form-control-lg" />

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Vehicle Make</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="text" name="v_make" class="form-control form-control-lg" placeholder="eg: Toyota Noah" />

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Vehicle Capacity</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="number" name="v_capacity" class="form-control form-control-lg" placeholder="eg: 7 seater" />

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0"> Operation Region</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <select  class="form-control form-control-lg" name="v_region">
                                            <option  selected>Choose Region</option>
                                            <option value="North Eastern">Central Africa</option>
                                            <option value="Central Africa">Central Africa</option>
                                            <option value="Sub-Sahara">Sub-Sahara</option>
                                            <option value="South-Africa">South-Africa</option>
                                        </select>
<!--                                    <input type="email" name="vehicle_capacity" class="form-control form-control-lg" placeholder="eg: 7 seater" />-->

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0"> Charges Per Day</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input type="number" name="v_charges" class="form-control form-control-lg" placeholder="Curency USD" />

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Upload Logbook/ Insurance</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input class="form-control form-control-lg" id="formFileLg" name="v_logbook" type="file" />
                                        <div class="small text-muted mt-2">Upload vehicle Logbook/Insurance to justify owning the car. Max file size 25 MB</div>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Upload valid Driving License</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input class="form-control form-control-lg" name="driver_license" id="formFileLg" type="file" />
                                        <div class="small text-muted mt-2">Upload copy of Driving License. Max file size 25 MB</div>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <h6 class="mb-0">Upload Vehicle Image</h6>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input class="form-control form-control-lg" id="formFileLg" name="v_image" type="file" />
                                        <div class="small text-muted mt-2">Upload Vehicle Image. Max file size 25MB</div>

                                    </div>
                                </div>

                                <hr class="mx-n3">

                                <div class="px-5 py-4">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit Info</button>
                                </div>

                            </div>

                            <input type="text" name="usercode" value="<?php echo $_SESSION['usercode']; ?>">

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>
</body>
</html>
