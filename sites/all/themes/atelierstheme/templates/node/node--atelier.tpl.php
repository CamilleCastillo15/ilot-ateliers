<?php

    $body = field_view_field("node",$node,'field_body');

?>
<div class="mentions-legales">

        <div class="body-mentions-legales">
            <?php print render($body); ?>
        </div>

</div>
