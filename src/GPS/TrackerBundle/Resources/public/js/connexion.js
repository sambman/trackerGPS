$('.toggle').on('click', function() {
  $('.containerConn').stop().addClass('active');
});

$('.close').on('click', function() {
  $('.containerConn').stop().removeClass('active');
});
