<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link href="assets/img/logo.jpeg" rel="icon">

    <link rel="stylesheet" type="text/css" href="assets/website_style.css">

    <script type="text/javascript" src="jquery.js"></script>
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
<div id="header">
    <li id="site_name">TourAfrica</li>
    <li onclick="scrollto('home');">HOME</li>
    <li onclick="scrollto('about');">ABOUT</li>
    <li onclick="scrollto('contact');">CONTACT</li>
</div>

<div id="home">
    <video controls>
        <source src="assets/kenya.mp4" type=video/mp4>
        Your browser does not support the video tag.
    </video>

</div>

<div id="home">
    <h1>Demo Of One Page Website Template Using HTML, CSS And jQuery<p>TalkersCode.com</p></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus quam quis nibh fringilla sit amet consectetur lectus malesuada. Sed nec libero erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi nisi, rhoncus ut vestibulum ac, sollicitudin quis lorem. </p>
</div>
<p>Demo Of One Page Website Template Using HTML, CSS And jQuery TalkersCode.com</p>
<div id="about">
    <p>In this tutorial we will show you how to create One Page Website Template Using HTML, CSS And jQuery.Now you can build simple and beautiful website quickly.</p>
    <p>TalkersCode.com is a complete destination to learn Web Development with Best, Fast and Easy Methods for those who is a novice and wants to be the Xpert in Web Development.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus quam quis nibh fringilla sit amet consectetur lectus malesuada. Sed nec libero erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi nisi, rhoncus ut vestibulum ac, sollicitudin quis lorem. </p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus quam quis nibh fringilla sit amet consectetur lectus malesuada. Sed nec libero erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi nisi, rhoncus ut vestibulum ac, sollicitudin quis lorem. </p>
</div>

<div id="contact">
    <h1>If you have any question or query you can contact us at <br>talkerscode@gmail.com <br><br>or you can fill the form below</h1>
    <input type="text" placeholder="Name">
    <textarea placeholder="Message"></textarea>
    <input type="submit" value="SEND">
</div>


</body>
</html>
