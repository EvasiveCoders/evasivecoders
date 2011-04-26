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
<div style="width: 100%; float: left; clear: both;">
<div class="postdate"><span>
	<?php 
		$postdate = $fields['created']->content;
		$gettime = (time() - strtotime($fields['created']->content)) / 86400;
		$timesince = $gettime;
		//echo $timesince;
		$daysago = substr($gettime, 0, 1);
		
		$thisdate = "";
		if($timesince > "0" && $timesince < "2") {
			$thisdate = "LAST 24 HOURS";
		}
		if($timesince >= "2" && $timesince < "7") {
			$thisdate = $daysago . " DAYS AGO";
		} 
		if($timesince >= "7") {
			$thisdate = $postdate;
		}
		print $thisdate;
	?></span>
</div>
<div class="posttext">
	<h3><?php print $fields['title']->content; ?></h3>
	<?php print $fields['teaser']->content; ?>
</div>
<div class="clear">&nbsp;</div>
</div>
<div class="clear">&nbsp;</div>