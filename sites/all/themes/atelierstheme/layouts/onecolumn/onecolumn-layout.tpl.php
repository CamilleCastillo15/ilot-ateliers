<?php $theme = drupal_get_path("theme",$GLOBALS['theme']) ;?>
   
<div <?php print $attributes;?>>

    <div class="clear"></div>

     <?php print render($page['header']); ?>

    <div class="l-content">
        <?php print render($tabs); ?>
        <?php print $messages; ?>
        <?php print render($page['content']); ?>
    </div>

</div>

<div class="l-services">
     <?php print render($page['services']); ?>
</div>

<div class="l-map">
    <?php print render($page['map']); ?>
</div>

<footer class="l-footer" >
    <?php print render($page['footer']); ?>
    Test de test de test
</footer>

<div class="l-off h">
    <?php print render($page['off']); ?>
</div>
