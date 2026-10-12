// Barts html5 starter kit
jQuery(document).ready(function ($) {
    
    
    
//$('#site-navigation').hide();
$('.menu-toggle').click(function(){
    if( $(this).hasClass('open')){

         $('.main-navigation ul').removeClass('toggled');
        $(this).removeClass('open');   
    }else{
   
        $('.main-navigation ul').addClass('toggled');
       $(this).addClass('open'); 
    }
});
    
 $('.main-navigation ul a').click(function(){
     $('.main-navigation ul').removeClass('toggled');
        $(this).removeClass('open');  
     
 });
var selector = '.activelinks a';
$(selector).on('click', function(){
    $(selector).removeClass('triggered');
    $(this).addClass('triggered');
});
    
$(function() {
    //caches a jQuery object containing the header element
    var header = $("#page");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
});
    
    $('.closeBox').click(function(e){
        e.preventDefault();
        $(this).parents('.popupBox').hide();
    });
    $('.lightbox').click(function(){
        var person = $(this).attr('id');
        $('.'+person).show();
    });
    $('.autoplaySlick').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: false,
        dots: true,
        adaptiveHeight: true,
  autoplaySpeed: 2000,
         responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    
    
      $('.et_pb_toggle_title').click(function(){
    var $toggle = $(this).closest('.et_pb_toggle');
    if (!$toggle.hasClass('et_pb_accordion_toggling')) {
      var $accordion = $toggle.closest('.et_pb_accordion');
      if ($toggle.hasClass('et_pb_toggle_open')) {
        $accordion.addClass('et_pb_accordion_toggling');
        $toggle.find('.et_pb_toggle_content').slideToggle(700, function() { 
          $toggle.removeClass('et_pb_toggle_open').addClass('et_pb_toggle_close'); 
					
        });
      }
      setTimeout(function(){ 
        $accordion.removeClass('et_pb_accordion_toggling'); 
      }, 750);
    }
  });
//colorbox

    
//  $('.lightbox').colorbox({maxWidth:'80%', maxHeight:'100%', scrolling:false, href:function(){
//     var url = $(this).find('.et_pb_member_position').text();
//                       return url;
//                       }});  

//       jQuery('.hoverUnder').mouseenter(function(){
//            var windowWidth = $(window).width();
//    windowWidth >= 980 ? (pc = !0, tablet = !1, phone = !1) : 480 >= windowWidth ? (pc = !1, tablet = !1, phone = !0) : (pc = !1, tablet = !0, phone = !1);
//           if(pc){
//  jQuery(this).siblings('.hover').animate({
//    top: 0
//  }, 300, function() {
//   jQuery('.hover').mouseleave(function(){
//      jQuery(this).animate({
//        top: '81%'
//      }, 100, function() {
//        // Animation complete.
//      });
//    });
//  });
//           };
});
    


