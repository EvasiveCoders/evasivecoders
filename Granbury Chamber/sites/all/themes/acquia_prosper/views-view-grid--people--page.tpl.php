<?php
// $Id: views-view-grid.tpl.php,v 1.3.2.1 2010/03/12 01:05:42 merlinofchaos Exp $
/**
 * @file views-view-grid.tpl.php
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 *
 * @ingroup views_templates
 */
?>
<h2 class="block-title">Board of Directors</h2>
<h5 style="font-style: italics;">Click on a thumbnail for more information</h5>
<table class="views-view-grid">
  <tbody>
    <?php foreach ($rows as $row_number => $columns): ?>
      <?php
        $row_class = 'row-' . ($row_number + 1);
        if ($row_number == 0) {
          $row_class .= ' row-first';
        }
        if (count($rows) == ($row_number + 1)) {
          $row_class .= ' row-last';
        }
      ?>
      <tr class="<?php print $row_class; ?>">
        <?php foreach ($columns as $column_number => $item): ?>
          <td class="<?php print 'col-'. ($column_number + 1); ?>">
            <?php print $item; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<script type="text/javascript">
jQuery(function() {
 jQuery('.peopleinfo').hide();
 jQuery('.peoplepicboard').click(function() {
  var openbio = jQuery(this).parents().children('.peopleinfo').html();
  var thisframe = '<div id="thisframe">' + openbio + '</div>';
//  alert(thisframe);
  jQuery(this).colorbox({inline: true, href: thisframe, width: '600px', height: '300px'});
 });
});
</script>