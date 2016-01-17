@extends('template')

@section('content')

  <!-- =========================
     PAGE HEADER
============================== -->
<div class="page-head">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <header class="section-header">
          <h1 class="title-text">Single Blog Post</h1>
        </header>
        <p><a href="index.html">Return to Home page</a></p>
      </div>
    </div>
  </div>
</div>



<!-- =========================
     PAGE BODY
============================== -->
<div class="page-body single-blog-page">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- =========================
             IMAGE WITH TEXT AND HIGHLIGHTS
        ============================== -->
        <article>
          <div class="blog-title">
            <p class="cat">UNCATEGORIZED</p>
            <h3 class="title-text"><a href="">IMAGE WITH TEXT AND HIGHLIGHTS</a></h3>
            <p class="meta-info">September 18, 2015 at 22: 14 am by <a href="">Anwar H.</a></p>
          </div>
          <img src="images/animal-thumbs/dog-9.jpg" alt="Dog 9" class="img-responsive margin-bottom-30">

          <p>Anima is a non-profit Bootstap3 animals rescue clean HTML template. You can use it for your club, organisation and also for <a href="#">your persoanl need</a>. We are ready for any kind of help. Feel free to contact with us, our support team will be very happy to hear from you. We will also provide custom template and theme. We have numbers of professional and passionate designer and developers.</p>

          <div class="inner-article row">
            <div class="col-md-4">
              <img src="images/animal-thumbs/cat-8.jpg" alt="Cat" class="img-responsive margin-bottom-30">
            </div>

            <div class="col-md-8">
              <p>Anima is a non-profit Bootstap3 animals rescue clean HTML template. You can use it for your club, organisation and also for your persoanl need. We are ready for any kind of help. Feel free to contact with us, our support team will be very happy to hear from you. We will also provide custom template and theme.</p>
            </div>
          </div>

          <p>Anima is a non-profit Bootstap3 animals rescue clean HTML template. You can use it for your club, organisation and also for <span class="text-highlight">your persoanl need</span>. We are ready for any kind of help. Feel free to contact with us, our support team will be very happy to hear from you. We will also provide custom template and theme. We have numbers of passionate designer and developers.</p>
        </article>

        <!-- =========================
             VIDEO SECTION
        ============================== -->
        <section>
          <div class="blog-title">
            <h3 class="title-text">Video Gallery</h3>
          </div>

          <div class="video-player">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/CevxZvSJLk8" allowfullscreen></iframe>
          </div>

          <div class="video-player">
            <iframe src="https://player.vimeo.com/video/124139626?color=ffffff&amp;portrait=0" width="500" height="281" allowfullscreen></iframe>
          </div>
        </section>


        <!-- =========================
             COMMENTS SECTION
        ============================== -->
        <section class="comments">
          <h3 class="title-text">Comments</h3>

          <ul>
            <li class="media">
              <div class="hidden-xs media-left">
                <a href="#">
                  <img src="images/users/1.jpg" alt="Blog Commenter" class="media-object">
                </a>
              </div><!-- /.media-left -->

              <div class="media-body">
                <h5 class="media-heading">
                  <button class="trash"><i class="icon-trash-bin"></i></button>
                  <a href="#">John Doe</a>
                  <span>12 June 2015</span>
                </h5>

                <p>Anima is a great and clean bootstrap3 HTML5 template for non-profir organisation in themeforest. Best of luck with sale.</p>

                <div class="text-right user-action">
                  <p><a href="#" class="btn btn-fill btn-md">Reply</a></p>
                  <p class="report"><a href="#">Report for Spam</a></p>
                </div>
              </div><!-- /.media-body -->
            </li>

            <li class="media">
              <div class="hidden-xs media-left">
                <a href="#">
                  <img src="images/users/2.jpg" alt="Blog Commenter" class="media-object">
                </a>
              </div><!-- /.media-left -->

              <div class="media-body">
                <h5 class="media-heading">
                  <a href="#">McDevis</a>
                  <span>12 June 2015</span>
                </h5>

                <p>Anima is a great and clean bootstrap3 HTML5 template for non-profir organisation in themeforest. Best of luck with sale.</p>

                <div class="text-right user-action">
                  <p><a href="#" class="btn btn-fill btn-md">Reply</a></p>
                  <p class="report"><a href="#">Report for Spam</a></p>
                </div>
              </div><!-- /.media-body -->

              <ul>
                <li class="media">
                  <div class="hidden-xs media-left">
                    <a href="#">
                      <img src="images/users/1.jpg" alt="Blog Commenter" class="media-object">
                    </a>
                  </div><!-- /.media-left -->

                  <div class="media-body">
                    <h5 class="media-heading">
                      <button class="trash"><i class="icon-trash-bin"></i></button>
                      <a href="#">John Doe</a>
                      <span>12 June 2015</span>
                    </h5>

                    <p>Anima is a great and clean bootstrap3 HTML5 template for non-profir organisation in themeforest. Best of luck with sale.</p>

                    <div class="text-right user-action">
                      <p><a href="#" class="btn btn-fill btn-md">Reply</a></p>
                      <p class="report"><a href="#">Report for Spam</a></p>
                    </div>
                  </div><!-- /.media-body -->

                  <ul>
                    <li class="media">
                      <div class="hidden-xs media-left">
                        <a href="#">
                          <img src="images/users/2.jpg" alt="Blog Commenter" class="media-object">
                        </a>
                      </div><!-- /.media-left -->

                      <div class="media-body">
                        <h5 class="media-heading">
                          <a href="#">John Doe</a>
                          <span>12 June 2015</span>
                        </h5>

                        <p>Anima is a great and clean bootstrap3 HTML5 template for non-profir organisation in themeforest. Best of luck with sale.</p>

                        <div class="text-right user-action">
                          <p><a href="#" class="btn btn-fill btn-md">Reply</a></p>
                          <p class="report"><a href="#">Report for Spam</a></p>
                        </div>
                      </div><!-- /.media-body -->
                    </li>
                  </ul>
                </li>

                <li class="media">
                  <div class="hidden-xs media-left">
                    <a href="#">
                      <img src="images/users/2.jpg" alt="Blog Commenter" class="media-object">
                    </a>
                  </div><!-- /.media-left -->

                  <div class="media-body">
                    <h5 class="media-heading">
                      <a href="#">John Doe</a>
                      <span>12 June 2015</span>
                    </h5>

                    <p>Anima is a great and clean bootstrap3 HTML5 template for non-profir organisation in themeforest. Best of luck with sale.</p>

                    <div class="text-right user-action">
                      <p><a href="#" class="btn btn-fill btn-md">Reply</a></p>
                      <p class="report"><a href="#">Report for Spam</a></p>
                    </div>
                  </div><!-- /.media-body -->
                </li>
              </ul>
            </li>

            <li class="media">
              <div class="hidden-xs media-left">
                <a href="#">
                  <img src="images/users/1.jpg" alt="Blog Commenter" class="media-object">
                </a>
              </div><!-- /.media-left -->

              <div class="media-body">
                <h5 class="media-heading">
                  <button class="trash"><i class="icon-trash-bin"></i></button>
                  <a href="#">John Doe</a>
                  <span>12 June 2015</span>
                </h5>

                <p>Anima is a great and clean bootstrap3 HTML5 template for non-profir organisation in themeforest. Best of luck with sale.</p>

                <div class="text-right user-action">
                  <p><a href="#" class="btn btn-fill btn-md">Reply</a></p>
                  <p class="report"><a href="#">Report for Spam</a></p>
                </div>
              </div><!-- /.media-body -->
            </li>
          </ul>
        </section>
      </div> <!-- end of /.col-md-8 -->


      <!-- =========================
           SIDEBAR
      ============================== -->
      <div class="col-md-4 sidebar hidden-sm hidden-xs">

        <!-- SEARCHBAR -->
        <form role="form" class="sidebar-widget search-bar">
          <div class="input-group">
            <label class="sr-only">Search here...</label>
            <input type="email" name="search" class="form-control" placeholder="Search here...">
            <button class="btn submit-btn">Search</button>
          </div>
        </form>
        <!-- /END SEARCHBAR -->

        <!-- POPULAR POST -->
        <div class="sidebar-widget popular-post">
          <header class="widget-header">
            <h5 class="title-text">Popular Posts</h5>
            <hr class="yellow-line">
          </header>

          <ul>
            <li class="media">
              <div class="media-left">
                <a href="blog-single.html">
                  <img src="images/animal-thumbs/cat-14.jpg" alt="Blog Commenter" class="media-object">
                </a>
              </div><!-- /.media-left -->

              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit ipsum dolor sit cons.</p>

                <div class="post-time">
                  <span>2 hours ago</span>
                </div>
              </div><!-- /.media-body -->
            </li>

            <li class="media">
              <div class="media-left">
                <a href="blog-single.html">
                  <img src="images/animal-thumbs/cat-15.jpg" alt="Blog Commenter" class="media-object">
                </a>
              </div><!-- /.media-left -->

              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit ipsum dolor sit cons.</p>

                <div class="post-time">
                  <span>2 hours ago</span>
                </div>
              </div><!-- /.media-body -->
            </li>

            <li class="media">
              <div class="media-left">
                <a href="blog-single.html">
                  <img src="images/animal-thumbs/par-3.jpg" alt="Blog Commenter" class="media-object">
                </a>
              </div><!-- /.media-left -->

              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit ipsum dolor sit cons.</p>

                <div class="post-time">
                  <span>2 hours ago</span>
                </div>
              </div><!-- /.media-body -->
            </li>

            <li class="media">
              <div class="media-left">
                <a href="blog-single.html">
                  <img src="images/animal-thumbs/cat-14.jpg" alt="Blog Commenter" class="media-object">
                </a>
              </div><!-- /.media-left -->

              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit ipsum dolor sit cons.</p>

                <div class="post-time">
                  <span>2 hours ago</span>
                </div>
              </div><!-- /.media-body -->
            </li>

            <li class="media">
              <div class="media-left">
                <a href="blog-single.html">
                  <img src="images/animal-thumbs/cat-15.jpg" alt="Blog Commenter" class="media-object">
                </a>
              </div><!-- /.media-left -->

              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sit ipsum dolor sit cons.</p>

                <div class="post-time">
                  <span>2 hours ago</span>
                </div>
              </div><!-- /.media-body -->
            </li>
          </ul>
        </div> <!-- /END POPULAR POST -->

        <!-- SIDEBAR ITEM -->
        <div class="sidebar-widget sidebar-flickr">
          <header class="widget-header">
            <h5 class="title-text">Flickr Photo</h5>
            <hr class="yellow-line">
          </header>

          <ul class="flickr-feed"></ul>
        </div> <!-- /END SIDEBAR ITEM -->

        <!-- SIDEBAR ITEM -->
        <div class="sidebar-widget sidebar-video">
          <header class="widget-header">
            <h5 class="title-text">Video Player</h5>
            <hr class="yellow-line">
          </header>
          <div class="video-player">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/CevxZvSJLk8" allowfullscreen></iframe>
          </div>
        </div> <!-- /END SIDEBAR ITEM -->
      </div> <!-- /END SIDEBAR -->
    </div>

    <!-- =========================
         COMMENT REPLY SECTION
    ============================== -->
    <div class="row" id="comment-reply">
      <div class="col-md-12">
        <form class="comments-form" role="form" action="#">
          <div class="row">
            <div class="row-item col-sm-6">
              <div class="form-group">
                <label class="sr-only" for="name">Full Name</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="icon-user"></i></div>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" required="required">
                </div>
              </div>

              <div class="form-group">
                <label class="sr-only" for="name">Email Address</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="icon-email-envelope"></i></div>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your email address" required="required">
                </div>
              </div>

              <div class="form-group">
                <label class="sr-only" for="name">Website Address</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="icon-globe-world"></i></div>
                  <input type="url" class="form-control" id="url" name="url" placeholder="Website URL (optional)">
                </div>
              </div>
            </div>

            <div class="row-item col-sm-6">
              <div class="form-group">
                <label class="sr-only" for="name">Message</label>
                <div class="input-group">
                  <div class="input-group-addon"><i class="icon-email-envelope"></i></div>
                  <textarea class="form-control" id="message" name="message" placeholder="Write your message" rows="4" required="required"></textarea>
                </div>
              </div>

              <div>
                <label class="sr-only" for="name">Send Email</label>
                <button class="btn btn-iconic btn-fill"><i class="icon-paper-plane"></i> <span class="btn-lg">Leave a comment</span></button>
              </div>
            </div>

            <div class="col-sm-12">
              <p class="success-msg">Your comment has been successfully posted!</p>
              <p class="error-msg">Error! Something went wrong!</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection