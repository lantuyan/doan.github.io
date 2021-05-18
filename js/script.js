// JavaScript Document
//  $(document).ready(function() {
//     $('#autoWidth').lightSlider({
//         autoWidth:true,
//         loop:true,
//         onSliderLoad: function() {
//             $('#autoWidth').removeClass('cS-hidden');
//         } 
//     });  
//   });
    
 $(document).ready(function() {
    var slider = $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        // auto:true,
        slideMargin:3,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });

    $('#goToPrevSlide').click(function(){
        slider.goToPrevSlide(); 
    });
    $('#goToNextSlide').click(function(){
        slider.goToNextSlide(); 
    });
  });
  
  