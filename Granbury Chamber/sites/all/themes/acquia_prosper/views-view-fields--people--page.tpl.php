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

<div class="people">
	<div class="griditem" style="text-align: center; width: 190px;">
		<img class="peoplepic<?php if($fields['field_people_isboard_value']->content != '') { ?>board<?php } ?>" src="<?php print $fields['field_people_pic_fid']->content; ?>" alt="<?php print $fields['title']->content; ?>" width="180" /><br /><strong style="font-size: 14px;"><?php print $fields ['title']->content; ?></strong><br />
			<?php if($fields['field_people_seat_value']->content != '') { print $fields['field_people_seat_value']->content; } else { ?> &nbsp; <?php } ?>
	</div>
	<?php if($fields['field_people_isboard_value']->content != '') { ?>
	<div class="peopleinfo" style="width: 600px; height: 350px; float: left; display: block;">
		<h2 class="block-title"><?php print $fields ['title']->content; ?><?php if($fields['field_people_seat_value']->content != '') { ?> - <?php print $fields['field_people_seat_value']->content; } ?></h2>
		<div class="allinfo" style="font-size: 14px; line-height: 18px; font-weight: normal;">
			<img src="<?php print $fields['field_people_pic_fid']->content; ?>" alt="<?php print $fields['title']->content; ?>" width="150" style="float: right; padding: 0 0 10px 5px;"/>
			<?php print $fields['field_people_business_value']->content; ?><br />
			<span style="display: block;"><?php print $fields['field_people_street_value']->content; ?><br /><?php print $fields['field_people_city_value']->content; ?> TX, <?php print $fields['field_people_zip_value']->content; ?></span>
			-------------------------------------------<br />
			<strong>Phone: </strong><a href="tel:<?php print $fields['field_people_phone_value']->content; ?>"><?php print $fields['field_people_phone_value']->content; ?></a><br />
			<a href="http://<?php print $fields['field_people_web_value']->content; ?>" title="<?php print $fields['field_people_business_value']->content; ?> website" rel="external"><?php print $fields['field_people_web_value']->content; ?></a><br />
			-------------------------------------------<br />
			<?php print $fields['field_people_position_value']->content; ?>
		</div>
	</div>
	<?php } ?>
</div>