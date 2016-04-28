<?php

    $ftitle = field_view_field("node",$node,'field_title');
    $picto = field_view_field("node",$node,'field_picto');

    $bkg_mobile = field_view_field("node",$node,'field_image_mobile');
    $bkg_web = field_view_field("node",$node,'field_image_pc');

    $title = field_view_field("node",$node,'title');

    $ftitle = field_view_field("node",$node,'field_title');
    $picto = field_view_field("node",$node,'field_picto');

    $img = field_view_field("node",$node,'field_image');

    $body = field_view_field("node",$node,'body');
    $gallerie = field_get_items("node",$node,'field_image_multi');
    $couleur = field_get_items("node",$node,'field_couleur')[0]['rgb'];

    drupal_add_css('.atelier-color .wtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');

    drupal_add_css('.atelier .triangle-left,.atelier .triangle-right{border-bottom-color:'.$couleur.' !important;} ', 'inline');
    drupal_add_css('.atelier .contact:hover{background-color:'.$couleur.' !important; border: 2px solid '.$couleur.' !important;} ', 'inline');
drupal_add_css('.atelier ul li:before{background-color:'.$couleur.' !important;} ', 'inline');

    $lservice = drupal_get_path_alias("node/".$node->nid);
    $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']);


?>
<div class="atelier">
        <div class="atelier-header pictotitlecontainer">

            <div class="atelier-header-bg image">
                <?php print render($img); ?>
            </div>

            <div class="picto pictotitle">
                <?php print render($picto); ?>
            </div>

            <div class="title">
                <?php print render($ftitle); ?>
            </div>
            <div class="triangles">
                <div class="triangle-left"></div><!--
             --><div class="triangle-right"></div>
            </div>
            <div class="atelier-liens">                
               <div class="services-lien">
                   <?php print l("service" ,$lservice  , array("html"=>true, 'attributes' => array('class' => array('services', 'active')))); ?>
               </div><!--
                --><div class="actualites-lien">
                    <?php print l("actualités",$lservice."/actus" , array("html"=>true, 'attributes' => array('class' => array('actualites')))); ?>
                </div>
            </div>
        </div>

        <div class="text atelier-color bloc-grille-base">
            <?php print render($body); ?>
        </div>

        <div class="contact">
            <a href="/content/formulaire-de-contact" >

                Nous contacter

            </a>
        </div>

        <div class="atelier-gallerie">

            <div class="atelier-gallerie-big">

                <div class="atelier-gallerie swiper-container">

                    <div class="atelier-gallerie-big swiper-wrapper">

                        <?php foreach($gallerie as $key => $value) { ?>

                            <div class="atelier-gallerie-image swiper-slide">

                                <?php

                                    $imagea = field_view_value('node', $node, 'field_image_multi', $value);
                                    print render($imagea);

                                ?>

                            </div>

                        <?php } ?>

                    </div>

                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>

                <div class="atelier-gallerie-thumbnails">

                    <?php foreach($gallerie as $key => $value){ ?>

                        <div class="atelier-gallerie-image" data-id="<?php print $key; ?>">

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
