<?php
    /*
    $view = views_get_view('actus');
    $view->execute();
    $result = $view->result;
    */

    $imgactu = field_view_field("node",$node,'field_image');
    $title = field_view_field("node",$node,'field_title');
    $body = field_view_field("node",$node,'body');
    //$picto = field_view_field("node",$node,'field_picto');

    $atelier_id = field_get_items("node",$node,'field_atelier')[0]["target_id"];
    $atelier = node_load($atelier_id);

    $ftitle = field_view_field("node",$atelier,'field_title');
    $img = field_view_field("node",$atelier,'field_image');

    $couleur = field_get_items("node",$atelier,'field_couleur')[0]['rgb'];

    drupal_add_css('.offre'.$node->nid.' {border-bottom: 3px solid'.$couleur.';} ', 'inline');
    drupal_add_css('.offre-detail'.$node->nid.' .wtitle {color:'.$couleur.';} ', 'inline');

?>

<div class="imagetitle">
    <div class="image"><?php print render($image); ?></div>
    <div class="title">offres spéciales</div>
</div>

<?php if($teaser){ ?>

    <div class="offre-speciale actus teaser <?php print 'offre'.$node->nid ?>">

         <div class="offres-speciales-header">

            <div class="left">

                <?php print render($imgactu); ?>

            </div>

            <div class="text-actus">

                <h1> <?php print render($title); ?> </h1>
                <?php print render($body); ?>

            </div>

        </div>

    </div>


<?php }else{ ?>

    <div class="offre-speciale <?php print 'offre-detail'.$node->nid ?>">

        <div class="offres-speciales-header">

            <div class="left">

                <?php print render($imgactu); ?>

            </div>

            <div class="text-presentation">

                <h1> <?php print render($title); ?> </h1>
                <?php print render($body); ?>

            </div>

        </div>

    </div>

<?php } ?>





