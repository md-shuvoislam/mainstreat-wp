(function ($) {
	"use strict";

    jQuery(document).ready(function($){

        
        $('#navigation').on('click','li',function(){
            $('#navigation li.active').removeClass('active');
            $(this).addClass('active');
        });
        
        // Top Slider
        var brandSlider = $(".main-slides");
            brandSlider.owlCarousel({
            items: 1,
            nav: true,
            dots: false,
            autoplay: false,
            autoplayTimeout:5000,
            slideSpeed: 300,
            loop: true,
            navText : ["",""],
            rewindNav : true,
            mouseDrag: false,
            touchDrag: true,
            stagePadding:150,
            margin:0,
             responsive:{
                0:{
                    items:1,
                    center:false,
                    stagePadding:0,
                },
                768:{
                    items:1,
                    center:true,
                },
            }
        });

        function brandSliderClasses( ) {
            brandSlider.each(function() {
                var total = $(this).find('.owl-item.active').length;
                $(this).find('.owl-item').removeClass('firstactiveitem');
                $(this).find('.owl-item').removeClass('lastactiveitem');
                $(this).find('.owl-item.active').each(function(index) {
                 
                        $(this).prev().addClass('firstactiveitem')
                   
                        $(this).next().addClass('lastactiveitem')
                    
                })
            })
        }
        brandSliderClasses();
        brandSlider.on('translated.owl.carousel', function(event) {
            brandSliderClasses();
        }); 

        
        $(".main-slides").on("translate.owl.carousel", function(){
            $(".top-area h1").removeClass("animated fadeInLeft").css("opacity", "0");
            $(".top-area p").removeClass("animated fadeInRight").css("opacity", "0");
            $(".top-area .btn").removeClass("animated fadeInUp").css("opacity", "0");
        });
        
        $(".main-slides").on("translated.owl.carousel", function(){
            $(".top-area h1").addClass("animated fadeInLeft").css("opacity", "1");
            $(".top-area p").addClass("animated fadeInRight").css("opacity", "1");
            $(".top-area .btn").addClass("animated fadeInUp").css("opacity", "1");
        });
        
        // Popup Gallery
        $(".vertical-vedio").magnificPopup({
            type: 'vedio',
            gallery: {
                enabled: true
            }
        });

        $(".colum-8").magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });


        
        // Responsive Menu
        $("ul#navigation").slicknav({
            prependTo: ".responsive-menu-wrap"
        });


        // Section Animations
        new WOW().init();
        
        // Smooth Scroll
        var scroll = new SmoothScroll('a[href*="#"]');
        
        
        // Show or hide the sticky footer button
            $(window).on( "scroll", function() {
                if ($(this).scrollTop() > 200) {
                        $('.go-top').fadeIn(200);
                    } else {
                        $('.go-top').fadeOut(200);
                    }
            });

    });
    
    jQuery(window).load(function(){
        jQuery(".cruzerse-slider-preloader-wrap, .cruzerse-site-preloader-wrap").fadeOut(500);
    });


}(jQuery));