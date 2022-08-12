jQuery(function($) {
    $('.hamburger_menu').click(function (e) { 
        e.preventDefault();
        $('nav ul.menu').animate({
            right: 0,
        });
        $('nav .close_btn, .transparent_bg').fadeIn();
    });

    $('nav .close_btn, .transparent_bg').click(function (e) {
        e.preventDefault();
        $('nav ul.menu').animate({
            right: -250,
        });
        $('nav .close_btn, .transparent_bg').fadeOut();
    });
});