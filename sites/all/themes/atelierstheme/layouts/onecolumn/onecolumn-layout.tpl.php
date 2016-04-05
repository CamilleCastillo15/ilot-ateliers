<?php $theme = drupal_get_path("theme",$GLOBALS['theme']) ;?>
<div class="l-header">
        <?php print render($page['header']); ?>
    </div>
<div <?php print $attributes;?>>

    <div class="clear"></div>
    <div class="l-content">
        <?php /*print render($tabs);*/ ?>
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

</footer>

<div class="l-off h">
    <?php print render($page['off']); ?>
</div>
<div class="burger h">
    <svg id="Calque_1" data-name="Calque 1" viewBox="0 0 55.4 55.4">
        <circle class="cls-1" cx="27.7" cy="27.7" r="27.7"/>
        <path class="cls-2" id="burger_1"
            d="M31,33H2.7a1.06,1.06,0,0,0,0,2H31a0.85,0.85,0,0,0,.7-1C31.7,33.4,31.5,33,31,33Z"
            transform="translate(10.8 5.7)"/>
        <path class="cls-2" id="burger_2"
            d="M2.7,11H31a0.85,0.85,0,0,0,.7-1c0-.6-0.2-1-0.7-1H2.7A0.85,0.85,0,0,0,2,10,0.85,0.85,0,0,0,2.7,11Z" transform="translate(10.8 5.7)"/>
        <path class="cls-2" id="burger_3"
            d="M31,21H2.7A0.85,0.85,0,0,0,2,22a0.85,0.85,0,0,0,.7,1H31a0.85,0.85,0,0,0,.7-1C31.7,21.4,31.5,21,31,21Z" transform="translate(10.8 5.7)"/>
    </svg>
</div>

