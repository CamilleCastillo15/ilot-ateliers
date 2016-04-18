(function ($) {


  Drupal.behaviors.ateliers_mod_mapBehavior = {
    attach: function (context, settings) {

        var mobile = (navigator.userAgent.match(/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i) ? true : false );
        var clickmethod = mobile ? "touchstart" : "click";
        var doc = $(document);
        var win = $(window);
        function initMap() {

            var mapDiv = document.getElementById('map');
            var map = new google.maps.Map(mapDiv, {
                center: {
                    lat: 44.540,
                    lng: -78.546},
                zoom: 8
            });
        }
        initMap();

        //$(window).trigger("resize");
    }
  };

})(jQuery);
