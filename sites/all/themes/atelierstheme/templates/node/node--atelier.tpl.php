<?php
$ftitle = field_view_field("node",$node,'field_title');
$picto = field_view_field("node",$node,'field_picto');
$image = field_view_field("node",$node,'field_image');
$body = field_view_field("node",$node,'body');
$gallerie = field_get_items("node",$node,'field_image_multi');


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
<div class="atelier-header">
    <div class="atelier-header-bg">
        <div class="atelier-header-bg"><?php print render($image); ?></div>
    </div>
    <div class="picto"><?php print render($picto); ?></div>
    <div class="title"><?php print render($ftitle); ?></div>
</div>
<div class="atelier-body">
    <?php print render($body); ?>
</div>
<div class="atelier-gallerie">
       <div class="atelier-gallerie-big">
    <?php
        foreach($gallerie as $key => $value){
            dpm($value); ?>
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
