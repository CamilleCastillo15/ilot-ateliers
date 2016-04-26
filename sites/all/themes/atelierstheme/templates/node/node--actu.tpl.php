<?php
   
    $title = field_view_field("node",$node,'field_title');
    $imgactu = field_get_items("node",$node,'field_image');
    $atelier = field_get_items("node",$node,'field_atelier')[0]["entity"];
   
   

    $ftitle = field_view_field("node",$atelier,'field_title');
    $picto = field_view_field("node",$atelier,'field_picto');
    $img = field_view_field("node",$atelier,'field_image');

    $couleur = field_get_items("node",$atelier,'field_couleur')[0]['rgb'];

    drupal_add_css('.atelier .wtitle, .atelier .wsubtitle {color:'.$couleur.';} .atelier-color .wsubtitle {color:'.$couleur.';} ', 'inline');
   drupal_add_css('.atelier .triangle-left,.atelier .triangle-right{border-bottom-color:'.$couleur.' !important;} ', 'inline');
    drupal_add_css('.actus{border-bottom: 3px solid '.$couleur.';} ', 'inline');

    $lservice = drupal_get_path_alias("node/".$atelier->nid);

    if($teaser){ 
        $body = field_view_field("node",$node,'body',array(
              'label'=>'hidden', 
              'type' => 'text_summary_or_trimmed', 
              'settings'=>array('trim_length' => 150),
        )); 
        $imgactu_render = field_view_value('node', $node, 'field_image', $imgactu[0], array(
                'type' => 'image',
                'settings' => array(
                'image_style' => 'medium',
        ),
    ));
?> 

<div class="atelier actu-detail>">
    <div class="left">
       <?php print render($imgactu_render); ?>
    </div>
    <div class="text-actus">
        <h1><?php print render($title); ?></h1>
        <?php print render($body); ?>
    </div>
</div>


<?php }else{
        $body = field_view_field("node",$node,'body');
        $imgactu_render = field_view_value('node', $node, 'field_image', $imgactu[0], array(
                'type' => 'image',
                'settings' => array(
                    'image_style' => 'large',
                )
        ));
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
               <?php print l("service" ,$lservice  , array("html"=>true, 'attributes' => array('class' => array('services')))); ?>
            </div>
            <div class="actualites-lien">
                <?php print l("actualités",$lservice."/actus" , array("html"=>true, 'attributes' => array('class' => array('actualites', 'active')))); ?>
            </div>
        </div>
    </div>
</div>

<div class="atelier actu-detail">
    <div class="atelier-header">
        <?php print render($imgactu_render); ?>
        <div class="text-presentation">
            <h1> <?php print render($title); ?> </h1>
            <?php print render($body); ?>
        </div>

    </div>
</div>
<?php } ?>
