<?php

    $styles  = drupal_get_css();

    $view_ateliers = views_get_view('ateliers');
    $view_ateliers->execute();

    $result_ateliers = $view_ateliers->result;
    $theme = drupal_get_path("theme",$GLOBALS['theme']);




    if ($node = menu_get_object()) { // Get the nid
        $nid = $node->nid;
    }else {
        $nid = 0;
    }

?>
<div class="autres_services">
    <div class="triangles">
        <div class="triangle-left"></div><!--
     --><div class="triangle-right"></div>
    </div>
    <div class="inner">
        <h1>Autres services</h1>
        <div class="img-pictos">
                <!--;
            <?php foreach($result_ateliers as $key => $value) {
                    if($value->nid == $nid){
                        $class = "active";
                        $n = node_load($value->nid);
                        $couleur = field_view_field("node",$n,'field_couleur');

                        drupal_add_css('.autres_services .img-pictos .active h2 a{
                        border-bottom:3px solid black;
                        border-bottom-color:'. render($couleur[0]).' !important;} ', 'inline');
                    }else{
                        $class="";
                    }
                    ?>
            --><div class="atelier <?php print $class ;?>">
                    <?php $n = node_load($value->nid);
                      $link =drupal_get_path_alias("node/".$value->nid);
                      $picto = field_view_field("node",$n,'field_picto');
                      $title = field_view_field("node",$n,'field_title');
                      $class = field_view_field("node",$n,'field_class');

                      $class_render = render($class);
                      $title_render = render($title);
                      $picto_render = render($picto);
                    print l($picto_render, $link,array("html"=>true, 'attributes' => array('class' => array('img-block', $class_render)))); ?>
                        <h2 class="title-pictos <?php/* ca fait planter print $class_render ?> */?>">
                      <?php print l($title_render, $link,array("html"=>true)); ?>
                    </h2>
                </div><!--
            <?php } ?>
      -->
        </div>
    </div>
</div>
