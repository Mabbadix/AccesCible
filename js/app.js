  $('#header__icon').click(function(e){
    e.preventDefault();
    $('body').toggleClass('with--sidebar');
  });
  
  $('#site-cache').click(function(e){
    $('body').removeClass('with--sidebar');
    $('#hamburger').removeClass('is-active');
  });