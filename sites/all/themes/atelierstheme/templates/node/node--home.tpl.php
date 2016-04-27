<?php

    $styles  = drupal_get_css();
    $body_actu = field_view_field("node",$node,'field_body_actu');
    $body = field_view_field("node",$node,'field_body');

    $gallerie = field_get_items("node",$node,'field_image_multi');
    $image = field_view_field("node",$node,'field_image');

    $im_solidarite =  field_get_items("node",$node,'field_image');
    $im_solidarite_r = field_view_value('node', $node, 'field_image', $im_solidarite[0], array(
        'type' => 'image',
        'settings' => array(
            'image_style' => 'slider',
        ),
    ));

    $image_fond = field_get_items("node",$node,'field_image');
    $image_fond_render = field_view_value('node', $node, 'field_image', $image_fond[0], array(
        'type' => 'image',
        'settings' => array(
        'image_style' => 'header',
      ),
    ));
    //$src = image_style_url("home", $image_fond[0]["uri"]);

    $body = field_view_field("node",$node,'field_body');

    $view = views_get_view('offres_speciales');
    $view->set_display('blockhome');
    $view->execute();

    $result = $view->result;

    $view_ateliers = views_get_view('ateliers');
    $view_ateliers->execute();

    $result_ateliers = $view_ateliers->result;

    $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ;

    $fc_textimage = field_get_items('node', $node, 'field_bloc_presentation_l_ilot_');

    //dpm($fc_textimage);

    if($fc_textimage){
        $idti = array();
        foreach ($fc_textimage as $fc_field) {
            $idti[] = $fc_field['value'];
        }
        $collectionsg =  field_collection_item_load_multiple($idti);
    }

    //dpm($idti);
?>
<div class="home">
    <div class="block-all swiper-container">
        <div class="swiper-wrapper">

            <?php for($i = 0; $i < count($idti); $i++){
                $collectiong = $collectionsg[$idti[$i]];

                $image_field = field_get_items('field_collection_item', $collectiong, 'field_imge_presentation');
                $image_render = field_view_value('field_collection_item', $collectiong, 'field_imge_presentation', $image_field[0], array(
                    'type' => 'image',
                    'settings' => array(
                        'image_style' => 'header',
                    )));

                $titre = field_view_field('field_collection_item', $collectiong, 'field_titre');
                $chapeau = field_view_field('field_collection_item', $collectiong, 'field_body_presentation');

            ?>
            <div class="home swiper-slide">
                <div class="block-img" >
                   <?php print render($image_render); ?>
                </div>
                <div class="block-w">
                    <h2 class="title-bienvenue"><?php print render($titre); ?></h2>
                    <p class="par-bienvenue">

                        <?php print render($chapeau); ?>

                    </p><!--
                    --><div class="ateliers">
                    <!--
                    <?php
                    foreach($result_ateliers as $key => $value) { ?>
                        --><div class="atelier">
                        <?php

                          $n = node_load($value->nid);

                          $link =drupal_get_path_alias("node/".$value->nid);
                          $picto = field_view_field("node",$n,'field_picto');
                          $title = field_view_field("node",$n,'field_title');
                          $class = field_view_field("node",$n,'field_class');

                          $title_render = render($title);
                          $class_render = render($class);
                          $picto_render = render($picto);

                          print l($picto_render, $link,array("html"=>true, 'attributes' => array('class' => array('picto_ateliers', $class_render))));
                          $title_render = render($title);
                          echo "<p class=\"title-pictos ".$class_render."\">";
                            print l($title_render, $link,array("html"=>true, 'attributes' => array('class' => array('picto_ateliers'))));
                            echo "</p>";
                          // print l($picto_render,$link,array("html"=>true, 'attributes' => array('class' => array('plus'))));
                        ?>
                        </div><!--
                    <?php } ?>
                      -->
                    </div>
                </div>
            </div>
            <?php }  ?>
        </div>
    </div>
    <div class="home-body-actu swiper-container">
        <div class="swiper-wrapper">
            <?php foreach($result as $key => $value) { ?>
               <div class="actu actu-gallerie-images swiper-slide">
                   <?php
                        $n = node_load($value->nid);
                        $im_offre = field_get_items("node",$n,'field_image');
                        $im_offre_r = field_view_value('node', $n, 'field_image', $im_offre[0], array(
                            'type' => 'image',
                            'settings' => array(
                                'image_style' => 'slider',
                            ),
                        ));
                        $title_offres = field_view_field("node",$n,'field_title');
                        $body_offres = field_view_field("node",$n,'field_chapeau');
                   ?>
                    <div class="im_offres">
                        <?php print render($im_offre_r); ?>
                    </div><!--
                   --><div class="body_offres ">
                        <?php
                            echo "<h1>".render($title_offres)."</h1>";
                            print render($body_offres);
                        ?>
                        <div class="center">
                            <div class="en_savoir_plus">En savoir plus</div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="home-body-solidarite">
        <div class="image_solidarite">
            <?php print render($im_solidarite_r); ?>
        </div>
        <div class="body_solidarite">
            <?php print render($body); ?>
            <div class="center">
            <div class="en_savoir_plus">
                En savoir plus
            </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
