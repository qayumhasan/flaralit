
$("#hide_collups").click(function () {
    $(".lwptoc_items-visible").toggle('slow');
});



// details page scroll  start
$(window).scroll(function () {
    if ($(window).scrollTop() >= 260) {
        $('.static_sidebar').addClass('static_sidebar_css');
    }
    else {
        $('.static_sidebar').removeClass('static_sidebar_css');

    }
    var scroll = $(window).scrollTop();
    var pageHeight = $(document).height();
    var percent = scroll / pageHeight * 100;

    if (percent >= 90) {
        $('.static_sidebar').addClass('static_sidebar_margin');
        $('body').css('position', 'relative');
    } else {
        $('.static_sidebar').removeClass('static_sidebar_margin');
    }
});
// details page scroll end 




$(window).scroll(function () {

    if ($(window).scrollTop() >= 1150) {
        $('.static_sidebar2').addClass('static_sidebar_css');
    }
    else {
        $('.static_sidebar2').removeClass('static_sidebar_css');

    }


});



