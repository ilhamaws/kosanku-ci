
$(document).ready(function () {
    "use strict";

    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;


    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);

    //-------- Active Sticky Js ----------//
    $(".default-header").sticky({ topSpacing: 0 });


    //------- Active Nice Select --------//
    if (document.getElementById("default-select")) {
        $('select').niceSelect();
    };

    if (document.getElementById("kosan-list")) {
        $('select').niceSelect();
    };

    $('.img-pop-up').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });



    $(".navbar-nav li a[href^='#']").on('click', function (event) {
        var target = this.hash;

        event.preventDefault();

        var navOffset = $('#navbar').height();

        return $('html, body').animate({
            scrollTop: $(this.hash).offset().top - 70 - navOffset
        }, 600, function () {
            return window.history.pushState(null, null, target);
        });
    });

    //------- Owl Carousel  js --------//
    $('.active-testimonial-carusel').owlCarousel({
        items: 3,
        loop: true,
        margin: 30,
        dots: true,
        autoplayHoverPause: true,
        smartSpeed: 650,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }
    })



    $("#range").ionRangeSlider({
        hide_min_max: true,
        keyboard: true,
        min: 100000,
        max: 5000000,
        from: 300000,
        to: 5000000,
        type: 'double',
        step: 50000,
        prefix: "",
        grid: true
    });






});
