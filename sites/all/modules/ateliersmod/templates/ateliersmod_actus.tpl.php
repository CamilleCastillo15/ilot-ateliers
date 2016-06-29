<?php

    $base = base_path();
    $ftitle = field_view_field("node",$node,'field_title');
    $picto = field_view_field("node",$node,'field_picto');
    $img = field_view_field("node",$node,'field_image');

    $body = field_view_field("node",$node,'body');
    $gallerie = field_get_items("node",$node,'field_image_multi');
    $couleur = field_get_items("node",$node,'field_couleur')[0]['rgb'];

    dpm($couleur);

    drupal_add_css('.atelier-color .wtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');
    drupal_add_css('.offres-speciales .triangle-left,.offres-speciales .triangle-right{border-bottom-color:'.$couleur.' !important;} ', 'inline');
    drupal_add_css('.pager__item--current{background-color:#00a886;} ', 'inline');

    drupal_add_css('.actus .views-field-view-node:hover{background-color:'.$couleur.' !important; border: 2px solid '.$couleur.' !important;} ', 'inline');

    $lservice = drupal_get_path_alias("node/".$node->nid);
    $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ;

?>

<div class="offres-speciales">

    <div class="atelier-header pictotitlecontainer">

        <div class="atelier-header-bg image">

            <?php print render($img); ?>

        </div>

        <div class="picto pictotitle">

            <?php print render($picto); ?>

        </div>

        <div class="title">

            <?php print render($ftitle); ?>

        </div>

        <div class="triangles">
            <div class="triangle-left"></div><!--
         --><div class="triangle-right"></div>
        </div>
        <div class="atelier-liens">                
            <div class="services-lien">
                   <?php print l("service" ,$lservice  , array("html"=>true, 'attributes' => array('class' => array('services')))); ?>
               </div><!--
                --><div class="actualites-lien">
                    <?php print l("actualités",$lservice."/actus" , array("html"=>true, 'attributes' => array('class' => array('actualites', 'active')))); ?>
                </div>

        <div class="atelier-liens">

           <div class="services-lien">
               <?php print l("service" ,$lservice  , array("html"=>true, 'attributes' => array('class' => array('services')))); ?>
           </div><!--
         --><div class="actualites-lien">
                <?php print l("actualités",$lservice."/actus" , array("html"=>true, 'attributes' => array('class' => array('actualites', 'active')))); ?>
            </div>

        </div>

    </div>

    <div class="bloc-grille-base-offres">

        <?php print $view; ?>

    </div>

</div>
