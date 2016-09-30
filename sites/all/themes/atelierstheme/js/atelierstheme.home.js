(function ($) {

    Drupal.behaviors.ateliersthemeHome = {

    attach: function (context, settings) {
        $(window).on("resize",function(){
            if($(this).width() < 768){
                $(".block-all").css("height",$(this).height());
            }else{
                $(".block-all").css("height","auto");

            }

        });
        var swiper = new Swiper('.block-all.swiper-container', {
          speed:1000,
            effect:"fade",
            spaceBetween: 0,
            autoplay : 5000

        });
         var swiper2 = new Swiper('.home-body-actu.swiper-container', {
           speed:1000,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 30,
            autoplay : 10000

        });

    }

};

})(jQuery);
