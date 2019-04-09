
       $(".button-collapse").sideNav();

 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, {'height' : 400});
  });
  // Or with jQuery

  $(document).ready(function(){
    $('.slider').slider();
  });

$('a[href^="#glav"]').bind('click.smoothscroll',function (e) {
e.preventDefault();

var target = this.hash,
$target = $(target);

$('html, body').stop().animate({
'scrollTop': $target.offset().top
}, 1500, 'swing', function () {
window.location.hash = target;
});
});