<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="prodcontrols">
  <?php $i = 1; ?>
  <?php foreach ($rows as $id => $row): ?>
    <?php while($i<=8): ?>
      <a href="javascript: void(0);"><?php print $i; ?></a>
      <?php $i++; ?>
    <?php endwhile; ?>
  <?php endforeach; ?>
</div>

<ul class="jcarousel">
<?php foreach ($rows as $id => $row): ?>
  <li><?php print $row; ?></li>
<?php endforeach; ?>
<ul>