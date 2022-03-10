<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect('localhost','root','','tours','3307');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM vehicles";
?>

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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
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
                        <?php if($results = mysqli_query($conn, $sql)) {?>

                            <?php foreach ($results as $Vehicle){?>
                                <div class="row">
                                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                        <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                            <img src="documents/<?php echo $Vehicle['v_image']?>" class="w-100"/>
                                            <a href="#!">
                                                <div class="hover-overlay">
                                                    <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <h5><a href=""> <?php echo $Vehicle['v_reg'] ?></a></h5>
                                        <div class="d-flex flex-row">
                                            <div class="text-danger mb-1 me-2">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <span><?php echo $Vehicle['v_capacity']?> seater</span>
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
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                        <div class="d-flex flex-row align-items-center mb-1">
                                            <h4 class="mb-1 me-1">$<?php echo $Vehicle['v_charges']?></h4>
                                            <!--                                        <h4 class="mb-1 me-1">$13.99</h4>-->
                                            <span class="text-danger"><s>$20.99</s></span>
                                        </div>
                                        <h6 class="text-success"><?php echo $Vehicle['v_status']?></h6>
                                        <div class="d-flex flex-column mt-4">
                                            <!--                                        <button class="btn btn-primary btn-sm" type="button">Details</button>-->
<!--                                            <button class="btn btn-outline-primary btn-sm mt-2" type="button">-->
<!--                                                Book Vehicle-->
<!--                                            </button>-->
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            // Free result set
                            mysqli_free_result($results);

                            // Close connection
                            mysqli_close($conn);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--call footer-->
<?php include 'footer.php'; ?>