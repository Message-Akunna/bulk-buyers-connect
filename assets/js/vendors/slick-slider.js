"use strict";
! function() {
    var categorySlider = document.querySelector(".category-slider"),
        categorySlider = (categorySlider && e(categorySlider, {
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            dots: false,
            arrows: true,
            prevArrow: '<span class="slick-prev"><i class="feather-icon icon-chevron-left"></i></span>',
            nextArrow: '<span class="slick-next"><i class="feather-icon icon-chevron-right"></i></span>',
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            }, {
                breakpoint: 820,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }]
        }), document.querySelector(".team-slider")),
        categorySlider = (categorySlider && e(categorySlider, {
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            dots: false,
            arrows: true,
            prevArrow: '<span class="slick-prev"><i class="feather-icon icon-chevron-left"></i></span>',
            nextArrow: '<span class="slick-next"><i class="feather-icon icon-chevron-right"></i></span>',
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }, {
                breakpoint: 820,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        }), document.querySelectorAll(".hero-slider"));

    function e(s, e) {
        window.jQuery && jQuery.fn.slick ? $(s).slick(e) : new Slick(s, e)
    }
    categorySlider && e(categorySlider, {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        dots: true,
        arrows: false
    });
    categorySlider = document.querySelectorAll(".slider-8-columns"), categorySlider.length && categorySlider.forEach(function(categorySlider) {
        categorySlider = categorySlider.id;
        e("#" + categorySlider, {
            infinite: true,
            slidesToShow: 8,
            slidesToScroll: 1,
            autoplay: true,
            dots: false,
            arrows: true,
            speed: 1e3,
            loop: true,
            adaptiveHeight: true,
            responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }],
            prevArrow: '<span class="slick-prev"><i class="feather-icon icon-chevron-left"></i></span>',
            nextArrow: '<span class="slick-next"><i class="feather-icon icon-chevron-right"></i></span>',
            appendArrows: "#" + categorySlider + "-arrows"
        })
    }), categorySlider = document.querySelectorAll(".product-slider-second"), categorySlider.length && categorySlider.forEach(function(categorySlider) {
        categorySlider = categorySlider.id;
        e("#" + categorySlider, {
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            dots: false,
            arrows: true,
            speed: 1e3,
            loop: true,
            adaptiveHeight: true,
            responsive: [{
                breakpoint: 1400,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            }, {
                breakpoint: 990,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }],
            prevArrow: '<span class="slick-prev"><i class="feather-icon icon-chevron-left"></i></span>',
            nextArrow: '<span class="slick-next"><i class="feather-icon icon-chevron-right"></i></span>',
            appendArrows: "#" + categorySlider + "-arrows"
        })
    }), categorySlider = document.querySelector(".slider-for"), categorySlider && $(categorySlider).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: ".slider-nav"
    }), categorySlider = document.querySelector(".slider-nav"), categorySlider && $(categorySlider).slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".slider-for",
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        prevArrow: '<span class="slick-prev"><i class="feather-icon icon-chevron-left"></i></span>',
        nextArrow: '<span class="slick-next"><i class="feather-icon icon-chevron-right"></i></span>'
    }), categorySlider = document.querySelector(".product-slider-four-column"), categorySlider && e(categorySlider, {
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        arrows: true,
        prevArrow: '<span class="slick-prev "><i class="feather-icon icon-chevron-left"></i></span>',
        nextArrow: '<span class="slick-next "><i class="feather-icon icon-chevron-right "></i></span>',
        responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    }), categorySlider = document.querySelectorAll(".product-slider");
    categorySlider && e(categorySlider, {
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        dots: false,
        arrows: true,
        prevArrow: '<span class="slick-prev "><i class="feather-icon icon-chevron-left"></i></span>',
        nextArrow: '<span class="slick-next "><i class="feather-icon icon-chevron-right "></i></span>',
        responsive: [{
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }, {
            breakpoint: 820,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    })
}();