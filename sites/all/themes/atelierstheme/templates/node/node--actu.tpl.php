<?php
/*
$view = views_get_view('actus');
$view->execute();
$result = $view->result;
*/

$title = field_view_field("node",$node,'field_title');
$imgactu = field_view_field("node",$node,'field_image');

$body = field_view_field("node",$node,'body');
$atelier = field_get_items("node",$node,'field_atelier')[0]["entity"];

$ftitle = field_view_field("node",$atelier,'field_title');
$picto = field_view_field("node",$node,'field_picto');
$img = field_view_field("node",$atelier,'field_image');

$couleur = field_get_items("node",$atelier,'field_couleur')[0]['rgb'];

drupal_add_css('.atelier-color .wtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');
drupal_add_css('.triangle-left,.triangle-right{border-bottom-color:'.$couleur.';} ', 'inline');

/*

$link = field_get_items("node",$node,'field_link');
$flag = field_view_field("node",$node,'field_flag');
$build_body = field_view_field('node', $node, 'body', 'teaser');

<a href="<?php   print $link[0]["value"]; ?>" target="_blank">
    <div class="title"><?php print $title; ?></div>
    <div class="flag"><?php print render($flag); ?></div>
    <div class="logo"><?php print render($logo); ?></div>
</a>
*/?>

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

            <a href="/services" class="services">service</a>
            <a href="<?php print render($title); ?>/actus" class="actualites">actualités</a>

        </div>

    </div>


</div>

    <div class="atelier actu-detail">
   
        <div class="atelier-header">
              
            <div class="left">
               
                <?php print render($imgactu); ?>
                
            </div>
                
            <div class="text-presentation">

                <h1> <?php print render($title); ?> </h1>
                <?php print render($body); ?>
            
            </div>

        </div>

    </div>
    
</div>
