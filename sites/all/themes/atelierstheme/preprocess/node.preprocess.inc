<?php function atelierstheme_preprocess_node(&$var) {
        $theme_path = drupal_get_path('theme', 'atelierstheme');
        switch($var["type"]) {
            case "atelier" :
                drupal_add_js($theme_path."/js/Swiper/dist/js/swiper.jquery.min.js");
                drupal_add_js($theme_path."/js/atelierstheme.swiper.js");
            break;
            case "actu" :
                drupal_add_js("(function(d, s, id) {
                       var js, fjs = d.getElementsByTagName(s)[0];
                       if (d.getElementById(id)) return;
                       js = d.createElement(s); js.id = id;
                       js.src = '//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.6';
                       fjs.parentNode.insertBefore(js, fjs);
	               }(document, 'script', 'facebook-jssdk'));","inline");
                
            break;     
            case "offre_speciale" :
                drupal_add_js($theme_path."/js/Swiper/dist/js/swiper.jquery.min.js");
                drupal_add_js($theme_path."/js/atelierstheme.swiper.js");
            break;     
            case "home" :                
                drupal_add_js($theme_path."/js/Swiper/dist/js/swiper.jquery.min.js");
                drupal_add_js($theme_path."/js/atelierstheme.home.js");
                
            break;
        }
    }
?>


