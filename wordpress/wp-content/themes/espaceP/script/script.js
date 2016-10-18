
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
  
  $('.js-scrollTo').on('click', function() { // Au clic sur un élément
  var page = $(this).attr('href'); // Page cible
  var speed = 750; // Durée de l'animation (en ms)
  $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
  return false;
});
});


(function($) {



  $('#sticky').scrollToFixed({ limit: $($('.actuality__article h3')[2]).offset().top });
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
