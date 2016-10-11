$(document).ready(function(){

    (function($) {

      $('#sticky').scrollToFixed({ limit: $($('.actuality__article h3')[1]).offset().top });
      //Aside fixe
      $(window).on('resize', function(){
        if ( $(window).width() < 1231) {
          $('aside').css({"display":"none"});
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
