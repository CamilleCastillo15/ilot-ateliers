<?php if($teaser){ ?>

    <div class="atelier actu-detail">
    <div class="img-actu">
        <?php print render($imgactu_render); ?>
    </div>
    <div class="date">
        <div class="day"><span class=""><?php print render($date_day); ?></span><?php print render($date_month); ?></div>
        <div class="year"><?php print render($date_fullyear); ?></div>
        <div class="socials"><div class="fb-share-button" data-href="<?php print $link;?>" data-layout="button_count" data-mobile-iframe="true"></div></div>
    </div>
    <div class="text-actus">
        <h1><?php print render($title); ?></h1>
        <div class="text-detail"> <?php

        $body = field_view_field("node",$node,'body',array(
              'label'=>'hidden',
              'type' => 'text_summary_or_trimmed',
              'settings'=>array('trim_length' => 50),
        ));

        print render($body); ?> </div>
        <div class="readmore">
             <?php print l("Lire la suite",$linke , array("html"=>true, 'attributes' => array('class' => array()))); ?>
        </div>
    </div>
</div>

<?php } else { ?>

    COUCOU NON - TEASER

<?php } ?>
