<?php $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ; ?>
<div class="bloc_don">
    <div class="inner">
        <div  class="don-img">
            <img src="<?php print $theme; ?>/images/logo_coeur_rouge.svg" alt="don" />
        </div>
        <div class="don-txt">
            <h1>Je fais un don</h1>
            <h2>à l'association l'îlot</h2>
        </div>
        <div class="don-btn">
            <a href="http://ilot.asso.fr/faire-un-don" target="_blank" class="don">
                accéder au formulaire
            </a>    
        </div>
        <div class="clear"></div>
    </div>
</div>
