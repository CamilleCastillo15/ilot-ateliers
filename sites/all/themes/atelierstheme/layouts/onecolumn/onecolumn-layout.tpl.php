<div <?php print $attributes;?>>
    <header class="l-header">
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
         <?php print render($page['map']); ?>
    </div>
<footer class="l-footer" >
    <?php print render($page['footer']); ?>
</footer>
<div class="l-off">
    <?php print render($page['off']); ?>
</div>
