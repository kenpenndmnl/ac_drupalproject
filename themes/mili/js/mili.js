/* Load jQuery.
------------------------------------------------*/
jQuery(document).ready(function ($) {

  // Mobile menu.
  $('.mobile-menu').click(function () {
    $(this).next('.primary-menu-wrapper').toggleClass('active-menu');
  });
  $('.close-mobile-menu').click(function () {
    $(this).closest('.primary-menu-wrapper').toggleClass('active-menu');
  });

  // Full page search.
  $('.search-icon').on('click', function() {
    $('.search-box').addClass('open');
    return false;
  });

  $('.search-box-close').on('click', function() {
    $('.search-box').removeClass('open');
    return false;
  });

  // Full Screen header.
  function fullscreen() {
  	$('.frontpage.homepage .header').css({
  		height: $(window).height()
  	});
    var headerheight = $('.header-main').outerHeight();
    $('.slider').css({ height: $(window).height() - headerheight })
  }
  fullscreen();
  $(window).resize(function () {
  	fullscreen();
  });

  // Scroll To Top.
  $(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
      $('.scrolltop').fadeIn('slow');
    } else {
      $('.scrolltop').fadeOut('slow');
    }
  });
  $('.scrolltop').click(function () {
    $('html, body').animate( { scrollTop: 0 }, 'slow');
  });

// End document ready.
});