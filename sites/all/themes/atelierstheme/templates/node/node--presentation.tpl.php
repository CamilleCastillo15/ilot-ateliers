<?php

$ftitle = field_view_field("node",$node,'field_title');
$image = field_view_field("node",$node,'field_image');
$gallerie = field_get_items("node",$node,'field_image_multi');
$body = field_view_field("node",$node,'body');

//drupal_add_css('.atelier-color .wtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');

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


<div class="presentation bkg-blanc">
    
    <div class="imagetitle">
        <div class="image"><?php print render($image); ?></div>
        <div class="title"><?php print render($ftitle); ?></div>
    </div>

    <div class="text-presentation">
        <?php print render($body); ?>
    </div>
    
        <div class="atelier-gallerie-big">
            <?php
                foreach($gallerie as $key => $value){
                    dpm($value); ?>
                        <?php
                            $imagea = field_view_value('node', $node, 'field_image_multi', $value);
                            print render($imagea);
                        ?>
                <?php
                }

            ?>
        </div>
    
</div>
