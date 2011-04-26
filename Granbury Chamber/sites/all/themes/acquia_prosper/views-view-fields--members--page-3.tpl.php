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

<?php
// $Id: node-product.tpl.php,v 1.1.2.3 2009/11/11 05:26:25 sociotech Exp $
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
?>

<div class="memberprofile">
<div class="profileleft">
	<h1 class="activeco"><?php print $fields['field_member_company_value']->content; ?>
		<?php if($fields['field_member_isally_value']->content != '') { ?>
				<span class="allybadge <?php print $badgeclass; ?>>"><?php print $fields['field_member_level_value']->content; ?></span>
		<?php } ?>
	</h1>
	<h3><?php if($fields['field_member_street_value']->content != '' && $fields['field_member_cat_value']->content != 'Individuals') { print $fields['field_member_street_value']->content; ?><?php } else { ?>Street Address Not Available (Individual Residence)<?php }?></h3>
	<div class="mapaddy" style="display: none;"><?php print $fields['field_member_street_value']->content; ?>, <?php print $fields['field_member_city_value']->content; ?> <?php print $fields['field_member_zip_value']->content; ?></div>

	<div class="aboutmember">
	  <div class="memsince"><strong>Member Since:</strong> <?php print $fields['field_member_join_value']->content; ?></div>
	  <div class="memcat">
		<?php print $fields['field_member_cat_value']->content; ?>
	  </div>
	  <?php if($fields['field_member_website_value']->content != '') { ?><div class="memweb"><strong>Member Website:</strong> <a href="http://<?php print $fields['field_member_website_value']->content; ?>" rel="external"><?php print $fields['field_member_website_value']->content; ?></a></div><?php } ?>
	    
	
	  <?php if($fields['body']->content != '') { ?><div id="memdesc"><?php print $fields['body']->content; ?></div><?php } ?>
	</div>
</div>

<div class="profileright">
	<a href="http://<?php print $fields['field_member_website_value']->content; ?>"><img width="325" src="<?php if($fields['field_member_logo_fid']->content != '') { print $fields['field_member_logo_fid']->content; } else { print $baseurl; ?>/sites/default/files/members/nologo.jpg<?php } ?>" alt="<?php print $fields['field_member_company_value']->content; ?>" /></a>
	<div class="membercontact">
		<?php if($fields['field_member_phone1_value']->content != '') { ?><div class="memphone"><i>Phone:......</i> <a href="tel:<?php print $fields['field_member_phone1_value']->content; ?>"><?php print $fields['field_member_phone1_value']->content; ?></a></div><?php } ?>
		<?php if($fields['field_member_phone2_value']->content != '') { ?><div class="memphone2"><i>Phone2:....</i> <a href="tel:<?php print $fields['field_member_phone2_value']->content; ?>"><?php print $fields['field_member_phone2_value']->content; ?></a></div><?php } ?>
		<?php if($fields['field_member_fax_value']->content != '') { ?><div class="memfax"><i>Fax:..........</i> <?php print $fields['field_member_fax_value']->content; ?></div><?php } ?>
	</div>
	<?php if($fields['field_member_offers_value']->content != '') { ?><a class="memoffers" href="javascript: void(0);">Member to Member Offers</a>
		<div class="offerdesc"><?php if($fields['field_member_offer_desc_value']->content != '') { print $fields['field_member_offer_desc_value']->content; } ?></div>
	<?php } ?>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>