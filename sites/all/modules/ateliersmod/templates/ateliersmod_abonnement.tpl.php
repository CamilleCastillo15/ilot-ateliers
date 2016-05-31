<?php
    $theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ; ?>
<div class="bloc_abo">
    <div class="inner">
        <div  class="don-img">
            <img src="<?php print $theme; ?>/images/paperplane.svg" alt="don" />
        </div>
        <div class="don-txt">
            <h2>S'abonner <br />
            Aux offres spéciales!</h2>
        </div>
        <div class="don-btn">
            <?php $form = node_load(30);
             $view = node_view($form);
            print render($view); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>
