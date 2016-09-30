<?php

    $body = field_view_field("node",$node,'body');

?>
<div class="mentions-legales bloc-grille-base">

        <div class="body-mentions-legales">
            <?php print render($body); ?>
        </div>

</div>
