<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<ul class="treemenu">
  <li>
<?php if (!empty($title)): ?>
  <a href="javascript: void(0);"><?php print strip_tags($title); ?></a>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
    <?php $node=node_load($view->result[$id]->nid); ?>
    <?php $category = $node->field_category['und'][0]['value']; ?>
    <?php $subcategory = $node->field_subcategory['und'][0]['value']; ?>
    <ul class="treeitems">
    <?php print views_embed_view('videos', 'block_2', $category, $subcategory); ?>
    </ul>
    </li>
  </ul>
<?php endforeach; ?>
</li>
</ul>