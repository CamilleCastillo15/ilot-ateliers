
  <?php
   
    $nid = $node -> nid;

    $title = field_view_field("node",$node,'field_title');
    $imgactu = field_get_items("node",$node,'field_image');

    $atelier = field_get_items("node",$node,'field_atelier')[0]["entity"];

    if($atelier){

        $ftitle = field_view_field("node",$atelier,'field_title');
        $picto = field_view_field("node",$atelier,'field_picto');
        $img = field_view_field("node",$atelier,'field_image');
        $couleur = field_get_items("node",$atelier,'field_couleur')[0]['rgb'];
        drupal_add_css('.atelier .wtitle, .atelier .wsubtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');
        drupal_add_css('.atelier .wtitle, .atelier .wsubtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');
        drupal_add_css('.atelier .triangle-left,.atelier .triangle-right{border-bottom-color:'.$couleur.' !important;} ', 'inline');
        drupal_add_css('.actus.numb_'.$node->nid.' {border-bottom: 3px solid '.$couleur.';} ', 'inline');
        $lservice = drupal_get_path_alias("node/".$atelier->nid);

    } else {

        drupal_add_css('.actus.numb_'.$node->nid.' {border-bottom: 3px solid grey;} ', 'inline');

    }

    //dpm($atelier);

    if($teaser){
    $imgactu_render = field_view_value('node', $node, 'field_image', $imgactu[0], array(
            'type' => 'image',
            'settings' => array(
            'image_style' => 'actu'),
    ));

    $date_day = format_date($node->created, 'custom','d');
    $date_month = format_date($node->created, 'custom','F');
    $date_fullyear = format_date($node->created, 'custom','Y');
    $link = url('node/'.$node->nid, array('absolute' => TRUE));
    $linke = drupal_get_path_alias('node/'.$node->nid);
?> 

<div class="bloc-grille-base offre-speciale actus teaser numb_<?php print $nid ?>">
    <div class="offres-speciales-header">
        <div class="img-actu">
            <?php print render($imgactu_render); ?>
        </div>
        <div class="date">
            <div class="day"><span class=""><?php print render($date_day); ?></span><?php print render($date_month); ?></div>
            <div class="year"><?php print render($date_fullyear); ?></div>
            <div class="socials"><div class="fb-share-button" data-href="<?php print $link;?>" data-layout="button_count" data-mobile-iframe="true"></div></div>
        </div>
        <div class="text-actus">
            <h1><?php print render($title); ?></h1>
            <div class="text-detail"> <?php

            $body = field_view_field("node",$node,'body',array(
                  'label'=>'hidden',
                  'type' => 'text_summary_or_trimmed',
                  'settings'=>array('trim_length' => 50),
            ));

            print render($body); ?> </div>
            <div class="readmore">
                 <?php print l("Lire la suite",$linke , array("html"=>true, 'attributes' => array('class' => array()))); ?>
            </div>
        </div>
    </div>
</div>

<?php } else {
        $body = field_view_field("node",$node,'body');
        $imgactu_render = field_view_value('node', $node, 'field_image', $imgactu[0], array(
                'type' => 'image',
                'settings' => array(
                    'image_style' => 'large',
                )
        ));
    $visuel_actu = variable_get("ateliersmod_fsvisuels_actualites");
    $file = file_load($visuel_actu);
    $img_header = image_style_url("header", $file->uri);
?>

<div class="atelier">
   <?php if($atelier) { ?>
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
        </div>
        <?php } else { ?>
        <div class="imagetitle">
            <div class="image">
                <img src="<?php print $img_header; ?>" alt="header" title="header" />
            </div>
            <div class="title">actualités</div>
        </div>
        <?php } ?>
    </div>
</div>

<div class="atelier actu-detail">
    <div class="atelier-header bloc-grille-base">
        <?php print render($imgactu_render); ?>
        <div class="text-presentation">
            <h1> <?php print render($title); ?> </h1>
            <?php print render($body); ?>
        </div>

    </div>
</div>

<?php

} ?>
