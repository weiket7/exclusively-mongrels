<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- TITLE OF SITE -->
  <title>Anima - Responsive Pet Rescue and Shelter Template</title>

  <!-- META DATA -->
  <meta name="description" content="Anima is a Responsive Bootstrap 3 Pet Rescue and Shelter Template Which is Designed Based on Twitter Bootstrap 3.3.4, HTML5 and CSS3. It is also suitable for Non-Profit or any Charity Organization." />
  <meta name="keywords" content="animal rescue, pet rescue, animal shelter, pet shelter, animal rescue and shelter, non-profit, charity, pet rescue theme, animal rescue theme" />
  <meta name="author" content="CodePassenger">

  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <!-- =========================
    FAV AND TOUCH ICONS
  ============================== -->
  <link rel="icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

  <!-- =========================
     STYLESHEETS
  ============================== -->
  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700%7CRaleway:100,200,300,400,500,600,700' rel='stylesheet'>

  <!-- FONT ICONS CSS -->
  <link rel="stylesheet" href="icons/styles.css">

  <!-- OWL CAROUSEL CSS -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.yellow.css">

  <!-- NIVO LIGHTBOX -->
  <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" href="css/nivo-lightbox/default.css">

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- RESPONSIVE FIXES -->
  <link rel="stylesheet" href="css/responsive.css">

  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

</head>
<body>
<!-- =========================
     HOME
============================== -->
<div class="home" id="home">
  <!-- NAVBAR -->
  <nav class="navbar" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#anima-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- TEMPLATE LOGO -->
        <a class="navbar-brand" href="#">Anima</a>
      </div>

      <div class="collapse navbar-collapse" id="anima-navbar-collapse">
        <ul class="navbar-contact hidden-xs">
          <li class="mob"><a href="">+880 1723 130 531</a></li>
          <li class="email"><a href="">support@yourdomain.com</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="index.html#about">About</a></li>
          <li><a href="index.html#contribution">Contribute</a>
            <ul>
              <li><a href="#">Level 1</a></li>
              <li><a href="#">Level 1 link 2</a>

                <ul>
                  <li><a href="#">Level 2</a></li>
                  <li><a href="#">Level 2 link 2</a></li>
                  <li><a href="#">Level 2</a></li>
                </ul>

              </li>
              <li><a href="#">Level 1</a></li>
            </ul>
          </li>
          <li><a href="index.html#pet-profile">pet Profile</a></li>
          <li><a href="index.html#recent-events">Events</a></li>
          <li><a href="index.html#pets-gallery">Gallery</a></li>
          <li><a href="index.html#news">News</a></li>
          <li><a href="index.html#contact">Contact</a></li>
          <li><a href="shortcode.html">Shortcode</a></li>
          <li><a href="#" class="nav-donate">Donate Now</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>



<!-- =========================
     PAGE HEADER
============================== -->
<div class="page-head">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <header class="section-header">
          <h1 class="title-text">Blog Page</h1>
        </header>
        <p><a href="index.html">Return to Home page</a></p>
      </div>

      <div class="col-md-5">
        <ul class="bredcrumbs">
          <li><a href="#">Home</a></li>
          <li>Blog</li>
        </ul>
      </div>
    </div>
  </div>
</div>


@yield('content')

<!-- =========================
     FOOTER
============================== -->
<footer class="footer">
  <div class="footer-head">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h2 class="title-text">Anima</h2>
        </div>
        <div class="text-right col-sm-6">
          <ul class="social-links text-center">
            <li><a href="#"><i class="icon-facebook"></i><span>Facebook</span></a></li>
            <li><a href="#"><i class="icon-google-plus"></i><span>Google+</span></a></li>
            <li><a href="#"><i class="icon-twitter"></i><span>Twitter</span></a></li>
            <li><a href="#"><i class="icon-linkedin"></i><span>Linkedin</span></a></li>
            <li><a href="#"><i class="icon-instagram"></i><span>Instagram</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div><!-- /.footer-head -->

  <section class="footer-body">
    <div class="container">
      <div class="row">
        <div class="row-item col-md-4">
          <h4 class="title-text">about us</h4>
          <p>As a nono-profit organistion we do lots of social activistis, you can find those in the following links.</p>

          <div class="row">
            <div class="col-md-6">
              <ul class="footer-link">
                <li><a href="#">Mission and Vision</a></li>
                <li><a href="#">Mission and Vision</a></li>
                <li><a href="#">Mission and Vision</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="footer-link">
                <li><a href="#">Mission and Vision</a></li>
                <li><a href="#">Mission and Vision</a></li>
                <li><a href="#">Mission and Vision</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row-item col-md-4">
          <h4 class="title-text">Subscribe</h4>
          <p>To stay touch we touch and our works please subscribe our newsletter by entering your email address.</p>

          <form id="subscribe" role="form" class="subscribe">
            <div class="input-group">
              <label for="subscribe-email" class="sr-only">Your email address</label>
              <input type="email" name="subscribe-email" id="subscribe-email" class="form-control" placeholder="Your email address">
              <button class="btn submit-btn">subscribe</button>
            </div>

            <p class="success-msg">You are successfully subscribed!</p>
            <p class="error-msg">Error! Something went wrong!</p>
          </form>

        </div>

        <div class="row-item col-md-4">
          <h4 class="title-text">flickr photos</h4>

          <ul class="flickr-feed"></ul>
        </div>
      </div>
    </div>
  </section><!-- /.footer-body -->

  <div class="footer-foot">
    <div class="container">
      <p>&copy; 2015 <a href="http://codepassenger.com/">CodePassanger</a> - Nonprofit Template By CodePassenger</p>
    </div>
  </div>
  <!-- /.footer-foot -->
</footer>


<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.localScroll.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script src="js/matchMedia.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>