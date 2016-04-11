<?php

    $ftitle = field_view_field("node",$node,'field_title');
    $picto = field_view_field("node",$node,'field_picto');

    $bkg_mobile = field_view_field("node",$node,'field_image_mobile');
    $bkg_web = field_view_field("node",$node,'field_image_pc');

    $body = field_view_field("node",$node,'body');
    $gallerie = field_get_items("node",$node,'field_image_multi');
    $couleur = field_get_items("node",$node,'field_couleur')[0]['rgb'];

    drupal_add_css('.atelier-color .wtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');

?>

<?php print ($bkg_mobile); ?>

<div class="atelier">

    <div class="atelier-header">
        <div class="atelier-header-bg-mobile">
            <div class="atelier-header-bg-img"><?php print render($bkg_mobile); ?></div>
        </div>
        <div class="atelier-header-bg-web">
            <div class="atelier-header-bg-img"><?php print render($bkg_web); ?></div>
        </div>
        <div class="picto"><?php print render($picto); ?></div>
        <div class="title"><?php print render($ftitle); ?></div>
        <div class="block-orange"></div>
    </div>
    
    <div class="atelier-body atelier-color">
        <?php print render($body); ?>
    </div>
    
    <div class="atelier-gallerie">

        <div class="atelier-gallerie-big">
            <?php
                foreach($gallerie as $key => $value){
                    dpm($value); ?>
                    <div class="atelier-gallerie-image">
                        <?php
                            $imagea = field_view_value('node', $node, 'field_image_multi', $value);
                            print render($imagea);
                        ?>
                    </div>
                <?php
                }

            ?>
        </div>

        <div class="atelier-gallerie-thumbnails">
             <?php foreach($gallerie as $key => $value){ ?>
                <div class="atelier-gallerie-image">
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
            <?php } ?>
        </div>
        
    </div>
    
    <div class="contact">
        
        Nous contacter
        
    </div>
    
</div>
