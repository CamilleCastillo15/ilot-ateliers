(function ($) {


  Drupal.behaviors.masBehavior = {
    attach: function (context, settings) {

        var mobile = (navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i) ? true : false );
        var clickmethod = mobile ? "touchstart" : "click";
        var doc = $(document);
        var win = $(window);

        //$(window).trigger("resize");
    }
  };

})(jQuery);
