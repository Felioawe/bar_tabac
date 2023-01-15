
$(function openBurger() {
    $('.butBurger').click(function() {
        
      $('.burger').toggleClass('openBurger');
      $(this).toggleClass('animation');
    });
  });