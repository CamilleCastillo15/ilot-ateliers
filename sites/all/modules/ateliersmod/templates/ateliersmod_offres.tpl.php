<?php


$base = base_path();

$visuel_offre = variable_get("ateliersmod_fsvisuels_offres");
$file = file_load($visuel_offre);
$img = image_style_url("header", $file->uri);
//print $img;

/*
$ftitle = field_view_field("node",$node,'field_title');
$picto = field_view_field("node",$node,'field_picto');
$img = field_view_field("node",$node,'field_image');

$body = field_view_field("node",$node,'body');
$gallerie = field_get_items("node",$node,'field_image_multi');
$couleur = field_get_items("node",$node,'field_couleur')[0]['rgb'];

drupal_add_css('.atelier-color .wtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');
drupal_add_css('.triangle-left,.triangle-right{border-bottom-color:'.$couleur.';} ', 'inline');
*/
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
//$lservice = drupal_get_path_alias("node/".$node->nid);

?>

<div class="offres-speciales">

    <div class="imagetitle">
        <div class="image">
            <img src="<?php print $img; ?>" alt="header" title="header" />
        </div>
        <div class="title">offres spéciales</div>
    </div>

    <div class="bloc-grille-base-offres">

        <?php print $view; ?>

    </div>

</div>
