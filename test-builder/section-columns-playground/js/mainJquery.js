// Toggle Rows
$('.sectionStyle--rowHead').each(function(){
  $(this).click(function() {
      $(this).parent().toggleClass("isOpen");
    });
 });

 // Panel Close X
 $('.paneSection__close').click(function() {
  //  if('.builderScreen').hasClass('layoutPane-isOpen') {
  //   //  $('.builderScreen').removeClass('widgetsPane-isOpen layoutPane-isOpen pageStylesPane-isOpen seoPane-isOpen');
  //   $('.paneSection__close').addClass('here');
  //  }
  //  else {
  //      $('.paneSection__close').addClass('here');
  //  }
   $('.builderScreen').removeClass('widgetsPane-isOpen layoutPane-isOpen pageStylesPane-isOpen seoPane-isOpen');
 });

// Hidden Top Navigation
// Hide Header on on scroll down
// var didScroll;
// var lastScrollTop = 0;
// var delta = 5;
// var navbarHeight = $('.builderHeader').outerHeight();
//
// $(window).scroll(function(event){
//     didScroll = true;
// });
//
// setInterval(function() {
//     if (didScroll) {
//         hasScrolled();
//         didScroll = false;
//     }
// }, 250);
//
// function hasScrolled() {
//     var st = $(this).scrollTop();
//
//     // Make sure they scroll more than delta
//     if(Math.abs(lastScrollTop - st) <= delta)
//         return;
//
//     // If they scrolled down and are past the navbar, add class .nav-up.
//     // This is necessary so you never see what is "behind" the navbar.
//     if (st > lastScrollTop && st > navbarHeight){
//         // Scroll Down
//         $('.builderHeader').addClass('builderHeader--hidden');
//     } else {
//         // Scroll Up
//         if(st + $(window).height() < $(document).height()) {
//             $('.builderHeader').removeClass('builderHeader--hidden');
//         }
//     }
//
//     lastScrollTop = st;
// }
