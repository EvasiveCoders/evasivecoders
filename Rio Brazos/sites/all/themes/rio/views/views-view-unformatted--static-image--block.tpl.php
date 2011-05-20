<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="bannermask"></div>
<?php foreach ($rows as $id => $row): ?>
	<div class="staticitem">
    <?php print $row; ?>
	</div>
<?php endforeach; ?>