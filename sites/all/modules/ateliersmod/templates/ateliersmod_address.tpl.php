<?php

    //$theme = drupal_get_path("theme",$GLOBALS['theme']) ;
    $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ;

?>

<div class="bloc2">

    <div class="text-presentation">
        
        <h1>

            Vous êtes un particulier ?
            <br /> Une entreprise ?
            <br />

        </h1>

        <br /> Nous vous accueillons du lundi au vendredi,
        <br /> <?php print $variables["body"]; ?> 
        <br /> ZA Montières - Espace Alliance
        <br /> 30 route d'Abbeville
        <br /> 80 000 Amiens
        <br />

        <img class="tel" src="<?php print $theme; ?>/images/telephone_blanc.svg" alt="telephone" title="telephone" /> 03 59 99 08 80

        <div class="petit">

            (numéro non surtaxé)

        </div>

        <br /> les-ateliers@ilot.asso.fr

        <br /> ateliers.ilot.asso.fr
       
    </div>

</div>
