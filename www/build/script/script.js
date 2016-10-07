$(document).ready(function(){

    (function($) {

      var $button  = $("#button"),
          $window    = $(window),
          offset     = $button.offset(),
          topPadding = 15;

        $('#header__burger').click(function(e){
            e.preventDefault();
            $('body').toggleClass('with--sidebar');
        });

    $('#site-cache').click(function(e){
      $('body').removeClass('with--sidebar');
    });


    $window.scroll(function() {
        if ($window.scrollTop() > offset.bottom) {
            $button.stop().animate({
                marginTop: $window.scrollTop() - offset.bottom + topPadding
            });
        } else {
            $button.stop().animate({
                marginTop: 0
            });
        }
    });

    })(jQuery);
  });
