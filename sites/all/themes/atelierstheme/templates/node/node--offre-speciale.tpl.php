<?php

    $imgactu = field_view_field("node",$node,'field_image');
    $title = field_view_field("node",$node,'field_title');
    $body = field_view_field("node",$node,'body');
    //$picto = field_view_field("node",$node,'field_picto');

    $atelier_id = field_get_items("node",$node,'field_atelier')[0]["target_id"];
    $atelier = node_load($atelier_id);

    $ftitle = field_view_field("node",$atelier,'field_title');
    $img = field_view_field("node",$atelier,'field_image');

    $couleur = field_get_items("node",$atelier,'field_couleur')[0]['rgb'];

    drupal_add_css('.offre'.$node->nid.' {padding: 0 0 100px 0;} ', 'inline');
    drupal_add_css('.offre'.$node->nid.' {border-bottom: 3px solid'.$couleur.';} ', 'inline');

    drupal_add_css('.offre-detail'.$node->nid.' .wtitle {color:'.$couleur.';} ', 'inline');
    drupal_add_css('.offre-detail'.$node->nid.' .wsubtitle {color:'.$couleur.';} ', 'inline');

    $link = drupal_get_path_alias("node/".$node->nid);

?>

<?php if($teaser){ ?>

    <div class="offre-speciale actus teaser <?php print 'offre'.$node->nid ?>">

         <div class="offres-speciales-header">

<<<<<<< HEAD
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
=======
            <div class="left">

                <?php print render($imgactu); ?>

            </div>

            <div class="text-actus">

                <h1 class="title-offre-speciale"> <?php print render($title); ?> </h1>
                <?php print render($body); ?>


          <?php print l("lire la suite" ,$link  , array("html"=>true, 'attributes' => array('class' => array('plus')))); ?>

             </div>

        </div>

>>>>>>> origin/master
    </div>


<?php }else{ ?>

    <div class="offre-speciale-detail <?php print 'offre-detail'.$node->nid ?>">

        <div class="offres-speciales-header">

            <?php print render($imgactu); ?>

            <div class="text-presentation">

                <h1> <?php print render($title); ?> </h1>
                <?php print render($body); ?>

            </div>

        </div>

    </div>

<?php } ?>





