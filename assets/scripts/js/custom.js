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
    // Animate Hamburger

    hamburgular();

    // animate hamburger on small screens
    function hamburgular() {
      $(".hamburger").click(function(){
        $(this).toggleClass("is-active");
      });

      $(".off-canvas").on("closed.zf.offcanvas", function(e) {
        e.preventDefault();
        $(".hamburger").removeClass("is-active");
        console.log("off canvas closed!");
      });

    }

  // On Off-Canvas close, toggle hamburger back to defauly state
  //jQuery(document).on('closed.zf.offcanvas', '[data-offcanvas]', function() {
    //jQuery(".hamburger").removeClass("is-active");
    //console.log("off canvas closed!");
  //});


    $('.overlay').on("hover", function(){
      console.log('its hovered!');
      $(this).animate({
        height: [ 175, "swing"]
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