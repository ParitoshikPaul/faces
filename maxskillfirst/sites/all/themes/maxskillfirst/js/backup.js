/**
 * Created by Paritoshik on 6/29/2015.
 */
/**
 * Created by Paritoshik on 6/29/2015.
 */
/*
 jQuery Document ready
 */


// for iOS devices, use below code:
// window.addEventListener('DOMContentLoaded', function()
// {
// 	$("body").queryLoader2();
// });

jQuery(document).ready(function($){
    var manifest;
    var preload;
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    function setupManifest() {
        manifest = [
            "wp-content/themes/cremica/slider/images/slider-bg.jpg"
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
        console.log(preload.progress);
        console.log(windowWidth*preload.progress);

        $('div#overlay-percentage span').text((100*preload.progress).toFixed(0));

        $('.overlay-bar ').animate({
                width: windowWidth*preload.progress + 'px',
            },
            100, function() {
                /* stuff to do after animation is complete */
            });
    }

    function loadComplete(event) {
        $('.overlay-bar ').animate({
                height : windowHeight,
                top: 0},
            700, function() {
                $('#overlay').fadeOut();
            });
        // $('#overlay').fadeOut();
    }



    setupManifest();
    startPreload();

});