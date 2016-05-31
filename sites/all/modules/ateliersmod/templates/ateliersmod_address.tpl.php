<?php

    $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ;

    $view_adresses = views_get_view('adresses');
    $view_adresses->execute();

    $result_adresses = $view_adresses->result;

?>

<div class="bloc2">

        <?php foreach($result_adresses as $key => $value) { ?>

        <?php $n = node_load($value->nid);
                      $link =drupal_get_path_alias("node/".$value->nid);
                      $texte = field_view_field("node",$n,'body'); ?>

                      <?php print render($texte); ?>
       <?php } ?>

</div>
