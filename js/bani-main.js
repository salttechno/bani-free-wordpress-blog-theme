jQuery(document).ready(function($) {

    "use strict";

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

    // Initialize typed js
    $("#typed").typed({
		stringsElement: document.getElementById('typed-strings'),
        typeSpeed: 100,
		backSpeed: 50,
        loop: true
	});

});
