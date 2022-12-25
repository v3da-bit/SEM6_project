$(document).ready(function() {
    $('#aus').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#aus').removeClass('cS-hidden');
        } 
    });  
  });