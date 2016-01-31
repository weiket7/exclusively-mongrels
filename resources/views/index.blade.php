@extends('template')

@section('content')

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
      <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 wow fadeInUp" data-wow-delay="0s">
        <div class="hover-img">
          <a href="{{URL::to("coming-soon")}}">
            <img src="{!!URL::to('assets')!!}/images/{{$configs['adopt_image']}}" alt="Cat" class="img-responsive">
          </a>
        </div>

        <article>
          <h4 class="title-text"><a href="{{URL::to("coming-soon")}}">Adopt</a></h4>
          <hr class="yellow-line">
          <p>{{$configs['adopt_text']}}</p>

          <a href="{{URL::to("coming-soon")}}" class="btn btn-base">Learn More</a>
        </article>
      </div>

      <!-- HOW YOUR CAN CONTRIBUTE -->
      <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 wow fadeInUp" data-wow-delay="0.3s">
        <div class="hover-img">
          <a href="{{URL::to("coming-soon")}}">
            <img src="{!!URL::to('assets')!!}/images/{{$configs['foster_image']}}" alt="Cat" class="img-responsive">
          </a>
        </div>

        <article>
          <h4 class="title-text"><a href="{{URL::to("coming-soon")}}">Foster</a></h4>
          <hr class="yellow-line">
          <p>{{$configs['foster_text']}}</p>

          <a href="{{URL::to("coming-soon")}}" class="btn btn-base">Learn More</a>
        </article>
      </div>

      <!-- HOW YOUR CAN CONTRIBUTE -->
      <div class="row-item col-md-4 col-sm-8 col-md-offset-0 col-sm-offset-2 wow fadeInUp" data-wow-delay="0.6s">
        <div class="hover-img">
          <a href="{{URL::to("coming-soon")}}">
            <img src="{!!URL::to('assets')!!}/images/{{$configs['donate_image']}}" alt="Dog" class="img-responsive">
          </a>
        </div>

        <article>
          <h4 class="title-text"><a href="{{URL::to("coming-soon")}}">Donate</a></h4>
          <hr class="yellow-line">
          <p>{{$configs['donate_text']}}</p>

          <a href="{{URL::to("coming-soon")}}" class="btn btn-base">Learn More</a>
        </article>
      </div>
    </div>
  </div>
</section>



<section class="pet-profile" id="pet-profile">
  <div class="container">
    <header class="section-header">
      <h2 class="title-text">Adopt</h2>
      <p class="sub-title">{{count($adopts)}} dogs available for adoption</p>
    </header>

    <div class="row">
      @foreach($adopts as $adopt)
      <div class="row-item col-md-3 col-sm-6">
        <a href="{{URL::to('coming-soon')}}">
        <div class="individual-pet">
          <img src="{!!URL::to('assets')!!}/images/adopt/{{$adopt->image}}" alt="Cat" class="img-responsive">

          <article>
            <h4 class="title-text text-capitalize">{{$adopt->name}}</h4>
            <hr class="yellow-line">
            <p>
              <i class="fa fa-birthday-cake"></i> {{$adopt->age}}<br>
              <i class="fa fa-home"></i> @if($adopt->hdb == 'N') Not @endif HDB Approved
            </p>
          </article>

          {{--<div class="profile">
            <ul>
              <li>Age: <strong>{{$adopt->age}}</strong></li>
              <li>Temperament: <strong>{{$adopt->temperament}}</strong></li>
            </ul>

            <a href="blog-signle.html" class="btn btn-fill">Learn More</a>
          </div>--}}
        </div>
        </a>
      </div>
      @endforeach
    </div>

  </div>
</section>



<!-- =========================
     RECENTS EVENTS
============================== -->

<!--
<section class="recent-events" id="recent-events">
  <div class="container">
    <header class="section-header">
      <h2 class="title-text">Recent Events</h2>
      <p class="sub-title">To rasie awarness among people and save the homless animals we annouce some big events that help the animals.</p>
    </header>

    <div class="row">
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
-->


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
          <span class="stat-count">{{$configs['rescued_initial']}}</span>
          <span>Rescued</span>
        </div>

        <div class="row-item col-md-3 text-center">
          <i class="icon-pin-map"></i>
          <span class="stat-count">{{$configs['adopted_initial']}}</span>
          <span>Adopted</span>
        </div>

        <div class="row-item col-md-3 text-center">
          <i class="icon-bullhorn"></i>
          <span class="stat-count">{{count($adopts)}}</span>
          <span>Available for adoption</span>
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
              <label class="sr-only" for="contact">Mobile</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="icon-call-phone"></i></div>
                <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Contact Number" required="required">
              </div>
            </div>
          </div>

          <div class="row-item col-sm-6">
            <div class="form-group">
              <label class="sr-only" for="message">Message</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="icon-email-envelope"></i></div>
                <textarea class="form-control" id="content" name="content" placeholder="Message" rows="4" required="required"></textarea>
              </div>
            </div>

            <div>
              <label class="sr-only">Send</label>
              <button type="submit" class="btn btn-iconic btn-fill"><i class="icon-paper-plane"></i> <span class="btn-md">Send</span></button>
            </div>
          </div>

          <div class="col-sm-12">
            <p class="alert-success success-msg">Thank you for your message. We will get back to you once we can. </p>
            <p class="alert-success error-msg">An error occurred. Please directly email xmon2012@gmail.com.</p>
          </div>
        </div>
      </form>
    </div><!-- /.contact-form -->
  </div>
</section>

@endsection