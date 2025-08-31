$(document).ready(function() {
"use strict";

/*
|----------------------------------------------------------------------------
| PRELOADER
|----------------------------------------------------------------------------
*/
// makes sure the whole site is loaded
$(window).on('load', function() {
   // will first fade out the loading animation
   $(".spinner").fadeOut();
   //then background color will fade out slowly
   $(".pre-loader").delay(200).fadeOut("slow");
});



/*
|----------------------------------------------------------------------------
| STICKY NAVBAR
|----------------------------------------------------------------------------
*/
if ( matchMedia( 'only screen and (min-width: 768px)' ).matches ) {
   $(document).on('scroll', function() {
      var scrollPos = $(this).scrollTop();

      if( scrollPos > 150 ) {
         $('.navbar-fixed-top').removeClass('navbar-home');
      } else {
         $('.navbar-fixed-top').addClass('navbar-home');
      }
   });
}




/*
|----------------------------------------------------------------------------
| SCROLL THROUGH PAGE
|----------------------------------------------------------------------------
*/
$('.navbar-nav').onePageNav({
  currentClass: 'active',
  scrollThreshold: 0.2, // Adjust if Navigation highlights too early or too late
  scrollSpeed: 1000
});

$('.navbar-nav').localScroll({
  offset: -100
});



/*
|----------------------------------------------------------------------------
| REPLACE WITH YOUR COMMENT
|----------------------------------------------------------------------------
*/
if ( matchMedia( 'only screen and (min-width: 768px)' ).matches ) {
  var baseHeight = $('.base-content').height(),
      subHeight = $('.sub-content').height();

  $('.base-content .img-responsive').css('min-height', baseHeight + 'px');
  $('.sub-content .img-responsive').css('min-height', subHeight + 'px');
}


/*

/*
|----------------------------------------------------------------------------
| CAROUSEL SLIDERS
|----------------------------------------------------------------------------
*/
$('.home .owl-carousel').owlCarousel({
   items: 1,
   autoplay: true,
   nav: true,
   dots: false,
   navText: ["&#xe167;", "&#xe168;"],
   loop: true
});

$('#pet-profile .owl-carousel').owlCarousel({
   items: 1,
   autoplay: true
});

$('#testimonials .owl-carousel').owlCarousel({
   items: 1,
   autoplay: true
});




// Function for email address validation
function isValidEmail(emailAddress) {

var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

    return pattern.test(emailAddress);

};


/*
|----------------------------------------------------------------------------
| AJAX CONTACT FORM
|----------------------------------------------------------------------------
*/
$("#contact-form").on('submit', function(e) {
    e.preventDefault();
    var data = {
        name: $("#name").val(),
        email: $("#email").val(),
        mobile: $("#mobile").val(),
        content: $("#content").val()
    };

    if ( isValidEmail(data['email']) && (data['content'].length > 1) && (data['name'].length > 1) ) {
        $.ajax({
            type: "POST",
            url: "contact",
            data: data,
            success: function() {
                $('.contact-form .success-msg').delay(500).fadeIn(1000);
                $('.contact-form .error-msg').fadeOut(500);
            }
        });
    } else {
        $('.contact-form .error-msg').delay(500).fadeIn(1000);
        $('.contact-form .success-msg').fadeOut(500);
    }

    return false;
});




/*
|----------------------------------------------------------------------------
| GALLERY LIGHTBOX
|----------------------------------------------------------------------------
*/
$('.anima-lightbox').nivoLightbox();



/*
|----------------------------------------------------------------------------
| COLLAPSE NAVBAR ON CLICK
|----------------------------------------------------------------------------
*/
if ( matchMedia( 'only screen and (max-width: 767px)' ).matches ) {
  $('.nav a').on('click', function(){
     $(".navbar-toggle").click();
  });
}

});