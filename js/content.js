jQuery(window).on("load",function() {
  function fade(pageLoad) {
    var windowTop=jQuery(window).scrollTop(), windowBottom=windowTop+jQuery(window).innerHeight();
    var min=0.3, max=1.0, threshold=0.01;
    
    jQuery(".featured-article").each(function() {
      /* Check the location of each desired element */
      var objectHeight=jQuery(this).outerHeight(), objectTop=jQuery(this).offset().top, objectBottom=jQuery(this).offset().top+objectHeight;
      
      /* Fade element in/out based on its visible percentage */
      if (objectTop < windowTop) {
        if (objectBottom > windowTop) {jQuery(this).fadeTo(0,min+((max-min)*((objectBottom-windowTop)/objectHeight)));}
        else if (jQuery(this).css("opacity")>=min+threshold || pageLoad) {jQuery(this).fadeTo(0,min);}
      } else if (objectBottom > windowBottom) {
        if (objectTop < windowBottom) {jQuery(this).fadeTo(0,min+((max-min)*((windowBottom-objectTop)/objectHeight)));}
        else if (jQuery(this).css("opacity")>=min+threshold || pageLoad) {jQuery(this).fadeTo(0,min);}
      } else if (jQuery(this).css("opacity")<=max-threshold || pageLoad) {jQuery(this).fadeTo(0,max);}
    });
  } fade(true); //fade elements on page-load
  jQuery(window).scroll(function(){fade(false);}); //fade elements on scroll
});