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
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();

if($fields['field_member_level_value']->content == "Platinum Plus") {
	$badgeclass = "platplus";
}
if($fields['field_member_level_value']->content == "Platinum") {
	$badgeclass = "plat";
}
if($fields['field_member_level_value']->content == "Gold") {
	$badgeclass = "gold";
}
if($fields['field_member_level_value']->content == "Silver") {
	$badgeclass = "silver";
}
if($fields['field_member_level_value']->content == "Bronze") {
	$badgeclass = "bronze";
}
?>

<div class="memberrow">
	<div class="companytitle">
	<span style="float: left;"><?php print $fields['field_member_company_value']->content; ?></span>
	<?php if($fields['field_member_isally_value']->content != '') { ?>
		<span class="allybadgedir <?php print $badgeclass; ?>badge"><a href="javascript: void(0);" title="<?php print $fields['field_member_level_value']->content; ?> Member"></a></span>
	<?php } 
	if($fields['field_member_offers_value']->content != '') { ?>
	    <span class="offersbadge"><a href="javascript: void(0);" title="Member to Member Benefits"></a></span>
	<?php } ?>
	<span style="float: right;">Member Since: <?php print $fields['field_member_join_value']->content; ?></span>
	</div>
	<div class="companyinfo">
		<?php if($fields['field_member_logo_fid']->content != '') { ?><img style="float: right; margin: 0 0 0 10px;" src="<?php print $fields['field_member_logo_fid']->content; ?>" height="50" alt="Member #<?php print $fields['title']->content; ?>" /><?php } ?>
		<div class="coaddy">
			<?php if($fields['field_member_street_value']->content != '' && $fields['field_member_cat_value']->content != 'Individuals') { print $fields['field_member_street_value']->content; ?><?php } else { ?>Street Address Not Available (Individual Residence)<?php }?><br />
			<?php if($fields['field_member_city_value']->content != '') { print $fields['field_member_city_value']->content; } ?>, TX <?php if($fields['field_member_zip_value']->content != '') { print $fields['field_member_zip_value']->content; } ?><br /><br />
			<strong>Phone:.....</strong> <?php if($fields['field_member_phone1_value']->content != '') { ?><a href="tel:<?php print $fields['field_member_phone1_value']->content; ?>"><?php print $fields['field_member_phone1_value']->content; ?></a> <?php } if($fields['field_member_phone2_value']->content != '') { ?> || <a href="tel:<?php print $fields['field_member_phone2_value']->content; ?>"><?php print $fields['field_member_phone2_value']->content; ?></a> <?php } ?>
		</div>
	</div>
	<div class="cocats" style="float: left;">
		<?php print $fields['field_member_cat_value']->content; ?>
		<span style="float: right; text-align: right; font-size: 11px;"><?php print $fields['view_node']->content; ?></span>
	</div>
	<div class="clear"></div>
</div>