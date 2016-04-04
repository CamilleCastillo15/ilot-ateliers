  $image = field_get_items("node",$node,'field_image');<?php 

    $styles  = drupal_get_css();

    $body_actu = field_view_field("node",$node,'field_body_actu');
    $body = field_view_field("node",$node,'field_body_actu');

    $gallerie = field_get_items("node",$node,'field_image_multi');
    $image = field_get_items("node",$node,'field_image');

    $view = views_get_view('actus');

    $view->set_display('blockhome');
    
    $view->execute();

    $result = $view->result;

    dpm($result);
   

 ?>
       
        <?php $theme = drupal_get_path("theme",$GLOBALS['theme']) ;?>
          
          <?php //print $styles; ?>

       <header class="l-header">
        <div class="burger h">
            <svg x="0px" y="0px" viewBox="0 0 108.15 65.812498" width="100%" height="100%">
                <g id="Calque_1" transform="matrix(2,0,0,2,-0.6,-2.2500009)" style="stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none">
                    <g id="g8" style="stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none">
                        <rect x="37.099998" y="20.4" id="burger_1" class="st1" width="11.8" height="0.80000001" id="rect18" style="fill:black;stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none" />
                        <rect x="37.099998" y="16.5" id="burger_2" class="st1" width="11.8" height="0.80000001" id="rect20" style="fill:black;stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none" />
                        <rect x="37.099998" y="24.4" id="burger_3" class="st1" width="11.8" height="0.80000001" id="rect22" style="fill:black;stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none" />
                    </g>
                </g>
            </svg>
        </div>
        
         <img class="header-img" src="../<?php print $theme; ?>/images/u44.png" alt="header" title="header" />
        
          <img class="logo-img" src="../<?php print $theme; ?>/images/logo.png" alt="logo" title="logo" />
           
           <div class="block-w">
            
            <h2 class="title-bienvenue">Bienvenue aux <br />ateliers de l'îlot! </h2>
            
            
            <p class="par-bienvenue">
                
                Les Ateliers l'îlot permettent à des <br />
                personnes très éloignées de l'emploi de <br />
                travailler et de se réinsérer
                
            </p>
            
                <img class="picto_ateliers atelier_bleu" src="../<?php print $theme; ?>/images/picto_atelier_bleu.png" alt="MerdegLayers" />


                <img class="picto_ateliers menuiserie" src="../<?php print $theme; ?>/images/picto_menuiserie.png" alt="MerdegLayers" />


                <img class="picto_ateliers cuisine" src="../<?php print $theme; ?>/images/picto_cuisine.png" alt="MerdegLayers" />
            
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
            
        </div>
        
    </header>
    
    <div class="home-body-actu">
       <?php 
        
         foreach($result as $key => $value){ ?>
               <div class="actu"> <?php
                
                $n = node_load($value->nid);
                $im = field_view_field("node",$n,'field_image');
                print render($im);
                dpm($n); ?>
                </div>
        <?php    }?>

     
    </div>


           
    <div class="home-image-solidarite">
            <?php print render($image); ?>
    </div>

           
