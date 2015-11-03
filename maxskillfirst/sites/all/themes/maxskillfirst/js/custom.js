/**
 * Created by Paritoshik on 6/29/2015.
 */

/*
 jQuery Document ready
 */
/*
* Overlay On PAGE LOAD WITH THE LOADING BAR
* */

jQuery(document).ready(function($){
    var manifest;
    var preload;
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    function setupManifest() {
        manifest = [
            "http://reputationindia.net/development/pp/maxskillfirst/sites/default/files/skill-icon.png", "http://reputationindia.net/development/pp/maxskillfirst/sites/all/themes/maxskillfirst/img/read_more.png"
        ];
    }

    function startPreload() {
        preload = new createjs.LoadQueue(true);
        preload.installPlugin(createjs.Sound);
        preload.on("fileload", handleFileLoad);
        preload.on("progress", handleFileProgress);
        preload.on("complete", loadComplete);
        preload.on("error", loadError);
        preload.loadManifest(manifest);
    }

    function handleFileLoad(event) {
        // console.log("A file has loaded of type: " + event.item.type);

    }

    function loadError(evt) {
        console.log("Error!",evt.text);
    }


    function handleFileProgress(event) {

        $('div#overlay-percentage span').text((100*preload.progress).toFixed(0));

        $('.overlay-bar ').animate({
                width: windowWidth*preload.progress + 'px',
            },
            1000, function() {
                /* stuff to do after animation is complete */
            });
    }

    function loadComplete(event) {
        $('.overlay-bar ').animate({
                height : windowHeight,
                top: 0},
            1200, function() {
                $('#overlay').fadeOut();
            });
        // $('#overlay').fadeOut();
    }
    setupManifest();
    startPreload();


    /*
    * BX SLIDER CODES
    * */

     $('.bxslider').bxSlider({
         mode: 'fade',
        controls: false,
        auto: true,
        autoDelay: 200,
        slideWidth:800,
        speed: 1000
    });


    /*
    *  Page Section Bottom Tabs
    *
    * */

     $('.top-bar-right a').on('click', function(e)  {
        var currentAttrValue = $(this).attr('href');
        $('.tabs ' + currentAttrValue).fadeIn('slow').siblings().hide();
        $(this).parent('li').addClass('active').siblings().removeClass('active');
        e.preventDefault();
    });
    $('.product-icons li a').on('click', function(e)  {
        var currentAttrValue = $(this).attr('href');
        $('.tabs ' + currentAttrValue).fadeIn('slow').siblings().hide();
        $(this).parent('li').addClass('active').siblings().removeClass('active');
        e.preventDefault();
    });
    /*
    * Services Page Products Tab SHOW MENU AND LOGO on scroll
    * */
    $(window).scroll(function(){
        if ($(window).scrollTop() > 400 ) {
            $('#tab2 .logo').fadeIn('slow');
            $('.desktop-menu').fadeIn('slow');

        } else {
            $('.top-bar').removeClass('fixed');
            $('.logo').removeClass('fixed');
            $('#tab2 .logo').fadeOut('slow');
            $('#tab2 .desktop-menu').fadeOut('slow');
        }
    });

     /*
     * To toggle Menu on Responsive Screen
     * */

     $( ".navbar-toggle" ).click(function() {
        $( ".mobile-menu" ).toggle();
    });

});