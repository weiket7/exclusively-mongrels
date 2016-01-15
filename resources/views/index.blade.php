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

  <!-- FONT ICONS CSS -->
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

  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

</head>
<body>
<!-- Pre Loader -->
<div class="pre-loader">
  <div class="spinner"></div>
</div>

<!-- =========================
     HOME
============================== -->
<div class="home" id="home">
  <!-- NAVBAR -->
  <nav class="navbar navbar-home navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#anima-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- TEMPLATE LOGO -->
        <a class="navbar-brand" href="#">Exclusively Mongrels</a>
      </div>

      <div class="collapse navbar-collapse" id="anima-navbar-collapse">
        <ul class="navbar-contact hidden-xs">
          {{--<li class="mob"><a href="">+11 (45) 322 199 33</a></li>--}}
          <li class="email"><a href="">xmon2012@gmail.com</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#home">Home <span class="sr-only">(current)</span></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contribution">Contribute</a></li>
          <li><a href="#pet-profile">Adopt</a></li>
          <li><a href="#recent-events">Events</a></li>
          <!--<li><a href="#news">News</a></li>-->
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- CAROUSEL -->
  <div class="owl-carousel">
    <div class="item slider">
      <img src="{!!URL::to('assets')!!}/images/{{$configs['banner1']}}" alt="Cat">

      <div class="slider-content">
        <div class="container">
          <h1 class="title-text">Save the homeless pet</h1>
          <ul>
            <li>Adopt</li>
            <li>Care</li>
            <li>Love</li>
          </ul>
          <a href="#" class="btn btn-base btn-xlg">Donate Now</a>
        </div>
      </div><!-- /.slider-content -->
    </div>

    <div class="item slider">
      <img src="{!!URL::to('assets')!!}/images/carousel/dog-1.jpg" alt="Dog">

      <div class="slider-content">
        <div class="container">
          <h1 class="title-text">Adopt pet and help them</h1>
          <ul>
            <li>Adopt</li>
            <li>Care</li>
            <li>Love</li>
          </ul>
          <a href="#" class="btn btn-base btn-xlg">Donate Now</a>
        </div>
      </div><!-- /.slider-content -->
    </div>

    <div class="item slider">
      <img src="{!!URL::to('assets')!!}/images/carousel/cat-2.jpg" alt="Cat">

      <div class="slider-content">
        <div class="container">
          <h1 class="title-text">Pet is your friend</h1>
          <ul>
            <li>Adopt</li>
            <li>Care</li>
            <li>Love</li>
          </ul>
          <a href="#" class="btn btn-base btn-xlg">Donate Now</a>
        </div>
      </div><!-- /.slider-content -->
    </div>
  </div>
</div>





<!-- =========================
     ABOUT
============================== -->
<div class="about full-width" id="about">
  <div class="fwd-row base-content">
    <div class="col_2_4">
      <img src="{{URL::to('assets')}}/images/{{$configs['mission_image']}}" alt="Dog 1" class="img-responsive">
    </div>

    <div class="col_2_4">
      <article>
        <i class="icon-inside icon-plane-airport"></i>
        <h4 class="title-text">Our Mission</h4>
        <hr class="white-line">
        <p>{{$configs['mission_text']}}</p>
      </article>
    </div>
  </div>

  <div class="fwd-row sub-content">
    <div class="yellow-bg col_2_4">
      <div class="col_2_4">
        <img src="{{URL::to('assets')}}/images/{{$configs['vision_image']}}" alt="Cat 1" class="img-responsive">
      </div>

      <div class="col_2_4">
        <article>
          <i class="icon-inside icon-rocket"></i>
          <h4 class="title-text">Our Vision</h4>
          <hr class="white-line">
          <p>{{$configs['vision_text']}}</p>
        </article>
      </div>
    </div>

    <div class="gray-bg col_2_4">
      <div class="col_2_4">
        <img src="{{URL::to('assets')}}/images/{{$configs['success_image']}}" alt="Dog 1" class="img-responsive">
      </div>

      <div class="col_2_4">
        <article>
          <i class="icon-inside icon-prize-award"></i>
          <h4 class="title-text">Recent Success</h4>
          <hr class="yellow-line">
          <p>{{$configs['success_text']}}</p>
        </article>
      </div>
    </div>
  </div>
