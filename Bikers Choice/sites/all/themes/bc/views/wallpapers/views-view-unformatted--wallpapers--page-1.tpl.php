<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="extrapaps">
<ul class="papertrail">
<?php foreach ($rows as $id => $row): ?>
  <li>
    <?php print $row; ?>
  </li>
<?php endforeach; ?>
</ul>
<div class="clear"></div>
</div>