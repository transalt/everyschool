


// adds background to make nav bar legible further down the page

jQuery(function(){
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > 100){
            $('#site-navigation').addClass('nav-bg');
        } else if (scroll < 100){
              $('#site-navigation').removeClass('nav-bg');
          }

    });
});


// jQuery for page scrolling feature - requires jQuery Easing plugin
jQuery(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });
    $('.menu-item a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
    });



});

// initialize scrollspy
jQuery(function() {
$("#primary-menu").scrollspy({ offset: -75 });
});
