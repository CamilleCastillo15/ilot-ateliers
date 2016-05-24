<?php

$theme = base_path() . drupal_get_path("theme",$GLOBALS['theme']) ;

$base = base_path();

$visuel_contact = variable_get(ateliersmod_fsvisuels_contact);
dpm($visuel_contact);

$file = file_load($visuel_contact);
dpm($file->uri);

$img = image_style_url("header", $file->uri);

/**
 * @file
 * Customize confirmation screen after successful submission.
 *
 * This file may be renamed "webform-confirmation-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-confirmation.tpl.php" to affect all webform confirmations on your
 * site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $progressbar: The progress bar 100% filled (if configured). This may not
 *   print out anything if a progress bar is not enabled for this node.
 * - $confirmation_message: The confirmation message input by the webform
 *   author.
 * - $sid: The unique submission ID of this submission.
 * - $url: The URL of the form (or for in-block confirmations, the same page).
 */
?>

<div class="imagetitle">

    <div class="image">

        <img src="<?php print $img; ?>" alt="header" title="header" />

    </div>

    <div class="title">Contact</div>

</div>

<div class="bloc-grille-base">

    <div class="block-contact">

       <div class="block-contact-detail">

            <img class="mailbox" src="<?php print $theme ?>/images/mailbox_blanc.svg" alt="logo" title="logo" />

           <div class="contactez-nous">

               Vous nous avez contactés

           </div>

        </div>

    </div>

<?php print $progressbar; ?>

<div class="webform-confirmation">
  <?php if ($confirmation_message): ?>
    <?php print $confirmation_message ?>
  <?php else: ?>
    <p><?php print t('Thank you, your submission has been received.'); ?></p>
  <?php endif; ?>
</div>

<div class="webform-confirmation-link">

    <div class="links">
      <a href="<?php print $url; ?>"><?php print t('Go back to the form') ?></a>
    </div>

</div>
