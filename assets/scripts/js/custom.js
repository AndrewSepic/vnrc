//Custom JS for VNRC
// by Andrew@thinkupdesign.ca
//


jQuery(document).ready(function($) {

    // $('form#searchform').on("click", function(){
    //   console.log('Clicked search!');
    //   $(this).addClass('open');
    //   $(this).animate({
    //     width: [ 150, "swing"]
    //   }, 500);
    // });

    $('.overlay').on("hover", function(){
      console.log('its hovered!');
      $(this).animate({
        height: [ 150, "swing"]
      }, 250, function() {
        $(this).addClass('open');
      });
    });

    $('.overlay').on("mouseleave", function(){
      console.log('its not hovered!');
      $(this).animate({
        height: [ 75, "swing"]
      }, 500, function() {
        $(this).removeClass('open');
      });
    });

//End Document Ready
});