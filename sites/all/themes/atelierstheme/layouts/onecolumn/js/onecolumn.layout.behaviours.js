(function ($) {


  Drupal.behaviors.burgerBehavior = {
    attach: function (context, settings) {
        var mobile = (navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i) ? true : false );
        var clickmethod = mobile ? "touchstart" : "click";
        var doc = $(document);
        var win = $(window);

        function closeMenu(){
            $(".l-shield").removeClass("open");
            $(".l-off").removeClass("open");
            $("li",".l-off").removeClass("open");
        }
        function close(obj){
            $(obj).removeClass("open");
        }
        // apparition/disparition menu mobile
        $(".burger").on(clickmethod, function(){
            $(".l-off, .l-shield").toggleClass("open");
            $("li",".l-off").toggleClass("open");
        });
        $(".l-shield,.close").on(clickmethod,function(){
                closeMenu();
        });
        $("li",".l-off").each(function(c){
            $(this).css("transition-delay",(100+(50*c))+"ms");
        });
        $(window).resize(function(){
           closeMenu();
        });
        //$(window).trigger("resize");
    }
  };

})(jQuery);
