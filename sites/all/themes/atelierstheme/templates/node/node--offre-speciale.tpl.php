<?php
/*
$view = views_get_view('actus');
$view->execute();
$result = $view->result;
*/

$title = field_view_field("node",$node,'field_title');
$imgactu = field_view_field("node",$node,'field_image');

$body = field_view_field("node",$node,'body');
$atelier_id = field_get_items("node",$node,'field_atelier')[0]["target_id"];
$atelier = node_load($atelier_id);


//$ftitle = field_view_field("node",$atelier,'field_title');
$picto = field_view_field("node",$node,'field_picto');
//$img = field_view_field("node",$atelier,'field_image');

$couleur = field_get_items("node",$atelier,'field_couleur')[0]['rgb'];



drupal_add_css('.offre'.$node->nid.' .wtitle {color:'.$couleur.';} ', 'inline');


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
if($teaser){ ?>
       <div class="offre-speciale teaser <?php print 'offre'.$node->nid ?>">
        offre spéciale teaser
         <div class="machin"><?php print render($title);?></div>
         <div class="machin"><?php print render($body);?></div>
    </div>


<?php }else{ ?>
    <div class="offre-speciale">
    offre spéciale

    </div>


<?php } ?>





