<?php

$ftitle = field_view_field("node",$node,'field_title');
$picto = field_view_field("node",$node,'field_picto');

$img = field_view_field("node",$node,'field_image');

$body = field_view_field("node",$node,'body');
$gallerie = field_get_items("node",$node,'field_image_multi');
$couleur = field_get_items("node",$node,'field_couleur')[0]['rgb'];

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
        <div class="picto pictotitle"><?php print render($picto); ?></div>
        <div class="title"><?php print render($ftitle); ?></div>
        <div class="triangle-left"></div><!--
        --><div class="triangle-right"></div>
    </div>
    
    <div class="atelier-body atelier-color">
        <?php print render($body); ?>
    </div>
    
    <div class="atelier-gallerie">
        <div class="atelier-gallerie-big">
            <?php
                foreach($gallerie as $key => $value){ ?>
                    <div class="atelier-gallerie-image">
                        <?php
                            $imagea = field_view_value('node', $node, 'field_image_multi', $value);
                            print render($imagea);
                        ?>
                    </div>
                <?php
                }

            ?>
        </div>
        <div class="atelier-gallerie-thumbnails">
             <?php foreach($gallerie as $key => $value){ ?>
                <div class="atelier-gallerie-image">
                    <?php
                        $imagea = field_view_value('node', $node, 'field_image_multi', $value,array(
                            'type' => 'image',
                            'settings' => array(
                                'image_style' => 'gallerie_thumb',
                            ),
                        ));
                        print render($imagea);
                    ?>
                </div>
            <?php } ?>
        </div>
        
    </div>
    
    <div class="contact">
        
        Nous contacter
        
    </div>
    
</div>
