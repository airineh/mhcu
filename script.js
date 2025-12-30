/**
 * WEBSITE: https://themefisher.com
 * TWITTER: https://twitter.com/themefisher
 * FACEBOOK: https://www.facebook.com/themefisher
 * GITHUB: https://github.com/themefisher/
 */

(function ($) {
	"use strict";
	
	// navbarDropdown
	if ($(window).width() < 992) {
		$('.navbar .dropdown-toggle').on('click', function () {
			$(this).siblings('.dropdown-menu').animate({
				height: 'toggle'
			}, 300);
		});
	}

	$(window).on('scroll', function () {
		//.Scroll to a Specific Div
		if ($('#back-to-top').length) {
			var scrollToTop = $('#back-to-top'),
				scroll = $(window).scrollTop();
			if (scroll >= 200) {
				scrollToTop.fadeIn(200);
			} else {
				scrollToTop.fadeOut(100);
			}
		}
	});
	if ($('#back-to-top').length) {
		$('#back-to-top').on('click', function () {
			$('body,html').animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	}

	//Date picker
	function datepicker() {
		if ($('#datepicker').length) {
			$('#datepicker').datepicker();
		};
	}

	// Hero Slider
	$('.hero-slider').slick({
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		infinite: true,
		speed: 300,
		dots: true,
		arrows: true,
		fade: true,
		responsive: [{
			breakpoint: 600,
			settings: {
				arrows: false
			}
		}]
	});
	$('.hero-slider').slickAnimation();

	// Item Slider
	$('.items-container').slick({
		infinite: true,
		arrows: true,
		autoplay: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				arrows: false
			}
		},
		{
			breakpoint: 525,
			settings: {
				slidesToShow: 1,
				arrows: false
			}
		}]
	});
	// Testimonial Slider
	$('.testimonial-carousel').slick({
		infinite: true,
		arrows: false,
		// autoplay: true,
		slidesToShow: 2,
		dots: true,
		slidesToScroll: 2,
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 525,
			settings: {
				slidesToShow: 1
			}
		}]
	});

$(document).ready(function () {
    if ($('.psychologist-slider').length) {
        $('.psychologist-slider').slick({
            dots: true,
            arrows: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                { breakpoint: 992, settings: { slidesToShow: 2 }},
                { breakpoint: 768, settings: { slidesToShow: 1 }}
            ]
        });
    }
});

function initMap() {
    var location = { lat: -6.1485, lng: 106.7840 };

    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 17,
        center: location
    });

    new google.maps.Marker({
        position: location,
        map: map
    });
}


	// FancyBox Video
	if ($('[data-fancybox]').length) {
		$('[data-fancybox]').fancybox({
			youtube: {
				controls: 0,
				showinfo: 0
			},
			vimeo: {
				color: 'f00'
			}
		});
	}

	/* ========================When document is loaded, do===================== */
	$(window).on('load', function () {
		// add your functions
		(function ($) {
			datepicker();
		})(jQuery);
	});


})(window.jQuery);