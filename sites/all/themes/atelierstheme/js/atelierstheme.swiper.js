(function ($) {
    Drupal.behaviors.ateliersthemeSwiper = {
    attach: function (context, settings) {
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 30,
            autoHeight:true,
            height:1000,
            autoplay : 2000
        });
        $(".atelier-gallerie-image").on("click",function(){
            swiper.slideTo($(this).data("id"));
        })
    }
  };
})(jQuery);
