$(function(){
    var carousel_item = $('.carousel-item').eq(0);

    if (!carousel_item.hasClass('active')) {
        carousel_item.addClass('active');
    }

    $('body').click(function(){
        $('.view-image-passeio').fadeOut();
    });

    $('.box-image').find('img').click(function(e){
        e.stopPropagation();
    });

    $('.close-img-max').click(function(){
        $('.view-image-passeio').fadeOut();
    });

    $('.owl-carousel').owlCarousel({
        center: true,
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            600:{
                items:4.5
            },
            1000:{
                items:6.5
            }
        }
    });

    $('.item').find('img').click(function(){
        let urlImage = $(this).attr('src');

        $('.box-image').find('img').attr('src', urlImage);

        if ($('.image-header').length == 0) {
            $('.view-image-passeio').fadeIn();
        }

        return false;
    });
})
