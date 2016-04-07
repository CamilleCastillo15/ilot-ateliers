<?php

    $styles  = drupal_get_css();

    $body_actu = field_view_field("node",$node,'field_body_actu');
    $body = field_view_field("node",$node,'field_body_actu');

    $gallerie = field_get_items("node",$node,'field_image_multi');
    $image = field_get_items("node",$node,'field_image');

    $view = views_get_view('actus');
    $view->set_display('blockhome');
    $view->execute();

    $result = $view->result;

    $view_ateliers = views_get_view('ateliers');
    $view_ateliers->execute();

    $result_ateliers = $view_ateliers->result;

 ?>
       
    <?php $theme = drupal_get_path("theme",$GLOBALS['theme']) ;?>
          
        <?php //print $styles; ?>
        
         <img class="header-img-mobile" src="../<?php print $theme; ?>/images/bkg_home_mobile.png" alt="header" title="header" />
         <img class="header-img-web" src="../<?php print $theme; ?>/images/bkg_home_web.png" alt="header" title="header" />
        
          <img class="logo-img" src="../<?php print $theme; ?>/images/logo.png" alt="logo" title="logo" />
           
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
        
        
              /*

                    <img class="picto_ateliers atelier_bleu" src="../<?php print $theme; ?>/images/auto_bleue_logo.svg" alt="MerdegLayers" />
                    <img class="picto_ateliers menuiserie" src="../<?php print $theme; ?>/images/menuiserie_logo.svg" alt="MerdegLayers" />
                    <img class="picto_ateliers cuisine" src="../<?php print $theme; ?>/images/ilot_gourmand_logo.svg" alt="MerdegLayers" />

                <br />

                <div class="container-title-pictos">

                    <p class="title-pictos auto_bleue">

                        auto bleue

                    </p>

                     <p class="title-pictos menuiserie">

                        La menuiserie

                    </p>

                    <p class="title-pictos ilot_gourmand">

                        L'ilôt gourmand

                    </p>

                </div>

            */
        
        ?>

    </div>
        
    <div class="home-body-actu">
       <?php 
        
         foreach($result as $key => $value){ ?>
               <div class="actu"> <?php
                
                $n = node_load($value->nid);
                $im = field_view_field("node",$n,'field_image');
                print render($im);
                 ?>
                </div>
        <?php    }?>

     
    </div>

    <div class="home-image-solidarite">
            <?php print render($image); ?>
    </div>

           
