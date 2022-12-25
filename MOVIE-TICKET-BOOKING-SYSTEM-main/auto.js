$(document).ready(function() {
    $('#auto').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#auto').removeClass('cS-hidden');
        } 
    });  
  });