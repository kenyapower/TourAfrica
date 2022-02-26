<?php
$details = include('db_connect.php');
?>

<!--call header-->
<?php include 'header.php'; ?>

<!--index section starts here-->
<div id="index" class="tabcontent">
    <main role="main">

        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">TourAfrica</h1>
                <p class="p1">TourAfrica is a masterclass in action. we strive to bring the best of pleasure from nature and sceneries all across Africa </p>
                <p class="p2">We cater for your transportation throughout your trip for as long as your contract is valid. Air, water and land; <br>
                that is how far we go to make sure you get value for your money</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Try Today »</a></p>
            </div>
        </div>

    </main>
</div>
<!--index section ends here-->

<!--about section starts here-->
<div id="about" class="tabcontent">

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Transport Issues ? <span class="text-muted">We Got you.</span></h2>
                    <p class="lead">
                        We <b style="color: greenyellow"><i>TOURAFRICA</i></b> endeavor to ensure that transport to your travel destination is not an issue, we have a vast
                        network of vehicles, luxury cars, boats and choppers to help you move around during your trip.
                        <br>
                        Try our range of vehicles today, absolute quality and value for your money.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="assets/img/vans.jpg" data-holder-rendered="true">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="assets/img/pic7.jpg" data-holder-rendered="true">
                </div>

                <div class="col-md-7">
                    <h2 class="featurette-heading">Is Diversity your thing. <span class="text-muted">We got You !!!</span></h2>
                    <p class="lead">
                        We <b style="color: greenyellow"><i>TOURAFRICA</i></b>, will have you interacting with indigenous communities as they celebrate and perform their community rituals.
                        <br>
                        You will get to carry out some of these memorable experiences yourself.
                    </p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Does History Amuse you ? <span class="text-muted">We are here with the thrill.</span></h2>
                    <p class="lead">
                        At <b style="color: greenyellow"><i>TOURAFRICA</i></b>, we value history. We will take you down the chartered and dusty path of history
                        with visual representation of ancient culture. The pyraminds, the caves and many more of the eroded years, we are here to give you a taste
                        of what happened.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="assets/img/pic3.jpg" data-holder-rendered="true" style="width: 500px; height: 500px;">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">Taste Indigenous foods.</span></h2>
                    <p class="lead">
                        Are Recipes in your bucket list? <b style="color: greenyellow"><i>TOURAFRICA</i></b> will help you tick them by getting you lots of different
                        foods from communities all about the world.
                        <br>
                        Book and pen, buds and saliva, wet mouth and Lens ready for you will try lots of food during your trip.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="assets/img/specials-3.png" data-holder-rendered="true" style="width: 500px; height: 500px;">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->

</div>
<!--about section ends here-->

<!--contact section starts here-->
<div id="contact" class="tabcontent">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="contactForm-Handler.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                    <p style="color: green">What is your preferred contact method?</p>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" id="radio1" name="cmethod" value="phone" checked>
                        <label class="form-check-label" for="radio1">Phone</label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" id="radio2" name="cmethod" value="mail">
                        <label class="form-check-label" for="radio2">Email</label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" id="radio3" name="cmethod" value="post">
                        <label class="form-check-label" for="radio3">Post</label>
                    </div>

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="validateForm();">Send</a>
<!--                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>-->
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li>
                        <i class="bi bi-geo-alt-fill"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                        <p>Nairobi,Kenya</p>
                    </li>

                    <li>
                        <i class="bi bi-telephone-fill"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        <p>+254 795 573 597</p>
                    </li>

                    <li>
                        <i class="bi bi-envelope-fill"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                        </svg>
                        <p>tourafrica@gmail.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

</div>
<!--contact section ends here-->

<!--operation section starts here-->
<div id="operation" class="tabcontent">
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
                    <a href="car.php">
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Book Vehicle</button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<!--operation section ends here-->


<!--call all scripts-->
<?php include 'scripts.php'; ?>

<!--call footer-->
<?php include 'footer.php'; ?>