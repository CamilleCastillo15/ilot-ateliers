<?php

    $img_fond = field_view_field("node",$node,'field_image_fond');

    $view = views_get_view('ateliers');
    $view->execute();

    $result = $view->result;

    //dpm($result);
    
    $img_auto_bleue = field_view_field("node",$node,'field_image_auto_bleue');
    $img_menuiserie = field_view_field("node",$node,'field_image_menuiserie');
    $img_ilot_gourmand = field_view_field("node",$node,'field_image_ilot_gourmand');

    $auto_bleue_text = field_view_field("node",$node,'field_auto_bleue');
    $menuiserie_text = field_view_field("node",$node,'field_menuiserie');
    $ilot_gourmand_text = field_view_field("node",$node,'field_ilot_gourmand');

    $auto_bleue_picto = field_view_field("node",$node,'field_picto_auto_bleue');
    $menuiserie_picto = field_view_field("node",$node,'field_picto_menuiserie');
    $ilot_gourmand_picto = field_view_field("node",$node,'field_picto_ilot_gourmand');

 ?>
         
        <?php $theme = drupal_get_path("theme",$GLOBALS['theme']) ;?>
        
        <div class="home-services bkg-blanc"> 
            
            <div class="imagetitle">
                <div class="image"><?php print render($img_fond); ?></div>
                <div class="title">Nos Services</div>
            </div>
            
            <div class="container-containers">
                  <?php 
        
                    foreach($result as $key => $value){ ?>
                       
                       <div class="container"> 
                        
                            <?php

                                    $n = node_load($value->nid);
                                    $im = field_view_field("node",$n,'field_image_presentation');
                                    $tx = field_view_field("node",$n,'field_texte_presentation');
                                    $picto = field_view_field("node",$n,'field_picto');
                                    $title = field_view_field("node",$n,'field_title');
                     
                                    echo "<div class=\"pictotitlecontainer\">";
                                        echo "<div class=\"image\">";
                                            print render($im);
                                        echo "</div>";
                                        echo "<div class=\"pictotitle\">";
                                            print render($picto);
                                        echo "</div>";
                                    echo "</div>";
                                    echo "<div class=\"text-presentation\">";
                                        print render($tx);
                                    echo "</div>";
                                ?>

                            </div>
                        
                        <?php    }?>
        <?php /*
        
                <div class="container c-auto-bleue">

                    <?php print render($img_auto_bleue); ?>

                    <div class="container-picto">

                        <?php print render($auto_bleue_picto); ?> 

                    </div>

                     <div class="text-presentation">

                        <?php print render($auto_bleue_text); ?>

                    </div>

                </div>

                <div class="container c-menuiserie">

                    <?php print render($img_menuiserie); ?>

                    <div class="container-picto">

                         <?php print render($menuiserie_picto); ?>

                    </div>

                    <div class="text-presentation">

                        <?php print render($menuiserie_text); ?>

                        <div class="plus">

                            en savoir plus    > 

                        </div>

                    </div>

                </div>

                <div class="container c-ilot-gourmand">

                    <?php print render($img_ilot_gourmand); ?>

                    <div class="container-picto">

                        <?php print render($ilot_gourmand_picto); ?> 

                    </div>

                     <div class="text-presentation">

                        <?php print render($ilot_gourmand_text); ?>

                        <div class="plus">

                            en savoir plus    > 

                        </div>

                    </div>

                </div>
                
            */ 
            ?>
            
            </div>
            
        </div>
        


           
