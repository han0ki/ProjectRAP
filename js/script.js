
       $(".button-collapse").sideNav();

 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, {'height' : 400});
  });
  // Or with jQuery

  $(document).ready(function(){
    $('.slider').slider();
  });

