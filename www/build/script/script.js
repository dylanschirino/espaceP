$(document).ready(function(){

    (function($) {

      //Aside fixe

        if ( $(window).width() > 1231) {
          $('#sticky').scrollToFixed({ limit: $($('.actuality__article h3')[1]).offset().top });
      }
      else{
        $(window).resize(function(){
          $('aside').addClass('no-sticky');
          $('.no-sticky').trigger('resize');
        });
      }


        // Menu burger

        $('#header__burger').click(function(e){
            e.preventDefault();
            $('body').toggleClass('with--sidebar');
        });

    $('#site-cache').click(function(e){
      $('body').removeClass('with--sidebar');
    });

    })(jQuery);
  });
