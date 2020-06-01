$(function(){
  $('.imagers').click(function(event) {
    var i_path = $(this).attr('src');
    $('body').append('<div id="overlay"></div><div id="close-popup"><div id="magnify"><img src="'+i_path+'"></div></div></div>');
    if ((window.innerWidth || screen.availWidth) < 768) {
        $('#magnify img').css({width: $(window).width() - 36});
    } else {
        $('#magnify img').css({height: $(window).height() - 26});
    }
    $('#overlay, #magnify').fadeIn('fast');
  });
  
  $('body').on('click', '#close-popup, #overlay', function(event) {
    event.preventDefault();

    $('#overlay, #magnify').fadeOut('fast', function() {
      $('#close-popup, #magnify, #overlay').remove();
    });
  });
});
