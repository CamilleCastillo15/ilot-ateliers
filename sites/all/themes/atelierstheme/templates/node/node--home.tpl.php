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
            <svg id="Calque_1" data-name="Calque 1" viewBox="0 0 55.4 55.4">
                <circle class="cls-1" cx="27.7" cy="27.7" r="27.7"/>
                <path class="cls-2" id="burger_1"
                d="M31,33H2.7a1.06,1.06,0,0,0,0,2H31a0.85,0.85,0,0,0,.7-1C31.7,33.4,31.5,33,31,33Z"
                transform="translate(10.8 5.7)"/>
                <path class="cls-2" id="burger_2"
                d="M2.7,11H31a0.85,0.85,0,0,0,.7-1c0-.6-0.2-1-0.7-1H2.7A0.85,0.85,0,0,0,2,10,0.85,0.85,0,0,0,2.7,11Z" transform="translate(10.8 5.7)"/>
                <path class="cls-2" id="burger_3"
                d="M31,21H2.7A0.85,0.85,0,0,0,2,22a0.85,0.85,0,0,0,.7,1H31a0.85,0.85,0,0,0,.7-1C31.7,21.4,31.5,21,31,21Z" transform="translate(10.8 5.7)"/>
            </svg>
        </div>
        
        <div class="menu-web"></div>
        
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

           