</div>



<!-- =========================
     CONTRIBUTION
============================== -->
<section class="contribution" id="contribution">
  <div class="container">
    <header class="section-header">
      <h2 class="title-text">Contribute</h2>
      <p class="sub-title">Your small contribution make a huge difference and encourage us to continue our works of success.</p>
    </header>

    <div class="row">
      <!-- HOW YOUR CAN CONTRIBUTE -->
      <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 wow fadeInUp" data-wow-delay="0s">
        <div class="hover-img">
          <img src="{!!URL::to('assets')!!}/images/{{$configs['adopt_image']}}" alt="Cat" class="img-responsive">

          <div class="hover-content">
            <a href="blog-single.html" class="link-popup">
              <i class="icon-inside icon-link"></i>
            </a>
          </div>
        </div>

        <article>
          <h4 class="title-text"><a href="blog-single.html">Adopt</a></h4>
          <hr class="yellow-line">
          <p>{{$configs['adopt_text']}}</p>

          <a href="blog-single.html" class="btn btn-base">Learn More</a>
        </article>
      </div>

      <!-- HOW YOUR CAN CONTRIBUTE -->
      <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 wow fadeInUp" data-wow-delay="0.3s">
        <div class="hover-img">
          <img src="{!!URL::to('assets')!!}/images/{{$configs['foster_image']}}" alt="Cat" class="img-responsive">

          <div class="hover-content">
            <a href="blog-single.html" class="link-popup">
              <i class="icon-inside icon-link"></i>
            </a>
          </div>
        </div>

        <article>
          <h4 class="title-text"><a href="blog-single.html">Foster</a></h4>
          <hr class="yellow-line">
          <p>{{$configs['foster_text']}}</p>

          <a href="blog-single.html" class="btn btn-base">Learn More</a>
        </article>
      </div>

      <!-- HOW YOUR CAN CONTRIBUTE -->
      <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 wow fadeInUp" data-wow-delay="0.6s">
        <div class="hover-img">
          <img src="{!!URL::to('assets')!!}/images/{{$configs['donate_image']}}" alt="Dog" class="img-responsive">

          <div class="hover-content">
            <a href="blog-single.html" class="link-popup">
              <i class="icon-inside icon-link"></i>
            </a>
          </div>
        </div>

        <article>
          <h4 class="title-text"><a href="blog-single.html">Donate</a></h4>
          <hr class="yellow-line">
          <p>{{$configs['donate_text']}}</p>

          <a href="blog-single.html" class="btn btn-base">Learn More</a>
        </article>
      </div>
    </div>
  </div>
</section>



<section class="pet-profile" id="pet-profile">
  <div class="container">
    <header class="section-header">
      <h2 class="title-text">Adopt</h2>
      <p class="sub-title">We have a collection lost cute, handsome and polite cats and dogs that make you adorable and affectionate.</p>
    </header>

    <div class="row">
      @foreach($adopts as $adopt)
      <div class="row-item col-md-3 col-sm-6">
        <div class="individual-pet">
          <img src="{!!URL::to('assets')!!}/images/adopt/{{$adopt->image}}" alt="Cat" class="img-responsive">

          <article>
            <h4 class="title-text text-capitalize">{{$adopt->adopt_name}}</h4>
            <hr class="yellow-line">
            <p>Turkey is very gentle and modest cats we ever find. After adopting this gentle cat you will be very happy.</p>
          </article>

          <div class="profile">
            <ul>
              <li>Age: <strong>{{$adopt->age}}</strong></li>
              <li>Temperament: <strong>{{$adopt->temperament}}</strong></li>
            </ul>

            <a href="blog-signle.html" class="btn btn-fill">Learn More</a>
          </div> <!-- /.profile -->
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>



