<?php function atelierstheme_preprocess_node(&$var) {
        $theme_path = drupal_get_path('theme', 'atelierstheme');
        switch($var["type"]) {
            case "atelier" :
                drupal_add_js($theme_path."/js/Swiper/dist/js/swiper.jquery.min.js");
                drupal_add_js($theme_path."/js/atelierstheme.swiper.js");
            break;
            
          
        }
    }

?>