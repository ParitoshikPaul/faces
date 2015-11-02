(function($){

    $(document).on('ready', function(){
        windowHeight = $(window).height();
        headerHeight = $('.header').height();
        $(window).scroll(function(){
            if ($(this).scrollTop() > 1) {
                $('.header').addClass('header-fixed');
            } else {
                $('.header').removeClass('header-fixed');
            }

        });


        /*  ----------------------------------------------------
         search button js
         -----------------------------------------------------*/

        $(".glyphicon-search").click(function(){
            $(".search-type").slideToggle("slow");
        });



        /*  ----------------------------------------------------
         cart-pop  js
         -----------------------------------------------------*/

        $(".shoping-icon").click(function(){
            $(".cart-pop").slideToggle("slow");
        });

        /*----------------------------------------------------
         top banner arrow onclick scroll top
         -----------------------------------------------------*/

        $('.arrow-icon a').click(function(event) {
            event.preventDefault();
            var data = $(this).data('id');
            if(data){
                $('body,html').animate({scrollTop:$(data).offset().top - 0},500);
            }
        });

        /*----------------------------------------------------
         Accordian plus minus
         -----------------------------------------------------*/
        $('.collapse').on('shown.bs.collapse', function(){
            $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hidden.bs.collapse', function(){
            $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
    });
//$(".tab-pane .panel-title .glyphicon").addClass(".glyphicon-plus");
//$(".tab-pane .panel-title .glyphicon").removeClass("glyphicon-minus");
//$(".tab-pane.active .panel-title .glyphicon").addClass("glyphicon-minus");
//$(".tab-pane.active .panel-title .glyphicon").removeClass("glyphicon-plus");

})(jQuery);