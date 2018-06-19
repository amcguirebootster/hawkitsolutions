/**
 * Digital
 *
 * This file contains all template JS functions
 *
 * @package Digital
--------------------------------------------------------------
                   Contents
--------------------------------------------------------------
 * 01 - Menu Toggle
 * 02 - Owl Carousel
          - Home Slider    
          - Projects Slider     
          - Projects Image Slider     
 * 03 - Search
 * 04 - Video Play  
 * 05 - Video Play Two
 * 06 - Load More - Blog
 * 07 - Load More - Blog Single
 * 08 - Event Countdown
 * 09 - Animation On Scroll 
 * 10 - Preloader 

--------------------------------------------------------------*/
(function($) {
  "use strict";

// Menu Toggle
    $('#menu-btn').on('click', function(){
      $('#site-nav').css('height', '100%');
    });
    $('#close-btn').on('click', function(){
      $('#site-nav').css('height', '0');
    });

// Owl Carousel
  // Home Slider
    $("#home-slider").owlCarousel({
      loop: true,
      items: 1,
      dots: true,
      nav: true,
      autoplayTimeout: 10000,
      smartSpeed: 2000,
      autoHeight: false,
      touchDrag: true,
      mouseDrag: true,
      margin: 0,
      autoplay: true,
      slideSpeed: 600,
      navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        600: {
            items: 1,
            nav: false,
            dots: false,
        },
        768: {
            items: 1,
            nav: false,
            dots: false,
        },
        1100: {
            items: 1,
            nav: true,
            dots: true,
        }
      }
    });

  // Projects Slider
    $("#projects-slider").owlCarousel({
      loop: true,
      items: 1,
      dots: true,
      nav: true,
      autoplayTimeout: 3000,
      smartSpeed: 1500,
      autoHeight: false,
      touchDrag: true,
      mouseDrag: true,
      margin: 0,
      autoplay: true,
      slideSpeed: 600,
      navText: ['', ''],
      responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        600: {
            items: 1,
            nav: false,
            dots: false,
        },
        768: {
            items: 2,
            nav: false,
            dots: false,
        },
        1100: {
            items: 2,
            nav: true,
            dots: true,
        }
      }
    });

  // Projects Image Slider
    $("#projects-img-slider").owlCarousel({
      loop: true,
      items: 1,
      dots: true,
      nav: true,
      autoplayTimeout: 2800,
      smartSpeed: 1200,
      autoHeight: false,
      touchDrag: true,
      mouseDrag: true,
      margin: 0,
      autoplay: true,
      slideSpeed: 600,
      navText: ['', ''],
      responsive: {
        0: {
            items: 1,
            nav: false,
            dots: false,
        },
        600: {
            items: 1,
            nav: false,
            dots: false,
        },
        768: {
            items: 1,
            nav: false,
            dots: false,
        },
        1100: {
            items: 1,
            nav: true,
            dots: true,
        }
      }
    });

  // Video Play
    $('.btn-video-play').on('click',function() {
      $('.video-item .video-preview').append(video_url);
      $(this).hide();
    });

  // Video Play Two
    $('.btn-video-play-two').on('click',function() {
      $('.video-item .video-preview').append(video_url);
      $(this).hide();
    });

  // Load More - Blog
    $(".blog-post-main").slice(0, 3).show();
    $("#loadMore").on('click', function (e) {
      e.preventDefault();
      $(".blog-post-main:hidden").slice(0, 1).slideDown();
      if ($(".blog-post-main:hidden").length === 0) {
        $("#load").fadeOut('slow');
      }
    });

  // Load More - Blog Single
    $(".related-post").slice(0, 2).show();
    $("#loadMoreTwo").on('click', function (e) {
      e.preventDefault();
      $(".related-post:hidden").slice(0, 1).slideDown();
      if ($(".related-post:hidden").length === 0) {
        $("#load").fadeOut('slow');
      }
    });

  // Event Countdown
    if($('.coming-countdown').length){  
      $('.coming-countdown').each(function() {
      var $this = $(this), finalDate = $(this).data('countdown');
      $this.countdown(finalDate, function(event) {
        var $this = $(this).html(event.strftime('' + '<div class="counter-col-days"><span class="count-days">%D days left</span></div> ' + '<div class="counter-col"><span class="count-hours">[ %H ]</span> <span class="count-number">:</span> </div>  ' + '<div class="counter-col"><span class="count-minutes">[ %M ]</span> <span class="count-number">:</span> </div>  ' + '<div class="counter-col"><span class="count-seconds">[ %S ]</span></div>'));
      });
     });
    }    

  // Animation On Scroll
    AOS.init({
     duration: 1000
    });

  // Preloader
    $(window).on('load', function()  { 
      $('.status').fadeOut();
      $('.preloader').delay(350).fadeOut('slow'); 
    }); 
    
})(jQuery);