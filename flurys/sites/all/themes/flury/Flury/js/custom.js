
/*  ----------------------------------------------------
                      header fixed js
-----------------------------------------------------*/

windowHeight = $(window).height();
headerHeight = $('.header').height();
 $(window).scroll(function(){
      if ($(this).scrollTop() > 158) {
          $('.header').addClass('header-fixed');
      } else {
          $('.header').removeClass('header-fixed');
      }

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
