<?php

    $img_fond = field_view_field("node",$node,'field_image_fond');
    $title = field_view_field("node",$node,'field_titre');

    $view = views_get_view('ateliers');
    $view->execute();

    $result = $view->result;

    //dpm($result);


 ?>
         
        <?php $theme = drupal_get_path("theme",$GLOBALS['theme']) ;?>
        
        <div class="home-services bkg-blanc"> 
            
            <div class="imagetitle">
                <div class="image"><?php print render($img_fond); ?></div>
                <div class="title"><?php print render($title); ?></div>
            </div>
            
            <div class="container-containers bloc-grille-base">
                <?php         
                    foreach($result as $key => $value){ 
                        //get atelier node
                        $n = node_load($value->nid);
                        //construct link to node
                        $link =drupal_get_path_alias("node/".$value->nid);
                        //get atelier fields
                        $im = field_get_items("node",$n,'field_image_presentation');
                        
                        $im_r = field_view_value('node', $n, 'field_image_presentation', $im[0], array(
                            'type' => 'image',
                            'settings' => array(
                                'image_style' => 'slider',
                            ),
                        ));
                        $im_hr = field_view_value('node', $n, 'field_image_presentation', $im[0], array(
                            'type' => 'image',
                            'settings' => array(
                                'image_style' => 'header',
                            ),
                        ));
                        
                        
                        
                        $tx = field_view_field("node",$n,'field_texte_presentation');
                        $picto = field_view_field("node",$n,'field_picto');
                        $title = field_view_field("node",$n,'field_title'); ?>  
                
                        <div class="container">
                            <div class="inner">  
                                <div class="pictomobile">
                                    <?php print render($im_hr); ?>
                                </div>
                                <div class="picto">
                                   <?php print render($picto); ?>
                                </div>
                                <h1 class="title">
                                   <?php print render($title); ?>
                                </h1>
                                <div class="pictotitlecontainer">
                                    <div class="image">
                                       <?php print render($im_r); ?>
                                    </div>                                        
                                </div>
                                <div class="text-presentation">
                                     <?php print render($tx); ?>
                                </div>
                                <?php 
                                print l("en savoir plus",$link,array("html"=>true, 'attributes' => array('class' => array('en_savoir_plus'))));

                                ?>
                            </div>
                        </div>
                        
                        <?php    }?>
            
            </div>
            
        </div>
        


           
