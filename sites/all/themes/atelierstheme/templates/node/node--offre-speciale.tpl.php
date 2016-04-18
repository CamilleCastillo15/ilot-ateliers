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
    $gallerie = field_get_items("node",$node,'field_image_multi');

    drupal_add_css('.offre'.$node->nid.' {padding: 0 0 100px 0;} ', 'inline');
    drupal_add_css('.offre'.$node->nid.' {border-bottom: 3px solid'.$couleur.';} ', 'inline');

    drupal_add_css('.offre-detail'.$node->nid.' .wtitle {color:'.$couleur.';} ', 'inline');
    drupal_add_css('.offre-detail'.$node->nid.' .wsubtitle {color:'.$couleur.';} ', 'inline');

    $link = drupal_get_path_alias("node/".$node->nid);

    $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ;

?>

<?php if($teaser){ ?>

    <div class="offre-speciale actus teaser <?php print 'offre'.$node->nid ?>">

         <div class="offres-speciales-header">

            <div class="left">

                <?php print render($imgactu); ?>

            </div>

            <div class="text-actus">

                <h1 class="title-offre-speciale"> <?php print render($title); ?> </h1>

                 <?php print render($body); ?>

                 <?php print l("lire la suite", $link, array("html"=>true, 'attributes' => array('class' => array('plus')))); ?>

             </div>

        </div>

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

        <div class="offres-speciales-gallerie">

            <div class="offres-speciales-gallerie-big">

                <div class="offres-speciales-gallerie swiper-container">

                    <div class="offres-speciales-gallerie-big swiper-wrapper">

                        <?php

                            foreach($gallerie as $key => $value){ ?>

                            <div class="offres-speciales-gallerie-image swiper-slide">
                                <?php
                                            $imagea = field_view_value('node', $node, 'field_image_multi', $value);
                                            print render($imagea);
                                        ?>
                            </div>

                            <?php

                                }

                            ?>

                    </div>

                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>

                <div class="offres-speciales-gallerie-thumbnails">

                    <?php foreach($gallerie as $key => $value){ ?>

                        <div class="offres-speciales-gallerie-image" data-id="<?php print $key; ?>">

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

                        <?php

                            }

                        ?>

                </div>

            </div>

        </div>

    </div>

<?php } ?>





