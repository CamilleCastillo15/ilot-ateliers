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
              $titre = field_view_field("node",$n,'field_titre');
              $horaires = field_view_field("node",$n,'field_texte_horaires');
              $adresse = field_view_field("node",$n,'field_texte_adresse');
              $picto_tel = field_view_field("node",$n,'field_image');
              $telephone = field_view_field("node",$n,'field_texte_telephone');
              $emails = field_view_field("node",$n,'field_texte_emails');
         ?>
                  <h1>
                      <?php print render($titre); ?>
                  </h1>
                  <br />
                  <div class="horaires">
                      <?php print render($horaires); ?>
                  </div>
                  <br />
                  <div class="adresse">
                      <?php print render($adresse); ?>
                  </div>
                  <br />
                    <?php print render($picto_tel); ?>
                  <div class="telephone">
                      <?php print render($telephone); ?>
                  </div>
                  <br />
                  <br />
                  <div class="emails">
                      <?php print render($emails); ?>
                  </div>
                      
       <?php } ?>

</div>