<!-- =========================
     RECENTS EVENTS
============================== -->
<section class="recent-events" id="recent-events">
  <div class="container">
    <header class="section-header">
      <h2 class="title-text">Recent Events</h2>
      <p class="sub-title">To rasie awarness among people and save the homless animals we annouce some big events that help the animals.</p>
    </header>

    <div class="row">
      <!-- INDIVIDUAL EVENT -->
      <div class="row-item col-md-4">
        <div class="pet-thumb">
          <img src="{!!URL::to('assets')!!}/images/animal-thumbs/cat-5.jpg" alt="Cat" class="img-responsive">
          <div class="event-timing" id="event-1"></div>
        </div>

        <article>
          <h4 class="title-text"><a href="blog-single.html">Be the pet lover</a></h4>
          <p>Free adoptation event is coming soon again in CA. Ready to buy home for your sweet loving pets and come to join with us.</p>
          <p class="post-info">
            <span class="date">12 November, 2015</span>
            <span class="place">Time Square, New York</span>
          </p>
        </article>
      </div>

      <!-- INDIVIDUAL EVENT -->
      <div class="row-item col-md-4">
        <div class="pet-thumb">
          <img src="{!!URL::to('assets')!!}/images/animal-thumbs/par-1.jpg" alt="Dog" class="img-responsive">
          <div class="event-timing" id="event-2"></div>
        </div>

        <article>
          <h4 class="title-text"><a href="blog-single.html">BIRDS FEEL SAVE UNDER YOU</a></h4>
          <p>We arrange a big event to raise money for the birds who feel sick or affected by the brutal human in difference place. Come and join.</p>
          <p class="post-info">
            <span class="date">12 November, 2015</span>
            <span class="place">Time Square, New York</span>
          </p>
        </article>
      </div>

      <!-- INDIVIDUAL EVENT -->
      <div class="row-item col-md-4">
        <div class="pet-thumb">
          <img src="{!!URL::to('assets')!!}/images/animal-thumbs/dog-4.jpg" alt="Parrot" class="img-responsive">
          <div class="event-timing" id="event-3"></div>
        </div>

        <article>
          <h4 class="title-text"><a href="blog-single.html">DOG IS ALWAYS YOUR FRIEND</a></h4>
          <p>To raise awarness among people not to expoilt their pets, we will gather in townhall in Newyork. You prenets make us proud.</p>
          <p class="post-info">
            <span class="date">12 November, 2015</span>
            <span class="place">Time Square, New York</span>
          </p>
        </article>
      </div>
    </div>
  </div>
</section>



<!-- =========================
     RECENT NEWS
============================== -->

