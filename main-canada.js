$("path, circle").hover(function(e) {
  $('#canada-box').css('display','block');
  $('#canada-box').html($(this).data('info'));
});

$("path, circle").mouseleave(function(e) {
  $('#canada-box').css('display','none');
});

$(document).mousemove(function(e) {
  $('#canada-box').css('top',e.pageY-$('#canada-box').height()-30);
  $('#canada-box').css('left',e.pageX-($('#canada-box').width())/2);
}).mouseover();

var ios = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
if(ios) {
  $('a').on('click touchend', function() {
    var link = $(this).attr('href');
    window.open(link,'_blank');
    return false;
  });
}
