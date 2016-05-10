<?php
    $base = base_path();
    $visuel_offre = variable_get("ateliersmod_fsvisuels_offres");
    $file = file_load($visuel_offre);
    $img_header = image_style_url("header", $file->uri);
    $imgactu = field_view_field("node",$node,'field_image');
    $title = field_view_field("node",$node,'field_title');
    //$picto = field_view_field("node",$node,'field_picto');
    $atelier_id = field_get_items("node",$node,'field_atelier')[0]["target_id"];
    $atelier = node_load($atelier_id);
    $ftitle = field_view_field("node",$atelier,'field_title');
    $imgactu_petite = field_get_items("node",$node,'field_image');
    $imgactu_render = field_view_value('node', $node, 'field_image', $imgactu_petite[0], array(
        'type' => 'image',
        'settings' => array(
        'image_style' => 'medium',
      ),
    ));
    $couleur = field_get_items("node",$atelier,'field_couleur')[0]['rgb'];
    $gallerie = field_get_items("node",$node,'field_image_multi');
    //    drupal_add_css('.offre'.$node->nid.' {padding: 0 0 100px 0;} ', 'inline');
    drupal_add_css('.offre'.$node->nid.' {border-bottom: 3px solid'.$couleur.';} ', 'inline');
    //    drupal_add_css('.offre'.$node->nid.' .title-offre-speciale{color:'.$couleur.';} ', 'inline');
    //    drupal_add_css('.offre'.$node->nid.' .wtitle {color:'.$couleur.';} ', 'inline');
    //    drupal_add_css('.offre'.$node->nid.' .wsubtitle {color:'.$couleur.';} ', 'inline');
    drupal_add_css('.offre-speciale .plus:hover{background-color:#00a886 !important; border: 2px solid #00a886 !important;} ', 'inline');
    //    drupal_add_css('.offre'.$node->nid.' .readmore:hover{background-color: '.$couleur.' !important; border:2px solid '.$couleur.' !important} ', 'inline');
    $link = drupal_get_path_alias("node/".$node->nid);
    $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ;
    $date_day = format_date($node->created, 'custom','d');
    $date_month = format_date($node->created, 'custom','F');
    $date_fullyear = format_date($node->created, 'custom','Y');
    $link = url('node/'.$node->nid, array('absolute' => TRUE));
    $linke = drupal_get_path_alias('node/'.$node->nid);
?>

<?php if($teaser){
    $body = field_view_field("node",$node,'body',array(
              'label'=>'hidden',
              'type' => 'text_summary_or_trimmed',
              'settings'=>array('trim_length' => 150),
        ));
?>
<div class="bloc-grille-base offre-speciale actus teaser <?php print 'offre'.$node->nid ?>">
     <div class="offres-speciales-header">
        <div class="img-actu">
            <?php print render($imgactu_render); ?>
        </div>
        <div class="date">
            <div class="day"><span class=""><?php print render($date_day); ?></span><?php print render($date_month); ?></div>
            <div class="year"><?php print render($date_fullyear); ?></div>
            <div class="socials"><div class="fb-share-button" data-href="<?php print $link;?>" data-layout="icon_link" data-mobile-iframe="true"></div></div>
        </div>
        <div class="text-actus">
            <h1> <?php print render($title); ?> </h1>
            <div class="text-detail"><?php print render($body); ?></div>
             <?php print l("lire la suite", $link, array("html"=>true, 'attributes' => array('class' => array('readmore')))); ?>
         </div>
    </div>
</div>
<?php } else {
    $body = field_view_field("node",$node,'body'); ?>
     <div class="imagetitle">
        <div class="image">
            <img src="<?php print $img_header; ?>" alt="header" title="header" />
        </div>
        <div class="title">offres spéciales</div>
    </div>
    <div class="offre-speciale-detail bloc-grille-base <?php print 'offre-detail'.$node->nid ?>">
        <div class="offres-speciales-header">
            <?php print render($imgactu); ?>
            <div class="text-presentation">
                <h1> <?php print render($title); ?> </h1>
                <?php print render($body); ?>
            </div>
        </div>
        <?php if ($gallerie) { ?>
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
        <?php } ?>
    </div>
<?php } ?>
