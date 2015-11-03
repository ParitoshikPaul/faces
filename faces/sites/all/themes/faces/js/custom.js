$(document).ready(function () {

    $('.plus').on('click', function () {
        $('html, body').animate({scrollTop: $("#home_second").offset().top}, 1000);
        //   $('.footer').hide('slow');
    });
    $('.prev-nav').hover(function () {
        $('.bx-prev').fadeIn(800);
    }, function () {
        $(".bx-prev").fadeOut(800);
    });
    $('.next-nav').hover(function () {
        $('.bx-next').fadeIn(800);
    }, function () {
        $(".bx-next").fadeOut(800);
    });

    /***********ONSCROLL****/
// 	        $(window).scroll(function() {

// 		    if ($(this).scrollTop()>0)
// 		     {
// 		        $('.footer').fadeOut();
// 		     }
// 		    else
// 		     {
// 		        $('.footer').fadeIn();
// 		     }
// 		 });
    /************MENU HOVER***************/
    $('.home_links ul').hover(function () {
        selectedList = $(this);
        dataColor = $(this).data('color');
        $('.menu_border').css('background', dataColor);
        $('.menu_img').css('background', dataColor);

    }, function () {
        /* Stuff to do when the mouse leaves the element */
    });

    $('.home_links ul li a').hover(function () {
        selectedList = $(this);
        dataColor = $(this).parents('ul').data('color');
        selectedList.css('color', dataColor);
    }, function () {
        selectedList = $(this);
        selectedList.css('color', 'rgb(171, 171, 171)');
    });
    $('.home_links ul h4 a').hover(function () {
        selectedList = $(this);
        dataColor = $(this).parents('ul').data('color');
        selectedList.css('color', dataColor);
    }, function () {
        selectedList = $(this);
        selectedList.css('color', '#525252');
    });

    /***********************READ MORE**************/

    $(function () {
        var showTotalChar = 730, showChar = "+", hideChar = "-";
        $('.show').each(function () {
            var content = $(this).text();
            if (content.length > showTotalChar) {
                var con = content.substr(0, showTotalChar);
                var hcon = content.substr(showTotalChar, content.length - showTotalChar);
                var txt = con + '<span class="dots">...</span><span class="morectnt"><span>' + hcon + '</span>&nbsp;&nbsp;<a href="" class="showmoretxt">' + showChar + '</a></span>';
                $(this).html(txt);
            }
        });
        $(".showmoretxt").click(function () {
            if ($(this).hasClass("sample")) {
                $(this).removeClass("sample");
                $(this).text(showChar);
                $('morectnt').css('margin-top', '20px');
            } else {
                $(this).addClass("sample");
                $(this).text(hideChar);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });
    /***********************ABOUT PAGE TAB**************/

    $(".about_text").hide();
    $(".about_text:first").show();
    $(".tabs li:first-child").addClass("active");

    $("ul.tabs li a").click(function () {
        $(".about_text").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn(700);
        $("ul.tabs li a").removeClass("active");
        $('ul.tabs li a').find('span').removeClass("active").text('+');
        $(this).find('span').removeClass("active").text('-');
        $(this).addClass("active");
    });

    /*****************************ReVeal*****************/
    (function ($) {

        'use strict';

        window.sr = new scrollReveal({
            reset: true,
            move: '50px',
            mobile: true
        });

    })();

    /**************************************SLIDER******************/
    $('.bxslider').bxSlider({
        auto: true,
        autoControls: true,
        pager: false,
        speed: 1000,
        autoDelay: 500
    });
    $(function () {
        var showTotalChar = 730, showChar = "+", hideChar = "-";
        $('.show').each(function () {
            var content = $(this).text();
            if (content.length > showTotalChar) {
                var con = content.substr(0, showTotalChar);
                var hcon = content.substr(showTotalChar, content.length - showTotalChar);
                var txt = con + '<span class="dots">...</span><span class="morectnt"><span>' + hcon + '</span>&nbsp;&nbsp;<a href="" class="showmoretxt">' + showChar + '</a></span>';
                $(this).html(txt);
            }
        });
        $(".showmoretxt").click(function () {
            if ($(this).hasClass("sample")) {
                $(this).removeClass("sample");
                $(this).text(showChar);
                $('morectnt').css('margin-top', '20px');
            } else {
                $(this).addClass("sample");
                $(this).text(hideChar);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });

    /* PRODUCT PAGE SWATCHES & SHADE NAMES */
    $(".swatch").hover(function () {
        var swatch = $(this).attr('id');
        var shade_name = '#' + swatch + "-name";
				var shade_img = '#'+swatch+"-names";
        $('.shade-name').hide();
        $('.shade-0-name').css("display", "none");
        $('.product_shades ul li#shade-0 img').css("border", "none");
        $(shade_name).show();
				$(shade_img).show();
    });
    $(".product_shades ul li#shade-0 img").hover(function () {
        $('.product_shades ul li#shade-0 img').css("border", "2px solid #A71E3B");
    });
    /* PRODUCT PAGE SWATCHES & SHADE NAMES ENDS*/
    $('.navbar-toggle').on('click', function () {
        $(".navbar-collapse").toggle('slow');

    });
    document.getElementById('myvideo').play();
});