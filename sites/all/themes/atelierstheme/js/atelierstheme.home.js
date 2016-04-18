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
        
    }

};

})(jQuery);
