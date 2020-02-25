/*
Author       : Code-Theme
Template Name: HireYou - HTML5 Template
Version      : 1.0
*/

"use strict";

jQuery(document).on('ready', function ($) {

    /*---------------------------------
	 //------ PRELOADER ------//
	 ----------------------------------*/
    $('#status').fadeOut();
    $('#preloader').delay(200).fadeOut('slow');

    /*----------------------------------
    	//------ MMENU JS ------//
    -----------------------------------*/
    var $menu = $("#main-menu").mmenu({
        navbar: {
            title: false
        },
        wrappers: ["bootstrap"],
        slidingSubmenus: true,
        "extensions": [
            "position-left",
            "theme-white",
            "border-full",
            "fx-menu-slide",
            "fx-panels-slide-up",
            "fx-listitems-slide",
            "pagedim-black",
            "shadow-page",
            "shadow-panels"
        ],
        navbars: [{
            position: "top",
            content: [
                '<a href="#" class="d-block w-100 text-center"><img src="images/logo.svg" alt="Logo del sitio" width="155"></a>']
        }],
        "counters": true
    });

    /*----------------------------------
    	//----- PRICING BOTTOM -----//
    -----------------------------------*/
    $("document").ready(function () {
        $(".tab-slider--body:nth-child(1)").addClass('active');
    });
    $(".btn-toggle").on('click', function () {
        if ($(this).hasClass("active")) {
            $('.tab-slider--body:nth-child(1)').addClass('active');
            $('.tab-slider--body:nth-child(2)').removeClass('active');
        } else {
            $('.tab-slider--body:nth-child(2)').addClass('active');
            $('.tab-slider--body:nth-child(1)').removeClass('active');
        }
    });


    /*----------------------------------
    	//------ SEARCH BOTTOM ------//
    -----------------------------------*/
    $('.btn-search').on('click', function () {
        $('.btn-search').toggleClass('search-active');
    });


    /*----------------------------------
    	//------ JUGGLER JS ------//
    -----------------------------------*/
    Juggler.init();


    /*----------------------------------
    	//------ HCSTICKY ------//
    -----------------------------------*/
    var Sticky = new hcSticky('.head-details', {
        mobileFirst: true,
        responsive: {
            0: {
                disable: true,
            },
            1200: {
                stickTo: 'body',
                top: 0,
                disable: false,
                stickyClass: 'head-fixed',
            }
        }
    });

    /*----------------------------------
    	//------ SMOOTHSCROLL ------//
    -----------------------------------*/
    smoothScroll.init({
        speed: 1000, // Integer. How fast to complete the scroll in milliseconds
        offset: 200, // Integer. How far to offset the scrolling anchor location in pixels

    });

    /*-----------------------------------
    	//------ JQUERY SCROOLTOP ------//
    ------------------------------------*/
    var go = $(".go-up");
    $(window).on('scroll', function () {
        var scrolltop = $(this).scrollTop();
        if (scrolltop >= 50) {
            go.fadeIn();
        } else {
            go.fadeOut();
        }
    });


}(jQuery));
