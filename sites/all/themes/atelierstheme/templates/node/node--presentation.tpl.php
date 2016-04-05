<?php

$ftitle = field_view_field("node",$node,'field_title');
$image = field_view_field("node",$node,'field_image');
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


<div class="presentation">
    <div class="imagetitle">
        <div class="title"><?php print render($image); ?></div>
        <div class="image"><?php print render($ftitle); ?></div>
    </div>

    <div class="presentation-body">
        <?php print render($body); ?>
    </div>
</div>
