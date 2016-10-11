
$(document).ready(function(){
  // Menu burger
  (function($){

  })(jQuery);
  $('#header__burger').click(function(e){
    e.preventDefault();
    $('body').toggleClass('with--sidebar');
  });

  $('#site-cache').click(function(e){
    $('body').removeClass('with--sidebar');
  });
});


(function($) {



  $('#sticky').scrollToFixed({ limit: $($('.actuality__article h3')[1]).offset().top });
  //Aside fixe
  $(window).on('resize', function(){
    if ( $(window).width() < 1251) {
      //$.ScrollToFixed=null;
      $('aside').trigger('detach.ScrollToFixed');
      $('body').addClass('no-sticky')
    }
    else{
      $('aside').attr('id',"sticky");
      $('body').removeClass('no-sticky');
      $('#sticky').scrollToFixed({ limit: $($('.actuality__article h3')[1]).offset().top });
    }
  });


})(jQuery);
