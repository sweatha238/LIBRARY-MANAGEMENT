$(document).ready(function(){
    $('autowidth').lightslider({
        autowidth:true,
        loop:true,
        onSliderLoad: function(){
            $('@autowidth').removeClass('cS-hidden');
        }
    });
});
      