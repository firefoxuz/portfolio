(function ($) {
    "use strict";

    function portfolio_init() {
        var portfolio_grid = $('#portfolio_grid'), portfolio_filter = $('#portfolio_filters');
        if (portfolio_grid) {
            portfolio_grid.shuffle({speed: 450, itemSelector: 'figure'});
            $('.site-main-menu').on("click", "a", function (e) {
                portfolio_grid.shuffle('update');
            });
            portfolio_filter.on("click", ".filter", function (e) {
                portfolio_grid.shuffle('update');
                e.preventDefault();
                $('#portfolio_filters .filter').parent().removeClass('active');
                $(this).parent().addClass('active');
                portfolio_grid.shuffle('shuffle', $(this).attr('data-group'));
            });
        }
    }

    $(function () {
        $('#contact-form').validator();
    });
    $.fn.extend({
        rotaterator: function (options) {
            var defaults = {fadeSpeed: 500, pauseSpeed: 100, child: null};
            var options = $.extend(defaults, options);
            return this.each(function () {
                var o = options;
                var obj = $(this);
                var items = $(obj.children(), obj);
                items.each(function () {
                    $(this).hide();
                });
                if (!o.child) {
                    var next = $(obj).children(':first');
                } else {
                    var next = o.child;
                }
                $(next).fadeIn(o.fadeSpeed, function () {
                    $(next).delay(o.pauseSpeed).fadeOut(o.fadeSpeed, function () {
                        var next = $(this).next();
                        if (next.length === 0) {
                            next = $(obj).children(':first');
                        }
                        $(obj).rotaterator({child: next, fadeSpeed: o.fadeSpeed, pauseSpeed: o.pauseSpeed});
                    });
                });
            });
        }
    });

    function mobileMenuHide() {
        var windowWidth = $(window).width();
        if (windowWidth < 1024) {
            $('#site_header').addClass('mobile-menu-hide');
        }
    }

    $(window).on('load', function () {
        $(".preloader").fadeOut("slow");
    });
    $(document).ready(function () {
        var $portfolio_container = $("#portfolio_grid");
        $portfolio_container.imagesLoaded(function () {
            setTimeout(function () {
                portfolio_init(this);
            }, 500);
        });
        $(' #portfolio_grid > figure > a ').each(function () {
            $(this).hoverdir();
        });
        $('.menu-toggle').click(function () {
            $('#site_header').toggleClass('mobile-menu-hide');
        });
        var $testimonials = $(".testimonials.owl-carousel").owlCarousel({
            nav: true,
            items: 1,
            loop: true,
            navText: false,
            margin: 10,
        });
        $('.site-main-menu').on("click", "a", function (e) {
            $testimonials.trigger('refresh.owl.carousel');
        });
        $('#rotate').rotaterator({fadeSpeed: 800, pauseSpeed: 1900});
        setTimeout(function () {
            var $container = $(".blog-masonry");
            $container.masonry();
        }, 500);
        $('.site-main-menu').on("click", "a", function (e) {
            var $container = $(".blog-masonry");
            $container.masonry();
        });
        $('.lightbox').magnificPopup({
            type: 'image', removalDelay: 300, mainClass: 'mfp-fade', image: {titleSrc: 'title'}, iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '<div class="mfp-title mfp-bottom-iframe-title"></div>' +
                    '</div>',
                patterns: {
                    youtube: {index: 'youtube.com/', id: 'v=', src: '//www.youtube.com/embed/%id%?autoplay=1'},
                    vimeo: {index: 'vimeo.com/', id: '/', src: '//player.vimeo.com/video/%id%?autoplay=1'},
                    gmaps: {index: '//maps.google.', src: '%id%&output=embed'}
                },
                srcAction: 'iframe_src',
            }, callbacks: {
                markupParse: function (template, values, item) {
                    values.title = item.el.attr('title');
                }
            },
        });
    });
    $(window).on('resize', function () {
        mobileMenuHide();
    });
    $('.site-main-menu').on("click", "a", function (e) {
        mobileMenuHide();
    });
})(jQuery);
