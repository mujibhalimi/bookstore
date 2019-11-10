jQuery( document ).ready(function( $ ) {
"use strict"

    // ---------- Preloader ---------- //
    jQuery("#status").delay(1000).fadeOut();
    jQuery("#preloader").delay(1000).fadeOut("slow");
    // ---------- Preloader ---------- //

    // On Click Show Address
    $("#search-open-btn").on("click",function(){
        $(".input-append").toggleClass("open-search")();
    });
    
    // Responsive Slider menu
    if (jQuery(".menu-link").length != '') {
        jQuery('.menu-link').bigSlide();
    }

    // Banner slider
    jQuery('#main-slider').slick({
        slidesToScroll: 1,
        speed: 800,
        dots: false,
        arrows: false,
        rtl: true
    });
    jQuery('.banner-prev').on( "click", function(){
      jQuery('#main-slider').slick('slickPrev');
    });
    jQuery('.banner-next').on( "click", function(){
      jQuery('#main-slider').slick('slickNext');
    });

    // release Books Slider
    $(document).ready(function () {
        $('#release-book-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            rtl: true,
            asNavFor: '#release-thumb'
        });
        $('#release-thumb').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#release-book-slider',
            dots: false,
            rtl: true,
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 1}},
                { breakpoint: 768, settings: { slidesToShow: 5, slidesToScroll: 1}},
                { breakpoint: 481, settings: { slidesToShow: 4, slidesToScroll: 1}},
                { breakpoint: 321, settings: { slidesToShow: 3, slidesToScroll: 1}}
            ]
        });
    });   
    jQuery('.release-next').on( "click", function(){
      jQuery('#release-thumb').slick('slickNext');
    });
    jQuery('.release-prev').on( "click", function(){
      jQuery('#release-thumb').slick('slickPrev');
    });

    //  Recomend Slider
    jQuery('#recomend-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 800,
        dots: false,
        arrows: false,
        rtl: true,
        responsive: [
            { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 1}},
            { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 1}},
            { breakpoint: 481, settings: { slidesToShow: 2, slidesToScroll: 1}}
        ]
    });
    jQuery('.recomend-prev').on( "click", function(){
      jQuery('#recomend-slider').slick('slickPrev');
    });
    jQuery('.recomend-next').on( "click", function(){
      jQuery('#recomend-slider').slick('slickNext');
    });

    // Product Slider
    $('#product-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        rtl: true,
        asNavFor: '#product-thumbs',
        });
        $('#product-thumbs').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        rtl: true,
        arrows: false,
        asNavFor: '#product-slider',
        dots: false,
        focusOnSelect: true
    });

    // Related Produst Slider
    jQuery('#related-produst-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 800,
        dots: false,
        arrows: false,
        rtl: true,
        responsive: [
            { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 1}},
            { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 1}},
            { breakpoint: 481, settings: { slidesToShow: 1, slidesToScroll: 1}}
        ]
    });
    jQuery('.related-prev').on( "click", function(){
      jQuery('#related-produst-slider').slick('slickPrev');
    });
    jQuery('.related-next').on( "click", function(){
      jQuery('#related-produst-slider').slick('slickNext');
    });

    // Blog Slider
    jQuery('#blog-slider').slick({
        slidesToScroll: 1,
        speed: 800,
        dots: true,
        arrows: false,
        rtl: true,
        responsive: [
            { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 1}},
            { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 1}},
            { breakpoint: 481, settings: { slidesToShow: 1, slidesToScroll: 1}}
        ]
    });

    // Product Slider
    $('#post-thumb-slides').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        rtl: true,
        asNavFor: '#post-thumb',
        });
        $('#post-thumb').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        rtl: true,
        arrows: false,
        asNavFor: '#post-thumb-slides',
        dots: false,
        focusOnSelect: true
    });

    // Related Produst Slider
    jQuery('#related-events-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 800,
        dots: false,
        arrows: false,
        rtl: true,
        responsive: [
            { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 1}},
            { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 1}},
            { breakpoint: 481, settings: { slidesToShow: 1, slidesToScroll: 1}}
        ]
    });
    jQuery('.related-prev1').on( "click", function(){
      jQuery('#related-events-slider').slick('slickPrev');
    });
    jQuery('.related-next1').on( "click", function(){
      jQuery('#related-events-slider').slick('slickNext');
    });

    // Team Slider
    jQuery('#team-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        speed: 800,
        dots: true,
        arrows: false,
        rtl: true,
        responsive: [
            { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 1}},
            { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 1}},
            { breakpoint: 481, settings: { slidesToShow: 1, slidesToScroll: 1}}
        ]
    });

    // Logos Slider
    jQuery('#logos-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        speed: 800,
        dots: true,
        arrows: false,
        rtl: true,
        responsive: [
            { breakpoint: 992, settings: { slidesToShow: 4, slidesToScroll: 1}},
            { breakpoint: 768, settings: { slidesToShow: 4, slidesToScroll: 1}},
            { breakpoint: 481, settings: { slidesToShow: 4, slidesToScroll: 1}},
            { breakpoint: 481, settings: { slidesToShow: 3, slidesToScroll: 1}}
        ]
    });

    // release Books Slider
    $(document).ready(function () {
        $('#timeline-detail').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            rtl: true,
            asNavFor: '#timeline-thumbs'
        });
        $('#timeline-thumbs').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#timeline-detail',
            dots: false,
            rtl: true,
            centerMode: true,
            focusOnSelect: true,
            responsive: [
                { breakpoint: 992, settings: { slidesToShow: 5, slidesToScroll: 1}},
                { breakpoint: 768, settings: { slidesToShow: 4, slidesToScroll: 1}},
                { breakpoint: 641, settings: { slidesToShow: 4, slidesToScroll: 1}}
            ]
        });
    });  
    jQuery('.timeline-next').on( "click", function(){
      jQuery('#timeline-thumbs').slick('slickNext');
    });
    jQuery('.timeline-prev').on( "click", function(){
      jQuery('#timeline-thumbs').slick('slickPrev');
    });

    // Counters
    if (jQuery("#tc-counters").length != '') {
        try {
            jQuery('#tc-counters').appear(function () {
                jQuery('.tc-timer').countTo()
            });
        } catch (err) {}  
    }

    // Quantity Box
     $(".incr-btn").on("click", function (e) {
        var $button = $(this);
        var oldValue = $button.parent().find('.quantity').val();
        $button.parent().find('.incr-btn[data-action="decrease"]').removeClass('inactive');
        if ($button.data('action') == "increase") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below 1
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
                $button.addClass('inactive');
            }
        }
        $button.parent().find('.quantity').val(newVal);
        e.preventDefault();
    });

    // Hover Dir Effect
    $(' #hover-dir > li ').each( function() { $(this).hoverdir({
        hoverDelay : 75
    }); } );

    // Upcoming Release 
    if (jQuery(".init").length != '') {
        Books.init();
    }

    // Best Seller Tabs
    if (jQuery("#best-sellers-tabs").length != '') {
        jQuery( "#best-sellers-tabs" ).tabs();
    }

    // Book Collections Tabs
    if (jQuery("#book-collections-tabs").length != '') {
        jQuery( "#book-collections-tabs" ).tabs();
    }

    // Event Map
    if (jQuery("#event-map").length != '') {  
        jQuery("#event-map").gmap3({
            marker: {
                address: "Haltern am See, Weseler Str. 151"
            },
            map: {
                options: {
                    zoom: 16,
                    scrollwheel: false,
                }
            },
        });
    }

    // Contant Map
    if (jQuery("#contant-map").length != '') {
        jQuery("#contant-map").gmap3({
            marker: {
                address: "Haltern am See, Weseler Str. 151"
            },
            map: {
                options: {
                    zoom: 16,
                    scrollwheel: false,
                }
            },
        });
    }

    // Custom Scroll 
    if (jQuery(".scroll-x").length != '') {
        jQuery(".scroll-x").mCustomScrollbar({
            axis:"x",
            advanced:{autoExpandHorizontalScroll:true},
            mouseWheel:false
        });
    }

    // Mesonary With Filter
    if (jQuery(".gallery-masonry").length != '') {
        var $container = jQuery('.gallery-masonry');
        var $optionSets = jQuery('.option-set');
        var $optionLinks = $optionSets.find('a');

        function doIsotopeFilter() {
            if (jQuery().isotope) {
                var isotopeFilter = '';
                $optionLinks.each(function() {
                    var selector = jQuery(this).attr('data-filter');
                    var link = window.location.href;
                    var firstIndex = link.indexOf('filter=');
                    if (firstIndex > 0) {
                        var id = link.substring(firstIndex + 7, link.length);
                        if ('.' + id == selector) {
                            isotopeFilter = '.' + id;
                        }
                    }
                });
                $container.isotope({
                    itemSelector: '.masonry-grid',
                    filter: isotopeFilter
                });
                $optionLinks.each(function() {
                    var $this = jQuery(this);
                    var selector = $this.attr('data-filter');
                    if (selector == isotopeFilter) {
                        if (!$this.hasClass('selected')) {
                            var $optionSet = $this.parents('.option-set');
                            $optionSet.find('.selected').removeClass('selected');
                            $this.addClass('selected');
                        }
                    }
                });
                $optionLinks.on("click", function() {
                    var $this = jQuery(this);
                    var selector = $this.attr('data-filter');
                    $container.isotope({
                        itemSelector: '.masonry-grid',
                        filter: selector
                    });
                    if (!$this.hasClass('selected')) {
                        var $optionSet = $this.parents('.option-set');
                        $optionSet.find('.selected').removeClass('selected');
                        $this.addClass('selected');
                    }
                    return false;
                });
            }
        }
        var isotopeTimer = window.setTimeout(function() {
            window.clearTimeout(isotopeTimer);
            doIsotopeFilter();
        }, 1000);
    }

    // Simple Masonry
    if (jQuery("").length != '') {
        jQuery('.simple-masonry').isotope({
            itemSelector: '.simple-masonry-grid'
        });
    }

    // Auto height function
    if (jQuery(".fullscreen").length != '') {
        var setElementHeight = function () {
            var width = jQuery(window).width();
            /*if (jQuery('.tc-hero-slider li img') >= height) {*/
            var height = jQuery(window).height();
            jQuery('.fullscreen').css('height', (height));
            }
        //       else {
        //            jQuery('.autoheight').css('min-height', (800));
        //        }
        //};
        jQuery(window).on("resize", function () {
            setElementHeight();
        }).resize();
    }

    // Prety Photo
    jQuery("a[data-rel]").each(function () {
        jQuery(this).attr("rel", jQuery(this).data("rel"));
    });
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        theme: 'dark_square',
        slideshow: 3000,
        autoplay_slideshow: false,
        social_tools: false
    });

    // PrettyPhoto Video Popup
    jQuery("a[rel^='prettyPhoto']").prettyPhoto();
    
    // Book View
    if (jQuery("#magazine").length != '') {
        jQuery('#magazine').turn({
            display: 'double',
            acceleration: true,
            gradients: !$.isTouch,
            elevation:1000,
            when: {
                turned: function(e, page) {
                    /*console.log('Current view: ', jQuery(this).turn('view'));*/
                }
            }
        });
        jQuery(window).bind('keydown', function(e){
            if (e.keyCode==37)
                jQuery('#magazine').turn('previous');
            else if (e.keyCode==39)
                jQuery('#magazine').turn('next'); 
        });
    }

    // Range slider
    if (jQuery("#slider-range").length != '') {
        jQuery( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ],
        slide: function( event, ui ) {
        jQuery( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
        });
        jQuery( "#amount" ).val( "$" + jQuery( "#slider-range" ).slider( "values", 0 ) +
        " - $" + jQuery( "#slider-range" ).slider( "values", 1 ) );
    }

    // Scroll to Top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-top').fadeIn();
        } else {
            $('.back-top').fadeOut();
        }
    });
    $('.back-top').on("click", function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

})