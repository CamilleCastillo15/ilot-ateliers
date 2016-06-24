<?php

    $base = base_path();

    $visuel_offre = variable_get("ateliersmod_fsvisuels_actualites");
    $file = file_load($visuel_offre);
    $img = image_style_url("header", $file->uri);

    $couleur = ['field_couleur'];

    print render($couleur);

?>

<div class="offres-speciales">
    <div class="imagetitle">
        <div class="image">
            <img src="<?php print $img; ?>" alt="header" title="header" />
        </div>
        <div class="title">actualités</div>
    </div>
    <div class="bloc-grille-base-offres">
           <?php print $view; ?>
    </div>
</div>

