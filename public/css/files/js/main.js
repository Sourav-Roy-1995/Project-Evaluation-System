(function ($) {
    "use strict";
    
    //*-------faq tab active class remove------
    $(".general .nav li").on("click", function () {
        $(".installation .nav li>a").removeClass("active");
    });
    $(".installation .nav li").on("click", function () {
        $(".general .nav li>a").removeClass("active");
    });


    /*-------nice select-----*/
    $('select').niceSelect();

    //--------Scroll Top---------
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.scroll_top').fadeIn();
            $('.scroll_top').removeClass('not_visible');
        } else {
            $('.scroll_top').fadeOut();
        }
    });
    $('.scroll_top').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });


}(jQuery));
