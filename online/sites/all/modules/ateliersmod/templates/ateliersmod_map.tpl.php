<div class="bloc1">
    <div id="map" class="map">

    </div>
    <?php
        $var = variable_get("ateliersmod_fsgoogle_map");
        drupal_add_js(array('map' => $var), array('type' => 'setting'));
    ?>
</div>