<!--
<section class="news" id="news">
  <div class="container">
    <header class="section-header">
      <h2 class="title-text">Recent News</h2>
      <p class="sub-title">Our vounleers and community members are writting exciting stories and articles which make surprise and wise about pets love.</p>
    </header>

    <div class="row">
      <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 wow fadeInUp">
        <article>
          <header class="news-header clearfix">
            <div class="news-time">
              <span class="news-date">21</span>
              <span class="news-month">November</span>
            </div>

            <div class="news-detail">
              <h4 class="title-text text-capitalize">
                <a href="blog-single.html">Homeless is not an issue</a>
              </h4>
              <span class="news-author"><i class="fa fa-folder-o"></i> John Doe</span>
              <a href="blog-single.html" class="news-comment"><i class="fa fa-comment-o"></i> 35 Comments</a>
            </div>
          </header>

          <div class="news-img hover-img">
            <img src="{!!URL::to('assets')!!}/images/animal-thumbs/dog-6.jpg" alt="news image" class="img-responsive">

            <div class="hover-content">
              <a href="blog-single.html" class="link-popup">
                <i class="icon-inside icon-link"></i>
              </a>
            </div>
          </div>

          <div class="news-body">
            <p>Anima is non profit HTML5 bootstrap3 clean template for animal rescue. You can use it for your volunteer organisation, for industry or even personal for use. </p>

            <a href="#" class="btn btn-base">Read More</a>
          </div>
        </article>
      </div>

      <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 wow fadeInUp" data-wow-delay="0.2s">
        <article>
          <header class="news-header clearfix">
            <div class="news-time">
              <span class="news-date">12</span>
              <span class="news-month">November</span>
            </div>

            <div class="news-detail">
              <h4 class="title-text text-capitalize">
                <a href="blog-single.html">A bicycle ride</a>
              </h4>
              <span class="news-author"><i class="fa fa-folder-o"></i> John Doe</span>
              <a href="blog-single.html" class="news-comment"><i class="fa fa-comment-o"></i> 35 Comments</a>
            </div>
          </header>

          <div class="news-img hover-img">
            <img src="{!!URL::to('assets')!!}/images/animal-thumbs/dog-7.jpg" alt="news image" class="img-responsive">

            <div class="hover-content">
              <a href="blog-single.html" class="link-popup">
                <i class="icon-inside icon-link"></i>
              </a>
            </div>
          </div>

          <div class="news-body">
            <p>Anima is non profit HTML5 bootstrap3 clean template for animal rescue. You can use it for your volunteer organisation, for industry or even personal for use. </p>

            <a href="#" class="btn btn-base">Read More</a>
          </div>
        </article>
      </div>

      <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 wow fadeInUp" data-wow-delay="0.4s">
        <article>
          <header class="news-header clearfix">
            <div class="news-time">
              <span class="news-date">2</span>
              <span class="news-month">December</span>
            </div>

            <div class="news-detail">
              <h4 class="title-text text-capitalize">
                <a href="blog-single.html">Run to het the pet</a>
              </h4>
              <span class="news-author"><i class="fa fa-folder-o"></i> John Doe</span>
              <a href="blog-single.html" class="news-comment"><i class="fa fa-comment-o"></i> 35 Comments</a>
            </div>
          </header>

          <div class="news-img hover-img">
            <img src="{!!URL::to('assets')!!}/images/animal-thumbs/dog-8.jpg" alt="news image" class="img-responsive">

            <div class="hover-content">
              <a href="blog-single.html" class="link-popup">
                <i class="icon-inside icon-link"></i>
              </a>
            </div>
          </div>

          <div class="news-body">
            <p>Anima is non profit HTML5 bootstrap3 clean template for animal rescue. You can use it for your volunteer organisation, for industry or even personal for use. </p>

            <a href="#" class="btn btn-base">Read More</a>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
-->


<!-- =========================
     SUCCESS STORIES
============================== -->
<section class="success-stories" id="success-stories">
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="row-item col-md-3">
          <h3 class="title-text">Success Stories</h3>
          <p>Make a difference.</p>
        </div>

        <div class="row-item col-md-3 text-center">
          <i class="icon-heart-empty"></i>
          <span class="stat-count">1589</span>
          <span>Pets</span>
        </div>

        <div class="row-item col-md-3 text-center">
          <i class="icon-pin-map"></i>
          <span class="stat-count">326</span>
          <span>Places</span>
        </div>

        <div class="row-item col-md-3 text-center">
          <i class="icon-bullhorn"></i>
          <span class="stat-count">1026</span>
          <span>Adopted</span>
        </div>
      </div>
    </div> <!-- end of .container -->
  </div> <!-- end of .overlay -->
</section>



<!-- =========================
     CONTACT US
