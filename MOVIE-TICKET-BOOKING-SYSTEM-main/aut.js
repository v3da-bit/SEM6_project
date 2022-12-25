$(document).ready(function() {
    $('#aut').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#aut').removeClass('cS-hidden');
        } 
    });  
  });