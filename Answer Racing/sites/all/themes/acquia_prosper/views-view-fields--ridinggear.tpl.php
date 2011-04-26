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

<div id="prodslider<?php if($fields['field_riding_gear_image2_fid']->content == ""){ ?>-noslide<?php } ?>">
	<div class="items">
		<?php if($fields['field_riding_gear_images_fid']->content != ""){ ?><div class="field-item"><?php print $fields['field_riding_gear_images_fid']->content; ?></div><?php } ?>
		<?php if($fields['field_riding_gear_image2_fid']->content != ""){ ?><div class="field-item"><?php print $fields['field_riding_gear_image2_fid']->content; ?></div><?php } ?>
		<?php if($fields['field_riding_gear_image3_fid']->content != ""){ ?><div class="field-item"><?php print $fields['field_riding_gear_image3_fid']->content; ?></div><?php } ?>
		<?php if($fields['field_riding_gear_image4_fid']->content != ""){ ?><div class="field-item"><?php print $fields['field_riding_gear_image4_fid']->content; ?></div><?php } ?>
		<?php if($fields['field_riding_gear_image5_fid']->content != ""){ ?><div class="field-item"><?php print $fields['field_riding_gear_image5_fid']->content; ?></div><?php } ?>
	</div>
	<div class="clear"></div>
</div>

<div class="prodinfo">
	<h1 class="prodtitle"><span><?php print $fields['title']->content; ?></span></h1>
	<div class="prodspecs">
		<strong>SPECIFICATIONS</strong>
		<ol>
		<?php print $fields['field_riding_gear_specs_value']->content; ?>
		</ol>
	</div>

	<div class="prodsizetable" style="color: #fff;">
		<h1>PART NUMBERS<span class="msrp"><?php print $fields['field_riding_gear_msrp_value']->content; ?></span></h1>
		<div id="partinsert"></div>
	</div>

<div class="clear"></div>
</div>