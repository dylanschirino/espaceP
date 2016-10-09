$(document).ready(function(){

    (function($) {

      //Aside fixe
      $(window).on('resize', function(){
        if ( $(window).width() > 1231) {
          $('aside').css({"float":"none"});
          $('aside').css({"display":"block"});
          $('aside').css({"position":"static"});
          $('.no-sticky').trigger('resize');
      }
      else{
        $('#sticky').scrollToFixed({ limit: $($('.actuality__article h3')[1]).offset().top });
      }
    });

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
