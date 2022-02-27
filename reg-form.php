<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register| TourAfrica</title>
    <!-- Favicons -->
    <link href="assets/img/logo.jpeg" rel="icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mystyle.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>


</head>
<body>

<div class="wrapper">

<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                    <img src="assets/img/logo.jpeg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                        <form class="px-md-2">

                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example1q" class="form-control" />
                                <label class="form-label" for="form3Example1q">Name</label>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <div class="form-outline datepicker">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="exampleDatepicker1"
                                        />
                                        <label for="exampleDatepicker1" class="form-label">Select a date</label>
                                    </div>

                                </div>
                                <div class="col-md-6 mb-4">

                                    <select class="select">
                                        <option value="1" disabled>Gender</option>
                                        <option value="2">Female</option>
                                        <option value="3">Male</option>
                                        <option value="4">Other</option>
                                    </select>

                                </div>
                            </div>

                            <div class="mb-4">

                                <select class="select">
                                    <option value="1" disabled>Class</option>
                                    <option value="2">Class 1</option>
                                    <option value="3">Class 2</option>
                                    <option value="4">Class 3</option>
                                </select>

                            </div>

                            <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                <div class="col-md-6">

                                    <div class="form-outline">
                                        <input type="text" id="form3Example1w" class="form-control" />
                                        <label class="form-label" for="form3Example1w">Registration code</label>
                                    </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
</body>
</html>