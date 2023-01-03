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
    //staffUX();

    if(!Cookies.get('hideAnnouncement')) $("div.announcement").slideDown("slow");
    $("a#closeit").click(function() {
        Cookies.set('hideAnnouncement', 'true', { expires: 3 });
        $("div.announcement").slideUp("slow");
        return false;
        Cookies.remove('hideAnnouncement');
    });


    hamburgular();

    function staffUX(){
      $('a.openstaff').click(function(e){
        e.preventDefault();
        $(this).parent().next('.info').toggle();
      })
    }
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


    // $('.overlay').on("hover", function(){
    //   // var overlayheight = $(this).height();
    //   // console.log(overlayheight);
    //   // console.log('its hovered!');
    //   $(this).animate({
    //     height: [ "+=50px", "swing"]
    //   }, 250, function() {
    //     $(this).addClass('open');
    //   });
    // });
    //
    // $('.overlay').on("mouseleave", function(){
    //   console.log('its not hovered!');
    //   $(this).animate({
    //     height: [ "-=50px", "swing"]
    //   }, 500, function() {
    //     $(this).removeClass('open');
    //   });
    // });

//End Document Ready
});
