$(document).ready(function(){
  $('img').mouseover(function(){
    $(this).addClass('imgjq');
  });
  $('img').mouseleave(function(){
    $(this).removeClass('imgjq');
  });
});
var main = function() {
$('.img').click(function() {
  $('.leftmenu').animate({
    left: '0px'
  }, 200);

  $('body').animate({
    left: '26em'
  }, 200);

  $('.close').click(function(){
    $('.leftmenu').animate({
        left: '-26em'
    }, 200);
    $('body').animate({
        left: '0'
    }, 200);
  });
});
};
$(document).ready(main)
