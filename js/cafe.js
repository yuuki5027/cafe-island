jQuery(function(){
  jQuery(".header-open-button").click(function(){
    jQuery(".main-navigation").fadeIn();
    jQuery(this).hide();
    return false;
  })
  jQuery(".header-close-button").click(function(){
    jQuery(".main-navigation").fadeOut();
    jQuery(".header-open-button").show();
    return false;
  })
})