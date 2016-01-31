<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- TITLE OF SITE -->
  <title>Exclusively Mongrels</title>

  <!-- META DATA -->
  <meta name="description" content="Exclusively Mongrels is a non-profit organisation who appreciate the uniqueness of mongrels and that they are neither inferior nor superior to pedigrees but equally loving and fun to own in their own rights." />
  <meta name="keywords" content="animal rescue, pet rescue, animal shelter, pet shelter, animal rescue and shelter, non-profit, charity, pet rescue theme, animal rescue theme" />
  <meta name="author" content="ExclusivelyMongrels">

  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <!-- =========================
    FAV AND TOUCH ICONS
  ============================== -->
  <link rel="icon" href="{!!URL::to('assets')!!}/images/favicon.ico">
  <link rel="apple-touch-icon" href="{!!URL::to('assets')!!}/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="{!!URL::to('assets')!!}/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="{!!URL::to('assets')!!}/images/apple-touch-icon-114x114.png">

  <!-- =========================
     STYLESHEETS
  ============================== -->
  <!-- PRELOADER -->
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/preloader.css">

  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/bootstrap.min.css">

  <!-- GOOGLE FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700%7CRaleway:100,200,300,400,500,600,700' rel='stylesheet'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/icons/styles.css">

  <!-- OWL CAROUSEL CSS -->
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/owl.carousel.css">
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/owl.theme.yellow.css">

  <!-- NIVO LIGHTBOX -->
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/nivo-lightbox/default.css">

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/style.css">

  <!-- ANIMATE CSS -->
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/animate.css">

  <!-- RESPONSIVE FIXES -->
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/responsive.css">
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/custom.css">
  <link rel="stylesheet" href="{!!URL::to('assets')!!}/css/jquery-ui.css" />

  <!--[if lt IE 9]>
  <script src="{!!URL::to('assets')!!}/js/html5shiv.js"></script>
  <script src="{!!URL::to('assets')!!}/js/respond.min.js"></script>
  <![endif]-->

  <script src="{!!URL::to('assets')!!}/js/jquery-1.11.2.min.js"></script>
  <script src="{!!URL::to('assets')!!}/js/jquery.validate.js" ></script>
  <script src="{!!URL::to('assets')!!}//js/jquery-ui.min.js" ></script>

</head>
<body>
<!-- =========================
     HOME
============================== -->
<div class="home" id="home">
  <!-- NAVBAR -->
  <nav class="navbar @if(Request::url() == URL::to('/')) navbar-home navbar-fixed-top @endif" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#anima-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- TEMPLATE LOGO -->
        <a class="navbar-brand" href="{{URL::to('/')}}">Exclusively Mongrels</a>
      </div>

      <div class="collapse navbar-collapse" id="anima-navbar-collapse">
        <ul class="navbar-contact hidden-xs">
          <li class="email"><a href="">xmon2012@gmail.com</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#home">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contribution">Contribute</a></li>
          <li><a href="#pet-profile">Adopt</a></li>
          <!--<li><a href="#recent-events">Events</a></li>-->
          <!--<li><a href="#news">News</a></li>-->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  @if(Request::url() == URL::to('/'))
    <div class="owl-carousel">
      <div class="item slider">
        <img src="{!!URL::to('assets')!!}/images/{{$configs['banner1']}}" alt="Cat">

        <div class="slider-content">
          <div class="container">
            <h1 class="title-text">Be the difference. Adopt.</h1>
          </div>
        </div><!-- /.slider-content -->
      </div>

      <div class="item slider">
        <img src="{!!URL::to('assets')!!}/images/{{$configs['banner2']}}" alt="Cat">

        <div class="slider-content">
          <div class="container">
            <h1 class="title-text">Be the difference. Adopt.</h1>
            <!--<ul>
              <li>Adopt</li>
              <li>Care</li>
              <li>Love</li>
            </ul>
            <a href="#" class="btn btn-base btn-xlg">Donate Now</a>-->
          </div>
        </div><!-- /.slider-content -->
      </div>
    </div>
  @endif
</div>


@yield('content')


@yield('sidebar')

<!-- =========================
     FOOTER
============================== -->
<footer class="footer">
  <div class="footer-foot">
    <div class="container">
      <p>&copy; 2015 Developed by wei_ket@hotmail.com from <a href="www.adoptadog.sg">www.adoptadog.sg</a></p>
    </div>
  </div>
  <!-- /.footer-foot -->
</footer>


<script src="{!!URL::to('assets')!!}/js/bootstrap.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.nav.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.scrollTo.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.localScroll.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/owl.carousel.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/nivo-lightbox.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/custom.js"></script>

