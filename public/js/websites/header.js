if($(window).width() >= 992 ){
    $('#navbar_main').removeClass('mobile-offcanvas');
    $('#ul').removeClass('navbar-nav ');
}
$(document).ready(function() {

    $("[data-trigger]").on("click", function(e){
        e.preventDefault();
        e.stopPropagation();
        var offcanvas_id =  $(this).attr('data-trigger');
        $(offcanvas_id).toggleClass("show");
        $('body').toggleClass("offcanvas-active");
        $(".screen-overlay").toggleClass("show");
    }); 

    $(".btn-close, .screen-overlay").click(function(e){
        $(".screen-overlay").removeClass("show");
        $(".mobile-offcanvas").removeClass("show");
        $(".contact-mobile").removeClass("show");
        $("body").removeClass("offcanvas-active");

    }); 

});

/**
 * Add and rmove class when the user scroll base on given the id .
 * @param [Html_ID_Name] bordyHeight
 * @param [Html_ID_Name] navbarId
 * @return void
 */
function onPageScrollChangeNavbarColor(bordyHeight, navbarId) {
    var scroll_start = 0;
    var startchange = $(bordyHeight);
    var offset = startchange.offset();
    if (startchange.length){
        $(document).on('scroll', function() { 
            scroll_start = $(this).scrollTop();
            if(scroll_start > offset.top) {
                $(navbarId).addClass('applayHeaderColor');
            } else{
                $(navbarId).removeClass('applayHeaderColor');
            }
        });
    }
}