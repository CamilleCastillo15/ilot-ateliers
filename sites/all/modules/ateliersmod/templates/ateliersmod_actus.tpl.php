<?php

    $base = base_path();
    $ftitle = field_view_field("node",$node,'field_title');
    $picto = field_view_field("node",$node,'field_picto');
    $img = field_view_field("node",$node,'field_image');

    $body = field_view_field("node",$node,'body');
    $gallerie = field_get_items("node",$node,'field_image_multi');
    $couleur = field_get_items("node",$node,'field_couleur')[0]['rgb'];

    drupal_add_css('.atelier-color .wtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');
    drupal_add_css('.triangle-left,.triangle-right{border-bottom-color:'.$couleur.';} ', 'inline');
    drupal_add_css('.pager__item--current{background-color:'.$couleur.';} ', 'inline');
    drupal_add_css('.actus{border-bottom: 3px solid '.$couleur.';} ', 'inline');

    $lservice = drupal_get_path_alias("node/".$node->nid);
    dpm($lservice);

?>

<div class="atelier">

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

        <div class="triangle-left"></div><!--
        --><div class="triangle-right"></div>

        <div class="liens">

                <div class="services-lien">

                   <?php print l("service" ,$lservice  , array("html"=>true, 'attributes' => array('class' => array('services')))); ?>

               </div>

                <div class="actualites-lien">

                    <?php print l("actualités",$lservice."/actus" , array("html"=>true, 'attributes' => array('class' => array('actualites', 'active')))); ?>

                </div>

        </div>

    </div>

    <?php print $view; ?>

</div>
