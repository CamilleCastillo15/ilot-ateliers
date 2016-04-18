<?php

    $styles  = drupal_get_css();

    $body_actu = field_view_field("node",$node,'field_body_actu');
    $body = field_view_field("node",$node,'field_body');

    $gallerie = field_get_items("node",$node,'field_image_multi');
    $image = field_view_field("node",$node,'field_image');
    $body = field_view_field("node",$node,'field_body');

    $view = views_get_view('offres_speciales');
    $view->set_display('blockhome');
    $view->execute();

    $result = $view->result;

    $view_ateliers = views_get_view('ateliers');
    $view_ateliers->execute();

    $result_ateliers = $view_ateliers->result;

    $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ;

 ?>
       
    <?php //$theme = drupal_get_path("theme",$GLOBALS['theme']) ;?>
          
        <?php //print $styles; ?>
        
         <img class="header-img-mobile" src="<?php print $theme; ?>/images/bkg_home_mobile.png" alt="header" title="header" />
         
         <img class="header-img-web" src="<?php print $theme; ?>/images/bkg_home_web.png" alt="header" title="header" />
        
         <img class="logo-img" src="<?php print $theme; ?>/images/logo.png" alt="logo" title="logo" />
           
    <div class="block-w">

        <h2 class="title-bienvenue">Bienvenue aux ateliers de l'îlot! </h2>


        <p class="par-bienvenue">

            Les Ateliers l'îlot permettent à des <br />
            personnes très éloignées de l'emploi de <br />
            travailler et de se réinsérer

        </p>

            
            <?php 
        
                foreach($result_ateliers as $key => $value) {

                      $n = node_load($value->nid);

                      $link =drupal_get_path_alias("node/".$value->nid);
                      $picto = field_view_field("node",$n,'field_picto');
                      $title = field_view_field("node",$n,'field_title');
                      $class = field_view_field("node",$n,'field_class');

                      $title_render = render($title);
                      $class_render = render($class);
                      $picto_render = render($picto);

                      print l($picto_render, $link,array("html"=>true, 'attributes' => array('class' => array('picto_ateliers', $class_render))));
                      $title_render = render($title);

                      // print l($picto_render,$link,array("html"=>true, 'attributes' => array('class' => array('plus'))));

                }
        
                echo "<div class=\"container-title-pictos\">";
        
                    foreach($result_ateliers as $key => $value) {

                      $n = node_load($value->nid);

                      $link =drupal_get_path_alias("node/".$value->nid);
                      $title = field_view_field("node",$n,'field_title');
                      $class = field_view_field("node",$n,'field_class');

                      $title_render = render($title);
                      $class_render = render($class);;

                            echo "<p class=\"title-pictos ".$class_render."\">";
                                print l($title_render, $link,array("html"=>true, 'attributes' => array('class' => array('picto_ateliers'))));
                            echo "</p>";

                    }
        
                echo "</div>";
        
        
        ?>

    </div>
        
    <div class="home-body-actu swiper-container">

         <div class="swiper-wrapper">

               <?php

                 foreach($result as $key => $value) { ?>

                    <div class="actu actu-gallerie-images swiper-slide">

                           <?php

                                    $n = node_load($value->nid);
                                    $im_offres = field_view_field("node",$n,'field_image');
                                    $title_offres = field_view_field("node",$n,'field_title');
                                    $body_offres = field_view_field("node",$n,'body');

                            ?>

                         <div class="text-presentation body_offres ">

                            <?php

                                echo "<h1>";
                                    print render($title_offres);
                                echo "</h1>";

                                print render($body_offres);
                            ?>

                            <div class="en_savoir_plus">

                                En savoir plus

                                <img class="f_g_droite" src="<?php print $theme ?>/images/f_blanches/f_droite.svg" alt="logo" title="logo" />

                            </div>

                        </div>

                        <div class="im_offres">

                            <?php

                               print render($im_offres);

                            ?>

                        </div>

                    </div>

                <?php    } ?>

            </div>

        <div class="swiper-pagination"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

<div class="text-presentation home-body-solidarite">

    <div class="body_solidarite">

        <?php

            print render($body);
        ?>

        <div class="en_savoir_plus">

            En savoir plus

            <img class="f_g_droite" src="<?php print $theme ?>/images/f_noires/f_g_droite.svg" alt="logo" title="logo" />

        </div>

    </div>

    <div class="image_solidarite">

            <?php print render($image); ?>

    </div>

</div>

           
