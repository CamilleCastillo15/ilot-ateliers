<?php
    dpm("hophophop");
    $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ; ?>
<div class="bloc_don">
    <div class="inner">
        <div  class="don-img">
            <img src="<?php print $theme; ?>/images/logo_coeur_rouge.svg" alt="don" />
        </div>
        <div class="don-txt">
            <h1>S'abonner</h1>
            <br />
            <h2>Aux offres spéciales</h2>
        </div>
        <div class="don-btn">
            <a href="http://www.soutien.ilot.asso.fr/checkout/7555" target="_blank" class="don">
                accéder au formulaire
            </a>
        </div>

        <div class="clear"></div>
    </div>
</div>