============================== -->
<section class="contact" id="contact">
  <div class="container">
    <header class="section-header">
      <h2 class="title-text">Get in touch</h2>
      <p class="sub-title">If you have any questions about our works and organisation feel free to contact with us and vist our regional office.</p>
    </header>

    <div class="contact-block">
      <form id="contact-form" method="post" class="contact-form" role="form">
        <div class="row">
          <div class="row-item col-sm-6">
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="icon-user"></i></div>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="required">
              </div>
            </div>

            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="icon-email-envelope"></i></div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
              </div>
            </div>

            <div class="form-group">
              <label class="sr-only" for="phone">Contact Number</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="icon-call-phone"></i></div>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Contact Number">
              </div>
            </div>
          </div>

          <div class="row-item col-sm-6">
            <div class="form-group">
              <label class="sr-only" for="message">Message</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="icon-email-envelope"></i></div>
                <textarea class="form-control" id="message" name="message" placeholder="Message" rows="4" required="required"></textarea>
              </div>
            </div>

            <div>
              <label class="sr-only">Send</label>
              <button class="btn btn-iconic btn-fill"><i class="icon-paper-plane"></i> <span class="btn-md">Send</span></button>
            </div>
          </div>

          <div class="col-sm-12">
            <p class="success-msg">Your message has been Successfully Sent!</p>
            <p class="error-msg">Error! Something went wrong!</p>
          </div>
        </div>
      </form>
    </div><!-- /.contact-form -->
  </div>
</section>


<!-- =========================
     FOOTER
============================== -->
<footer class="footer">
  <div class="footer-head">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h2 class="title-text">Anima</h2>
        </div>
        <div class="text-right col-sm-9">
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
        <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2">
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

        <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2">
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

        <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2">
          <h4 class="title-text">flickr photos</h4>

          <ul class="flickr-feed"></ul>
        </div>
      </div>
    </div>
  </section><!-- /.footer-body -->

  <div class="footer-foot">
    <div class="container">
      <p>&copy; 2015 <a href="http://codepassenger.com/">CodePassanger</a> - PSD Activism Template By CodePassenger</p>
    </div>
  </div>
  <!-- /.footer-foot -->
</footer>


<script src="{!!URL::to('assets')!!}/js/jquery-1.11.2.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/bootstrap.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.nav.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.scrollTo.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.localScroll.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.countdown.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/owl.carousel.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.waypoints.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.counterup.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/nivo-lightbox.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.mixitup.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/jflickrfeed.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/matchMedia.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.ajaxchimp.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.fitvids.js"></script>
<script src="{!!URL::to('assets')!!}/js/jquery.stellar.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/smoothscroll.js"></script>
<script src="{!!URL::to('assets')!!}/js/wow.min.js"></script>
<script src="{!!URL::to('assets')!!}/js/custom.js"></script>


<!-- GOOGLE MAP API -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpsa0dCe3KnM6wYXmIYPPhvrzWcNVJcxI&amp;sensor=true"></script>

<script type="text/javascript">

  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', initialize);

  function initialize() {
    "use strict";
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 11,
      scrollwheel: false,

      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(40.6700, -73.9400), // New York

      // How you would like to style the map.
      // This is where you would paste any style found on Snazzy Maps.
      styles: [{"stylers":[{"color":"#e5b563"},{"saturation":"36"},{"lightness":"-21"},{"gamma":"2.03"},{"weight":"0.90"}]},{"featureType":"all","elementType":"geometry.fill","stylers":[{"saturation":"-12"},{"visibility":"on"},{"color":"#e4b72f"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"saturation":"5"},{"lightness":"-16"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"gamma":0.01},{"lightness":20},{"saturation":"-100"},{"visibility":"on"},{"hue":"#ff0000"},{"weight":"0.01"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"saturation":-31},{"lightness":-33},{"weight":2},{"gamma":0.8},{"visibility":"off"}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"saturation":"7"},{"lightness":"2"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"lightness":30},{"saturation":30}]},{"featureType":"poi","elementType":"geometry","stylers":[{"saturation":20}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"lightness":20},{"saturation":-20}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":10},{"saturation":-30}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"saturation":25},{"lightness":25}]},{"featureType":"water","elementType":"all","stylers":[{"lightness":-20}]}]
    };

    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map-block');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(40.6700, -73.9400),
      map: map,
      title: 'Anima!'
    });
  }

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    initialize();
  });


</script>

<script>
  new WOW().init();
</script>

</body>
</html>