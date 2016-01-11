
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Sezgi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body id="sezgi" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#sezgi">SEZGI</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#sezgi">HOME</a></li>
                <li><a href="#social">SOCIAL</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/sezgicraft">SezgiCraft</a></li>
                        <li><a href="#">SezgiHosting - COMING SOON</a></li>
                        <li><a href="/games">SezgiGames - COMING SOON</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Slideshow-image-1_zps1p7gqyjx.png" alt="New York" width="1200" height="700">
            <div class="carousel-caption">
                <h3>Welcome</h3>
                <p>Welcome to the homepage!</p>
            </div>
        </div>

        <div class="item">
            <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Slideshow-image-2_zps4h4z0zdw.png" alt="Chicago" width="1200" height="700">
            <div class="carousel-caption">
                <h3>Keep Updated</h3>
                <p>Check out our social media to keep up to date with everything!</p>
            </div>
        </div>

        <div class="item">
            <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Slideshow-image-3_zpsw0ogfgmq.png" alt="Los Angeles" width="1200" height="700">
            <div class="carousel-caption">
                <h3>More Services</h3>
                <p>Click on the more tab to see the other things we do at Sezgi!</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="social" class="container text-center">
    <h3>SEZGI</h3>
    <p><em>About Sezgi!</em></p>
    <p>Sezgi is a community that myself and my good friend have built up over a period of 2 years. Sezgi was orginially named
        Incepticraft and Sezgi/Incepticraft did start out as a minecraft community. We are now looking to expand into different areas,
        so we no longer will just be a minecraft community! We will be keeping the home page as up to date as we possibly can so make
        sure you stay tuned!</p>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <p class="text-center"><strong>Twitter</strong></p><br>
            <a href="http://www.twitter.com/Sezgicraft">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Twitter_zpsjm093zz8.png" class="img-circle person" alt="Random Name" width="255" height="255">
            </a>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>Forum</strong></p><br>
            <a href="http://bit.ly/SezgiF" >
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Forum_zpsv6gvt1mi.png" class="img-circle person" alt="Random Name" width="255" height="255">
            </a>
        </div>
        <div class="col-sm-4">
            <p class="text-center"><strong>Instagram</strong></p><br>
            <a href="http://www.instagram.com/PennaDSGN">
                <img src="http://i1206.photobucket.com/albums/bb455/IPenna/Instagram_zpsxagvwuqu.png" class="img-circle person" alt="Random Name" width="255" height="255">
            </a>
        </div>
    </div>
</div>
<div id="tour" class="bg-1">
<!-- Container (Contact Section) -->
<div id="contact" class="container">
        <h3 class="text-center">Contact</h3>
        <p class="text-center"><em>Get in touch!</em></p>

        <div class="row" id="contact">
            <div class="col-md-12">
                <p><span class="glyphicon glyphicon-map-marker"></span>Nottingham, UK</p>
                <p><span class="glyphicon glyphicon-user"></span>Twitter: @Sezgicraft</p>
                <p><span class="glyphicon glyphicon-envelope"></span>Email: SezgiOfficial@hotmail.com</p>
            </div>

        </div>

    <br>
    <h3 class="text-center">Staff</h3>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Matt</a></li>
        <li><a data-toggle="tab" href="#menu1">Penna</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h2>Matt, Owner</h2>
            <p>Web Developer - I am a web developer working for a big reputable car company in the UK. I started this community,
            over 2 years ago and have had various roles and done various things throughout them two years with the community.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h2>Penna, Co-Owner</h2>
            <p>Digital-Marketing/Graphic Designer - I help Matt with the branding of Sezgi, I do all the graphic related stuff
            and help market it too! I have been a part of Sezgi for well over a year and I have been Co-Owner ever since.</p>
        </div>
    </div>
</div>

<div id="googleMap"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var myCenter = new google.maps.LatLng(52.9540019, -1.240101);

    function initialize() {
        var mapProp = {
            center:myCenter,
            zoom:12,
            scrollwheel:false,
            draggable:false,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-71831538-1', 'auto');
        ga('send', 'pageview');

    </script>
<!-- Footer -->
<footer class="text-center">
    <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a><br><br>
    <p>Sezgi 2015</p>
</footer>

<style>
    body {
        font: 400 15px/1.8 Lato, sans-serif;
        color: #777;
    }
    h3, h4 {
        margin: 10px 0 30px 0;
        letter-spacing: 10px;
        font-size: 20px;
        color: #111;
    }
    .container {
        padding: 80px 120px;
    }
    .person {
        border: 10px solid transparent;
        margin-bottom: 25px;
        width: 80%;
        height: 80%;
        opacity: 0.7;
    }
    .person:hover {
        border-color: #f1f1f1;
    }
    .carousel-inner img {
        -webkit-filter: grayscale(90%);
        filter: grayscale(90%); /* make all photos black and white */
        width: 100%; /* Set width to 100% */
        margin: auto;
    }
    .carousel-caption h3 {
        color: #fff !important;
    }
    @media (max-width: 600px) {
        .carousel-caption {
            display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
        }
    }
    .bg-1 {
        background: #2d2d30;
        color: #bdbdbd;
    }
    .bg-1 h3 {color: #fff;}
    .bg-1 p {font-style: italic;}
    .list-group-item:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
    }
    .list-group-item:last-child {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
    }
    .thumbnail p {
        margin-top: 15px;
        color: #555;
    }
    .btn {
        padding: 10px 20px;
        background-color: #333;
        color: #f1f1f1;
        border-radius: 0;
        transition: .2s;
    }
    .btn:hover, .btn:focus {
        border: 1px solid #333;
        background-color: #fff;
        color: #000;
    }
    .modal-header, h4, .close {
        background-color: #333;
        color: #fff !important;
        text-align: center;
        font-size: 30px;
    }
    .modal-header, .modal-body {
        padding: 40px 50px;
    }
    .nav-tabs li a {
        color: #777;
    }
    #googleMap {
        width: 100%;
        height: 400px;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
    }
    .navbar {
        font-family: Montserrat, sans-serif;
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;
    }
    .navbar li a, .navbar .navbar-brand {
        color: #d5d5d5 !important;
    }
    .navbar-nav li a:hover {
        color: #fff !important;
    }
    .navbar-nav li.active a {
        color: #fff !important;
        background-color: #29292c !important;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
    }
    .open .dropdown-toggle {
        color: #fff;
        background-color: #555 !important;
    }
    .dropdown-menu li a {
        color: #000 !important;
    }
    .dropdown-menu li a:hover {
        background-color: greenyellow !important;
    }
    footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px;
    }
    footer a {
        color: #f5f5f5;
    }
    footer a:hover {
        color: #777;
        text-decoration: none;
    }
    .form-control {
        border-radius: 0;
    }
    textarea {
        resize: none;
    }
    #contact{
        text-align: center;
    }
</style>
</body>
</html>
