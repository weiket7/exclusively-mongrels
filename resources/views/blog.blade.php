@extends('template')

<!-- =========================
     PAGE BODY
============================== -->
<div class="page-body blog-page">
  <div class="container">
    <div class="row">
      <div class="col-md-8">

        <!-- =========================
             TEXT CONTENT
        ============================== -->
        <article>
          <div class="blog-title">
            <p class="cat">TEXT BLOG / ONLY TEXT</p>
            <h3 class="title-text"><a href="">TEXT CONTENT BLOG POST</a></h3>
            <p class="meta-info">September 18, 2015 at 22: 14 am by <a href="">Anwar H.</a></p>
          </div>

          <p>Anima is a non-profit Bootstap3 animals rescue clean HTML template. You can use it for your club, organisation and also for <a href="#">your persoanl need</a>. We are ready for any kind of help. Feel free to contact with us, our support team will be very happy to hear from you. We will also provide custom template and theme. We have numbers of professional and passionate designer and developers.</p>

          <a href="" class="btn btn-base">Read More...</a>

        </article>

        <hr class="full-width-hr">

        <!-- =========================
             BLOCKQUOTE
        ============================== -->
        <section>
          <div class="blog-title">
            <p class="cat">UNCATEGORIZED</p>
            <h3 class="title-text"><a href="">Blockquotes</a></h3>
            <p class="meta-info">September 18, 2015 at 22: 14 am by <a href="">Anwar H.</a></p>
          </div>

          <blockquote class="blockquote-light">
            <p>Anima is a non-profit Bootstap3 animals rescue clean HTML5 template. You can use it for your club, organisation and also for your persoanl need. We are ready for any kind of help.</p>
            <cite>- John Anroid Doe</cite>
          </blockquote>

          <a href="" class="btn btn-base">Read More...</a>

        </section>

        <hr class="full-width-hr">

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

          <a href="" class="btn btn-base">Read More...</a>

        </article>

      </div> <!-- end of /.col-md-8 -->



      <!-- =========================
           SIDEBAR
      ============================== -->
      <div class="col-md-4 sidebar hidden-sm hidden-xs">
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
  </div>
</div>

