; (function () {

    'use strict';

    var carousels = function () {
        jQuery(".owl-carousel1").owlCarousel(
            {
              loop:true,
              center: true,
              margin:0,
              responsiveClass:true,
              nav:false,
              responsive:{
                  0:{
                      items:1,
                      nav:false
                  },
                  600:{
                      items:1,
                      nav:false
                  },
                  1000:{
                      items:1,
                      nav:true,
                      loop:false
                  }
              }
          }
          );
        
          jQuery(".owl-carousel2").owlCarousel(
            {
              loop:true,
              center: true,
              margin:30,
              responsiveClass:true,
              nav:true,
              responsive:{
                  0:{
                      items:1,
                      nav:true
                  },
                  600:{
                      items:2,
                      nav:true,
                      margin:10,
                      center: false,
                  },
                  1000:{
                      items:3,
                      nav:true,
                      loop:true
                  }
              }
          }
          );
    }


    var isotope = function () {
        var $container = jQuery('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        jQuery('.portfolioFilter a').click(function () {
            jQuery('.portfolioFilter .active').removeClass('active');
            jQuery(this).addClass('active');

            var selector = jQuery(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        }); 
    };

    var navbar = function () {
        jQuery(window).scroll(function () {
           jQuery("nav.navbar").offset().top > -70 ? jQuery(".navbar-fixed-top").addClass("top-nav-collapse") : jQuery(".navbar-fixed-top").removeClass("top-nav-collapse")
        }),
        jQuery(function () {
            jQuery("a.page-scroll").bind("click", function (a) { var o = jQuery(this); jQuery("html, body").stop().animate({ scrollTop: jQuery(o.attr("href")).offset().top - 58 }, 1e3), a.preventDefault()
        })
        });
    };

    jQuery(document).ready(function(){
		carousels();
        isotope();
        navbar();
	})


}());

