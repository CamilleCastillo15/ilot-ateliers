<?php

    $title = field_view_field("node",$node,'field_title');
    $imgactu = field_view_field("node",$node,'field_image');

    $body = field_view_field("node",$node,'body');
    $atelier = field_get_items("node",$node,'field_atelier')[0]["entity"];

    $ftitle = field_view_field("node",$atelier,'field_title');
    $picto = field_view_field("node",$node,'field_picto');
    $img = field_view_field("node",$atelier,'field_image');

    $couleur = field_get_items("node",$atelier,'field_couleur')[0]['rgb'];

    drupal_add_css('.atelier .wtitle, .atelier .wsubtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');
    drupal_add_css('.triangle-left,.triangle-right{border-bottom-color:'.$couleur.';} ', 'inline');
    drupal_add_css('.actus{border-bottom: 3px solid '.$couleur.';} ', 'inline');

    $lservice = drupal_get_path_alias("node/".$atelier->nid);

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

          <?php print l("service" ,$lservice  , array("html"=>true, 'attributes' => array('class' => array('services')))); ?>
            <?php print l("actualités",$lservice."/actus" , array("html"=>true, 'attributes' => array('class' => array('actualites')))); ?>

        </div>

    </div>

</div>

<div class="atelier actu-detail">

    <div class="atelier-header">

        <?php print render($imgactu); ?>

        <div class="text-presentation">

            <h1> <?php print render($title); ?> </h1>
            <?php print render($body); ?>

        </div>

    </div>

</div>

