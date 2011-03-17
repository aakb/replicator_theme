<?php if ($content['top']) { ?>
<div class="clear panel-col-top">
  <?php print $content['top']; ?>
</div>
<?php } ?>

<?php if ($content['left']) { ?>
  <div class="<?php if (!$content['right']) { ?>suffix-8 omega <?php } ?>grid-4 alpha panel-col-left">
    <?php print $content['left']; ?>
  </div>
<?php } ?>

<?php if ($content['right']) { ?>
<div class="<?php if (!$content['left']) { ?>prefix-4 alpha <?php } ?>grid-8 omega panel-col-right">
  <?php print $content['right']; ?>
</div>
<?php } ?>

<?php if ($content['bottom']) { ?>
<div class="clear panel-col-bottom">
  <?php print $content['bottom']; ?>
</div>
<?php } ?>