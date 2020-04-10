
(function ($) {

    var $window = $(window),
            $body = $('body');

    // Breakpoints.
    breakpoints({
        wide: ['1281px', '1680px'],
        normal: ['1001px', '1280px'],
        narrow: ['737px', '1000px'],
        mobile: [null, '736px']
    });

    // Play initial animations on page load.
    $window.on('load', function () {
        window.setTimeout(function () {
            $body.removeClass('is-preload');
        }, 100);
    });

    // Scrolly.
    $('.scrolly').scrolly();

})(jQuery);

$('.navbar-nav li a').on('click', function () {
    if ($(this).attr('id') !== "navbarDropdown") {
        $('.navbar-collapse').collapse('hide');

    }
});

$('#veInicio').click(function (e) {
    e.preventDefault();

    //document.body.scrollTop = 0; // For Safari
    //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    $('html').animate({scrollTop: $('#inicio').offset().top}, 500, 'swing');


    return false;

});

$('#veEmpresa').click(function (e) {
    e.preventDefault();

    //document.body.scrollTop = 0; // For Safari
    //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    $('html').animate({scrollTop: $('#empresa').offset().top}, 500, 'swing');


    return false;

});

$('#veProyectos').click(function (e) {
    e.preventDefault();

    //document.body.scrollTop = 0; // For Safari
    //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    $('html').animate({scrollTop: $('#proyectos').offset().top}, 500, 'swing');


    return false;

});

$('#veEquipo').click(function (e) {
    e.preventDefault();

    //document.body.scrollTop = 0; // For Safari
    //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    $('html').animate({scrollTop: $('#equipo').offset().top}, 500, 'swing');


    return false;

});

$('#veContacto').click(function (e) {
    e.preventDefault();

    //document.body.scrollTop = 0; // For Safari
    //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    $('html').animate({scrollTop: $('#contacto').offset().top}, 500, 'swing');


    return false;

});