<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="bannermask"></div>
<div id="banners">
<?php foreach ($rows as $id => $row): ?>
	<div class="cycleitem">
    <?php print $row; ?>
	</div>
<?php endforeach; ?>
</div>
<?php
drupal_add_css(drupal_get_path('theme', 'hcca') . '/css/hideblock7.css');
?>