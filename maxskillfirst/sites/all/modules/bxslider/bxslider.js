(function($) {
  Drupal.behaviors.bxslider = {
    attach: function(context, settings) {

        if(settings.bxslider.slider_settings.buildPager) {
            settings.bxslider.slider_settings.buildPager = new Function('slideIndex', settings.bxslider.slider_settings.buildPager);
            settings.bxslider.slider_settings.pagerCustom = null;
        }

        $('#' + settings.bxslider.slider_id + ' .bxslider', context).show().bxSlider( settings.bxslider.slider_settings);
    }
  };
}(jQuery));
