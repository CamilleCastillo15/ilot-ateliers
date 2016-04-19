<?php

    $styles  = drupal_get_css();

    $view_ateliers = views_get_view('ateliers');
    $view_ateliers->execute();

    $result_ateliers = $view_ateliers->result;

?>

    <div class="autres_services">
        <?php $theme = drupal_get_path("theme",$GLOBALS['theme']) ;?>
            <h1>autres services</h1>

            <div class="img-pictos">
                <!--;
        <?php foreach($result_ateliers as $key => $value) { ?>                            
                --><div class="atelier">
                    <?php $n = node_load($value->nid);

              $link =drupal_get_path_alias("node/".$value->nid);
              $picto = field_view_field("node",$n,'field_picto');
              $title = field_view_field("node",$n,'field_title');
              $class = field_view_field("node",$n,'field_class');

              $class_render = render($class);
                 $title_render = render($title);
              $picto_render = render($picto);

                print l($picto_render, $link,array("html"=>true, 'attributes' => array('class' => array('img-block ', $class_render))));
            echo "<h2 class=\"title-pictos ".$class_render."\">";

                print l($title_render, $link,array("html"=>true));

              echo "</h2>"; ?>
                </div><!--
    
            <?php } ?>

          --></div>;

    </div>