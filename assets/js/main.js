(function($) {
    "use strict";
    jQuery(document).on('ready', function() {
        $('.mean-menu').meanmenu({
            meanScreenWidth: "991"
        });
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 120) {
                $('.navbar-area').addClass("is-sticky");
            } else {
                $('.navbar-area').removeClass("is-sticky");
            }
        });
        $('.close-btn').on('click', function() {
            $('.search-overlay').fadeOut();
            $('.search-btn').show();
            $('.close-btn').removeClass('active');
        });
        $('.search-btn').on('click', function() {
            $(this).hide();
            $('.search-overlay').fadeIn();
            $('.close-btn').addClass('active');
        });
        $('.panel-close-btn').on('click', function() {
            $('.top-panel').addClass('hide');
        });
        $('.home-slides').owlCarousel({
            loop: true,
            nav: true,
            dots: true,
            autoplayHoverPause: true,
            items: 1,
            smartSpeed: 750,
            autoplay: true,
            navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
        });
        $('.home-slides-two').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            items: 1,
            smartSpeed: 750,
            autoplay: true,
            animateOut: 'fadeOut',
            navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        });
        
        
        
        
        
        // product details slider
        

        $('.product-main-image').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.products-thumbnails'
        });
        $('.products-thumbnails').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.product-main-image',
            dots: false,
            arrows: false,
            focusOnSelect: true
        });
        
        
        
        
        
        
        
        
        $(".home-slides").on("translate.owl.carousel", function() {
            $(".main-banner-content span").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content .btn").removeClass("animated fadeInUp").css("opacity", "0");
            $(".banner-image img").removeClass("animated fadeInUp").css("opacity", "0");
            $(".banner-image .circle").removeClass("animated zoomIn").css("opacity", "0");
        });
        $(".home-slides").on("translated.owl.carousel", function() {
            $(".main-banner-content span").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content p").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content .btn").addClass("animated fadeInUp").css("opacity", "1");
            $(".banner-image img").addClass("animated fadeInUp").css("opacity", "1");
            $(".banner-image .circle").addClass("animated zoomIn").css("opacity", "1");
        });
        $(".home-slides-two").on("translate.owl.carousel", function() {
            $(".banner-content .sub-title").removeClass("animated fadeInUp").css("opacity", "0");
            $(".banner-content h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".banner-content p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".banner-content .btn").removeClass("animated fadeInUp").css("opacity", "0");
        });
        $(".home-slides-two").on("translated.owl.carousel", function() {
            $(".banner-content .sub-title").addClass("animated fadeInUp").css("opacity", "1");
            $(".banner-content h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".banner-content p").addClass("animated fadeInUp").css("opacity", "1");
            $(".banner-content .btn").addClass("animated fadeInUp").css("opacity", "1");
        });
        (function($) {
            $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
            $('.tab ul.tabs li a').on('click', function(g) {
                var tab = $(this).closest('.tab'),
                    index = $(this).closest('li').index();
                tab.find('ul.tabs > li').removeClass('current');
                $(this).closest('li').addClass('current');
                tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
                tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
                g.preventDefault();
            });
        })(jQuery);
        $('#select_id').niceSelect();
        $('.offer-slides').owlCarousel({
            loop: true,
            nav: true,
            dots: true,
            autoplayHoverPause: true,
            smartSpeed: 750,
            autoplay: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1200: {
                    items: 4,
                }
            }
        });
        $('.top-panel-slides').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplayHoverPause: true,
            smartSpeed: 750,
            autoplay: true,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            items: 1,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        });
        $('.all-products-slides').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            smartSpeed: 750,
            autoplayHoverPause: true,
            autoplay: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        });
        $('.all-products-slides-two').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            smartSpeed: 750,
            margin: 30,
            autoplayHoverPause: true,
            autoplay: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        });
        $('.trending-products-slides').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            smartSpeed: 750,
            autoplayHoverPause: true,
            autoplay: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        });
        $('.trending-products-slides-two').owlCarousel({
            loop: true,
            nav: false,
            smartSpeed: 750,
            dots: true,
            autoplayHoverPause: true,
            autoplay: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        });
        $('.best-sellers-products-slides').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            autoplay: true,
            smartSpeed: 750,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        });
        $('.best-sellers-products-slides-two').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            smartSpeed: 750,
            autoplayHoverPause: true,
            autoplay: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        });
        // $('.testimonials-slides').owlCarousel({
        //     loop: true,
        //     nav: false,
        //     dots: true,
        //     autoplayHoverPause: true,
        //     smartSpeed: 750,
        //     items: 1,
        //     autoplay: true,
        //     navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        // });
        $('.news-slides').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            autoplayHoverPause: true,
            smartSpeed: 750,
            autoplay: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 3,
                }
            }
        });
        $('.partner-slides').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplayHoverPause: true,
            autoplay: true,
            smartSpeed: 750,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2,
                },
                768: {
                    items: 4,
                },
                1200: {
                    items: 6,
                }
            }
        });
        $('.instagram-slides').owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplayHoverPause: true,
            smartSpeed: 750,
            autoplay: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 2,
                },
                768: {
                    items: 6,
                },
                1200: {
                    items: 9,
                }
            }
        });
        $(function() {
            $('[data-tooltip="tooltip"]').tooltip();
        });
        window.onload = function() {
            $(".bts-popup").delay(1000).addClass('is-visible');
        }
        $('.bts-popup-trigger').on('click', function(event) {
            event.preventDefault();
            $('.bts-popup').addClass('is-visible');
        });
        $('.bts-popup').on('click', function(event) {
            if ($(event.target).is('.bts-popup-close') || $(event.target).is('.bts-popup')) {
                event.preventDefault();
                $(this).removeClass('is-visible');
            }
        });
        $(document).keyup(function(event) {
            if (event.which == '27') {
                $('.bts-popup').removeClass('is-visible');
            }
        });
        $(function() {
            $(window).on('scroll', function() {
                var scrolled = $(window).scrollTop();
                if (scrolled > 300) $('.go-top').fadeIn('slow');
                if (scrolled < 300) $('.go-top').fadeOut('slow');
            });
            $('.go-top').on('click', function() {
                $("html, body").animate({
                    scrollTop: "0"
                }, 500);
            });
        });
        $(function() {
            $('.collapse-widget').find('.collapse-widget-title').on('click', function() {
                $(this).toggleClass('active');
                $('.collapse-widget').toggleClass('open');
                $(this).next().slideToggle('800');
            });
        });
        $(".js-range-of-price").ionRangeSlider({
            type: "double",
            drag_interval: true,
            min_interval: null,
            max_interval: null,
        });
        $(function() {
            $(".icon-view-two").on("click", function(e) {
                e.preventDefault();
                document.getElementById("products-filter").classList.add('products-col-two')
                document.getElementById("products-filter").classList.remove('products-col-three', 'products-col-four', 'products-row-view');
            });
            $(".icon-view-three").on("click", function(e) {
                e.preventDefault();
                document.getElementById("products-filter").classList.add('products-col-three')
                document.getElementById("products-filter").classList.remove('products-col-two', 'products-col-four', 'products-row-view');
            });
            $(".icon-view-four").on("click", function(e) {
                e.preventDefault();
                document.getElementById("products-filter").classList.add('products-col-four')
                document.getElementById("products-filter").classList.remove('products-col-two', 'products-col-three', 'products-row-view');
            });
            $(".view-grid-switch").on("click", function(e) {
                e.preventDefault();
                document.getElementById("products-filter").classList.add('products-row-view')
                document.getElementById("products-filter").classList.remove('products-col-two', 'products-col-three', 'products-col-four');
            });
            $(".icon-view-six").on("click", function(e) {
                e.preventDefault();
                document.getElementById("products-filter").classList.add('products-col-six')
                document.getElementById("products-filter").classList.remove('products-col-two', 'products-col-three', 'products-col-four', 'products-row-view');
            });
        });
        $('.products-filter-options .view-column a').on('click', function() {
            $('.view-column a').removeClass("active");
            $(this).addClass("active");
        });

        function makeTimer() {
            var endTime = new Date("August 19, 2020 17:00:00 PDT");
            var endTime = (Date.parse(endTime)) / 1000;
            var now = new Date();
            var now = (Date.parse(now) / 1000);
            var timeLeft = endTime - now;
            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
            if (hours < "10") {
                hours = "0" + hours;
            }
            if (minutes < "10") {
                minutes = "0" + minutes;
            }
            if (seconds < "10") {
                seconds = "0" + seconds;
            }
            $("#days").html(days + "<span>Day</span>");
            $("#hours").html(hours + "<span>Hrs</span>");
            $("#minutes").html(minutes + "<span>Min</span>");
            $("#seconds").html(seconds + "<span>Sec</span>");
        }
        setInterval(function() {
            makeTimer();
        }, 1000);
        
        $('.popup-btn').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
        $('.popup-youtube').magnificPopup({
            disableOn: 320,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
        $(function() {
            $('.accordion').find('.accordion-title').on('click', function() {
                $(this).toggleClass('active');
                $(this).next().slideToggle('fast');
                $('.accordion-content').not($(this).next()).slideUp('fast');
                $('.accordion-title').not($(this)).removeClass('active');
            });
        });
        $(".newsletter-form").validator().on("submit", function(event) {
            if (event.isDefaultPrevented()) {
                formErrorSub();
                submitMSGSub(false, "Please enter your email correctly.");
            } else {
                event.preventDefault();
            }
        });

        function callbackFunction(resp) {
            if (resp.result === "success") {
                formSuccessSub();
            } else {
                formErrorSub();
            }
        }

        function formSuccessSub() {
            $(".newsletter-form")[0].reset();
            submitMSGSub(true, "Thank you for subscribing!");
            setTimeout(function() {
                $("#validator-newsletter").addClass('hide');
            }, 4000)
        }

        function formErrorSub() {
            $(".newsletter-form").addClass("animated shake");
            setTimeout(function() {
                $(".newsletter-form").removeClass("animated shake");
            }, 1000)
        }

       
        
        
        $('.home-slides-three').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            autoplayHoverPause: true,
            items: 1,
            autoHeight: true,
            animateOut: "slideOutDown",
            animateIn: "slideInDown",
            smartSpeed: 750,
            autoplay: true,
            navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
        });
        $(".home-slides-three").on("translate.owl.carousel", function() {
            $(".main-banner-content span").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content p").removeClass("animated fadeInUp").css("opacity", "0");
            $(".main-banner-content .btn").removeClass("animated fadeInUp").css("opacity", "0");
            $(".banner-image img").removeClass("animated fadeInUp").css("opacity", "0");
            $(".banner-image .circle").removeClass("animated zoomIn").css("opacity", "0");
        });
        $(".home-slides-three").on("translated.owl.carousel", function() {
            $(".main-banner-content span").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content p").addClass("animated fadeInUp").css("opacity", "1");
            $(".main-banner-content .btn").addClass("animated fadeInUp").css("opacity", "1");
            $(".banner-image img").addClass("animated fadeInUp").css("opacity", "1");
            $(".banner-image .circle").addClass("animated zoomIn").css("opacity", "1");
        });
        $('.product-slides').on('initialized.owl.carousel changed.owl.carousel', function(e) {
            if (!e.namespace) {
                return;
            }
            var carousel = e.relatedTarget;
            $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
        }).owlCarousel({
            loop: true,
            nav: true,
            smartSpeed: 750,
            dots: false,
            autoplayHoverPause: true,
            margin: 30,
            autoplay: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1200: {
                    items: 4,
                }
            }
        });
    });
}(jQuery));