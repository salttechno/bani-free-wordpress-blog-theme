jQuery(document).ready(function($) {

    "use strict";

    $(".loading-screen").fadeOut('slow', function(){
        $(".loading-screen").addClass('hide-screen');
    });

    // For Fixed header & Scroll to top
	$(window).on("scroll resize", function() {
		if ($(window).scrollTop() >= 500) {
            $(".scroll-to-top").css("bottom", "15px");
            $(".appear-fixed-on-scroll").css("top", "0px");
			$(".admin-bar .appear-fixed-on-scroll").css("top", "32px");
		}
		if ($(window).scrollTop() < 500) {
            $(".scroll-to-top").css("bottom", "-60px");
			$(".appear-fixed-on-scroll").css("top", "-90px");
		}
	});

    // Adjust margin-top
    var headerHt = $('.st-header-area').height();
    $('.st-content-area').css('margin-top', headerHt);

    // For Scroll to top
    $(".scroll-to-top").on("click", function() {
		return $("html, body").animate({
			scrollTop: 0
		});
    });

    // Add dropdown arrow to parent menu
    $(".bani-main-menu .menu-item-has-children > a").append("<i class='fa fa-chevron-down ml-2 float-right'></i>");

    // For menu on mobile
    $(".bani-main-menu .menu-item-has-children a .fa").on("click", function(e){
        e.preventDefault();
        // console.log(this);
        $(this).parent().parent().find(" > .sub-menu").toggleClass("showSubMenu");
    });

    // For Featured Posts
    var featuredPosts = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
    });

    // Initialize typed js
    $("#typed").typed({
		stringsElement: document.getElementById('typed-strings'),
        typeSpeed: 100,
		backSpeed: 50,
        loop: true
	});

    // Check cover content height
    var coverContentHt = $('.bani-content-height').height();
    $('.bani-cover-wrapper').height(coverContentHt);

});
