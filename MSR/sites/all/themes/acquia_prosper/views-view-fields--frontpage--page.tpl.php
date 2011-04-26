<?php
// $Id: views-view-fields.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div id="featured">
	<?php if($fields['field_newimage_fid']->content != "") { ?><div id="newarea" style="background-image: url(<?php print $fields['field_newimage_fid']->content ?>)"><a href="<?php print $fields['field_newpath_value']->content ?>"><img src="sites/all/themes/acquia_prosper/design_packs/gray/images/newarea_over.png" alt="" /></a></div> <?php } ?>
	<?php if($fields['field_propicksimage_fid']->content != "") { ?><div id="propicks" style="background-image: url(<?php print $fields['field_propicksimage_fid']->content ?>)"><a href="<?php print $fields['field_propickspath_value']->content ?>"><img src="sites/all/themes/acquia_prosper/design_packs/gray/images/propicks_over.png" alt="" /></a></div><?php } ?>
	<?php if($fields['field_freshproductimage_fid']->content != "") { ?><div id="freshproducts" class="noborder" style="background-image: url(<?php print $fields['field_freshproductimage_fid']->content ?>)"><a href="<?php print $fields['field_freshproductpath_value']->content ?>"><img src="sites/all/themes/acquia_prosper/design_packs/gray/images/freshprods_over.png" alt="" /></a></div><?php } ?>
	<?php if($fields['field_mostsearchedimage_fid']->content != "") { ?><div id="mostsearched" class="nobottommargin" style="background-image: url(<?php print $fields['field_mostsearchedimage_fid']->content ?>)"><a href="<?php print $fields['field_mostsearchedpath_value']->content ?>"><img src="sites/all/themes/acquia_prosper/design_packs/gray/images/searched_over.png" alt="" /></a></div><?php } ?>
	<?php if($fields['field_staffpicksimage_fid']->content != "") { ?><div id="staffpicks" class="nobottommargin" style="background-image: url(<?php print $fields['field_staffpicksimage_fid']->content ?>)"><a href="<?php print $fields['field_staffpickspath_value']->content ?>"><img src="sites/all/themes/acquia_prosper/design_packs/gray/images/staffpicks_over.png" alt="" /></a></div><?php } ?>
	<?php if($fields['field_amateurspotimage_fid']->content != "") { ?><div id="amspot" class="noborder nobottommargin" style="background-image: url(<?php print $fields['field_amateurspotimage_fid']->content ?>)"><a href="<?php print $fields['field_amateuspotpath_value']->content ?>"><img src="sites/all/themes/acquia_prosper/design_packs/gray/images/amspot_over.png" alt="" /></a></div><?php } ?>
</div>
