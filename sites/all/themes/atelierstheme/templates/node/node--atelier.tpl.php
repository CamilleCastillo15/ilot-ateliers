<?php
$ftitle = field_view_field("node",$node,'field_title');
$picto = field_view_field("node",$node,'field_picto');
/*
$logo = field_view_field("node",$node,'field_main_image');
$link = field_get_items("node",$node,'field_link');
$flag = field_view_field("node",$node,'field_flag');
$build_body = field_view_field('node', $node, 'body', 'teaser');

<a href="<?php   print $link[0]["value"]; ?>" target="_blank">
    <div class="title"><?php print $title; ?></div>
    <div class="flag"><?php print render($flag); ?></div>
    <div class="logo"><?php print render($logo); ?></div>
</a>
*/?>
<div class="big-image">
    <div class="title"><?php print render($ftitle); ?></div>
</div>
<div class="picto"><?php print render($picto); ?></div>
