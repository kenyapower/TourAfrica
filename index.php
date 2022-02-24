<?php
$details = include('db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourAfrica</title>

    <!-- Favicons -->
    <link href="assets/img/logo.jpeg" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="assets/style.css">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        function scrollto(div)
        {
            $('html,body').animate(
                {
                    scrollTop: $("#"+div).offset().top
                },'slow');
        }
    </script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="assets/img/logo.jpeg" >
            </div>
            <nav>
                <ul id="menuItems">
                    <li><a href="/" class="h-button"></a>Home</li>
                    <li onclick="scrollto('gallery');">About</li>
                    <li><a href="" class="h-button"></a>Account</li>
                    <li><a href="" class="h-button"></a>Products</li>
                    <li><a href="" class="h-button"></a>Contact Us</li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-2">
                <h1>TourAfrica</h1>
                <p>Get to experience nature in some of the most serene environments in Africa.
                    <br> We assure you of true and thrilling adventure, memory creating scenes and perfect backgrounds for your lens
                </p>
                <a href="products" class="btn">Explore TourAfrica &#8594;</a>
            </div>
            <div class="col-2">
<!--                <iframe width="560" height="315" src="https://www.youtube.com/watch?v=gTEXJsw62iU" allowfullscreen></iframe>-->
<!--                <img src="webimages/local-images/kangaita1.jpg">-->
                </video>
                <video width="500" height="400" controls>
                    <source src="assets/kenya.mp4" type=video/mp4>
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>

<!--{{----------------------featured teas section------------------}}-->
<!---->
<!--<div class="sample-pics">-->
<!--    <div class="small-container" style="background-image: url('assets/img/jungle.jpg'); height: 352px">-->
<!--        <div class="row">-->
<!--            <div class="col-3">-->
<!--                <img src="assets/img/pic5.jpg">-->
<!--            </div>-->
<!--            <div class="col-3">-->
<!--                <img src="assets/img/van6.jpg">-->
<!--            </div>-->
<!--            <div class="col-3">-->
<!--                <img src="assets/img/pic7.jpg">-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->

<!--{{----------------------featured teas section------------------}}-->

<div id="gallery">
    <div class="small-container">
        <h2 class="title">Featured Teas</h2>
        <div class="row">
            <div class="col-4">
                <img src="assets/img/pic1.jpg">
                <h4>Tea Sample 1</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$12.00</p>
            </div>
            <div class="col-4">
                <img src="assets/img/pic2.jpg">
                <h4>Tea Sample 8</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$17.00</p>
            </div>
            <div class="col-4">
                <img src="assets/img/pic3.jpg">
                <h4>Tea Sample 9</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$24.00</p>
            </div>
            <div class="col-4">
                <img src="assets/img/van1.jpg">
                <h4>Tea Sample 11</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$7.00</p>
            </div>
        </div>


        <h2 class="title">Our Gallery</h2>
        <div class="row">
            <div class="col-4">
                <img src="assets/img/van2.jpg">
                <h4>Tea Sample 2</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$10.00</p>
            </div>
            <div class="col-4">
                <img src="assets/img/van3.jpg">
                <h4>Tea Sample 3</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$16.00</p>
            </div>

            <div class="col-4">
                <img src="assets/img/van4.jpg">
                <h4>Tea Sample 4</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$4.40</p>
            </div>
            <div class="col-4">
                <img src="assets/img/pic5.jpg">
                <h4>Tea Sample 5</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$5.50</p>
            </div>
            <div class="col-4">
                <img src="assets/img/pic10.jpeg">
<!--                <h4>Tea Sample 6</h4>-->
<!--                <div class="rating">-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star-half-o"></i>-->
<!--                </div>-->
<!--                <p>$14.50</p>-->
            </div>
            <div class="col-4">
                <img src="assets/img/pic6.jpg">
<!--                <h4>Tea Sample 7</h4>-->
<!--                <div class="rating">-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star-o"></i>-->
<!--                </div>-->
<!--                <p>$10.00</p>-->
            </div>
            <div class="col-4">
                <img src="assets/img/pic7.jpg">
<!--                <h4>Tea Sample 10</h4>-->
<!--                <div class="rating">-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star-half-o"></i>-->
<!--                </div>-->
<!--                <p>$19.00</p>-->
            </div>
            <div class="col-4">
                <img src="assets/img/pic8.jpg">
<!--                <h4>Tea Sample 12</h4>-->
<!--                <div class="rating">-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star-half-o"></i>-->
<!--                </div>-->
<!--                <p>$3.90</p>-->
            </div>
        </div>
    </div>
</div>
<!--{{----------------------exclusive section------------------}}-->
<div class="exclusive">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="webimages/local-images/purple.jpg" class="exclusive-img">
            </div>
            <div class="col-2">
                <p>Exclusive Teas From Kangaita</p>
                <h1>Quality brands</h1>
                <small>
                    Kangaita Tea factory make five black orthodox grades. One of the best African tea is their OP-Orange Pekoe. It is a fancy looking grade.
                    It contains numerous tips as it is made from the finest leaves. It consists of very tightly rolled leaf resulting in a very attractive twisted and wiry appearance.
                    The liquor is quite balanced. It is demanded more for its attractive leaf appearance and its balanced cup. The production of OP is small and we are very proud and happy to offer this unique tea range to our customers.
                    Liquid is clear and transparent with deep orange-red colour, aroma is sweet and malty with some spiciness. Taste is lively with citrus and light floral tones.
                    However this tea tastes perfectly fine without additives, but a splash of milk can make a very smooth and energizing beverage.
                    Perfect for Good Morning.
                </small>
                <a href="products" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>

<!--{{-------------------testimonials------------------------}}-->
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                    The liquor is quite balanced. It is demanded more for its attractive leaf appearance and its balanced cup. The production of OP is small and we are very proud and happy to offer this unique tea range to our customers.
                </p>
                <i class="fa fa-quote-right"></i>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <img src="webimages/local-images/p1.jpg">
                <h3>Person 1</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                    The liquor is quite balanced. It is demanded more for its attractive leaf appearance and its balanced cup. The production of OP is small and we are very proud and happy to offer this unique tea range to our customers.
                </p>
                <i class="fa fa-quote-right"></i>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <img src="webimages/local-images/p4.jpg">
                <h3>Person 2</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                    The liquor is quite balanced. It is demanded more for its attractive leaf appearance and its balanced cup. The production of OP is small and we are very proud and happy to offer this unique tea range to our customers.
                </p>
                <i class="fa fa-quote-right"></i>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <img src="webimages/local-images/t4.jpg">
                <h3>Person 3</h3>
            </div>
        </div>
    </div>
</div>

<!--{{---------------------brands-----------------------}}-->
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="webimages/local-images/logo1.png">
            </div>
            <div class="col-5">
                <img src="webimages/local-images/logo2.png">
            </div>
            <div class="col-5">
                <img src="webimages/local-images/logo1.png">
            </div>
            <div class="col-5">
                <img src="webimages/local-images/logo2.png">
            </div>
            <div class="col-5">
                <img src="webimages/local-images/logo1.png">
            </div>
        </div>
    </div>
</div>

<!------------------footer----------------------->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our app</h3>
                <div class="app-logo">
                    <img src="assets/img/logo.jpeg">
<!--                    <img src="webimages/local-images/app-logo3.png">-->

<!--                    {{--                    <img src="webimages/local-images/app-logo2.png">--}}-->
                </div>
                <p>Get our app on playstore / appstore and interact with us more</p>
            </div>
            <div class="footer-col-2">
                <img src="webimages/local-images/kangaitateas.jpg">
                <p> Our purpose is to produce quality Orthodox and CTC teas </p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Farmers Portal</li>
                    <li>Shop</li>
                    <li>Home</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us on</h3>
                <ul>
                    <li>Twitter</li>
                    <li>Facebook</li>
                    <li>Instagram</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Made by Havoc <i class="fa fa-copyright"></i>
            <script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear)
            </script>
        </p>
    </div>
</div>
<!----------------toggle menu--------------->
<script>
    var menuItems = document.getElementById("menuItems");
    menuItems.style.maxHeight = '0px';

    function menutoggle()
    {
        if (menuItems.style.maxHeight = '0px')
        {
            menuItems.style.maxHeight = '200px'
        }
        else
        {
            menuItems.style.maxHeight = '0px'
        }
    }
</script>
</body>
</html>
