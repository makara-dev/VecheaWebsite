onPageScrollChangeNavbarColor('#body','#header');

$(document).ready(function() {
    if($(window).width() >= 992){
        addClass('.addcontainer', 'container');
        addClass('.addcard', 'card');
        removeClass('.remove-backgroup', 'backgroup-mobile');
        $(".addcard").on('click' ,function () {
        $(".addcard").removeClass("active");
        $(this).addClass("active");
        // if($(".addcard").hasClass('active')){
        //     $("#cradit-card").attr('src', 'images/payment/credit-card-white.png');
        // }
    });
    }else{
        $(".remove-backgroup").on('click' ,function () {
        $(".remove-backgroup").removeClass("active");
        $(this).addClass("active");   
    });
    }

});

