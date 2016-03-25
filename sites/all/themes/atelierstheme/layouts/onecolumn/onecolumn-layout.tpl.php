  <?php $theme = drupal_get_path("theme",$GLOBALS['theme']) ;?>
   

   <div <?php print $attributes;?>>
    <header class="l-header">
        <img class="tel" src="<?php print $theme; ?>/images/logo.png" alt="telephone" title="telephone" />
        Test de test de test
        <div class="burger h">
            <svg x="0px" y="0px" viewBox="0 0 108.15 65.812498" width="100%" height="100%">
                <g id="Calque_1" transform="matrix(2,0,0,2,-0.6,-2.2500009)" style="stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none">
                    <path id="XMLID_895_" class="st0" d="m 54.2,27.3 v -13 L 43,7.8 31.7,14.3 v 13 L 43,33.8 54.2,27.3 z" inkscape:connector-curvature="0" style="fill:none;stroke:#c0b396;stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none" />
                    <g id="g8" style="stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none">
                        <g id="g10" style="stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none">
                            <rect x="37.099998" y="20.4" id="burger_1" class="st1" width="11.8" height="0.80000001" id="rect18" style="fill:#c0b396;stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none" />
                            <rect x="37.099998" y="16.5" id="burger_2" class="st1" width="11.8" height="0.80000001" id="rect20" style="fill:#c0b396;stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none" />
                            <rect x="37.099998" y="24.4" id="burger_3" class="st1" width="11.8" height="0.80000001" id="rect22" style="fill:#c0b396;stroke-width:0.74999999;stroke-miterlimit:4;stroke-dasharray:none" />
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <?php print render($page['header']); ?>
    </header>
    <div class="clear"></div>
    <div class="l-content">
        <?php print render($tabs); ?>
        <?php print $messages; ?>
        <?php print render($page['content']); ?>
    </div>
   <div class="l-services">
         <?php print render($page['services']); ?>
    </div>

</div>
<div class="l-map">
        <div class="bloc1">
            
            <?php print render($page['map-block1']); ?>
            
        </div>
        <div class="bloc2">
            
            <div class="text">
               
               <div class="gros">
                   
                   Vous êtes un particulier ? <br />
                   Une entreprise ? <br />
                   
               </div>
               
                <br />

                Nous vous accueillons du lundi au vendredi,<br />
                de 8h30 à 18h
                <br />
                <br />
                ZA Montières - Espace Alliance<br />
                30 route d'Abbeville<br />
                80 000 Amiens<br />

                <img class="tel" src="<?php print $theme; ?>/images/telephone.png" alt="telephone" title="telephone" />
                03 59 99 08 80
            
                <div class="petit">

                    (numéro non surtaxé)

                </div>
                
                <br />
                
                les-ateliers@ilot.asso.fr<br />
                ateliers.ilot.asso.fr
                
            </div>
            
            <?php print render($page['map-block2']); ?>
            
        </div>
         
    </div>
<footer class="l-footer" >
    <?php print render($page['footer']); ?>
</footer>
<div class="l-off h">
    <?php print render($page['off']); ?>
</div>
