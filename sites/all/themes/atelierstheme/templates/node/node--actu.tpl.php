<?php

$view = views_get_view('actus');
$view->execute();

$result = $view->result;

$title = field_view_field("node",$node,'field_title');
$img = field_view_field("node",$node,'field_image');
$atelier = field_view_field("node",$node,'field_atelier');
$body = field_view_field("node",$node,'body');

$couleur = field_get_items("node",$node,'field_couleur')[0]['rgb'];

/*

$link = field_get_items("node",$node,'field_link');
$flag = field_view_field("node",$node,'field_flag');
$build_body = field_view_field('node', $node, 'body', 'teaser');

<a href="<?php   print $link[0]["value"]; ?>" target="_blank">
    <div class="title"><?php print $title; ?></div>
    <div class="flag"><?php print render($flag); ?></div>
    <div class="logo"><?php print render($logo); ?></div>
</a>
*/
?>

    <div class="atelier actu-detail">
   
        <div class="atelier-header">
              
            <div class="left">
               
                <?php print render($img); ?>
                
            </div>
                
            <div class="text-presentation">

                <h1> <?php print render($title); ?> </h1>
                <?php print render($body); ?>
            
            </div>

        </div>

    </div>
    
</div>