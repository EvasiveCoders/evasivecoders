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
<?php
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
?>
<div id="frontslider<?php if($fields['field_intro_slide2_fid']->content == ""){ ?>-noslide<?php } ?>">
	<div class="items">
		<?php if($fields['field_intro_slide1_fid']->content != ""){ ?> <div id="slide1"><a href="<?php print $fields['field_intro_slide1_path_value']->content ?>"><img width="960" src="<?php print $baseurl . $fields['field_intro_slide1_fid']->content ?>" alt="" /></a></div> <?php } ?>
		<?php if($fields['field_intro_slide2_fid']->content != ""){ ?> <div id="slide2"><a href="<?php print $fields['field_intro_slide2_path_value']->content ?>"><img width="960" src="<?php print $baseurl . $fields['field_intro_slide2_fid']->content ?>" alt="" /></a></div> <?php } ?>
		<?php if($fields['field_intro_slide3_fid']->content != ""){ ?> <div id="slide3"><a href="<?php print $fields['field_intro_slide3_path_value']->content ?>"><img width="960" src="<?php print $baseurl . $fields['field_intro_slide3_fid']->content ?>" alt="" /></a></div> <?php } ?>
		<?php if($fields['field_intro_slide4_fid']->content != ""){ ?> <div id="slide4"><a href="<?php print $fields['field_intro_slide4_path_value']->content ?>"><img width="960" src="<?php print $baseurl . $fields['field_intro_slide4_fid']->content ?>" alt="" /></a></div> <?php } ?>
		<?php if($fields['field_intro_slide5_fid']->content != ""){ ?> <div id="slide5"><a href="<?php print $fields['field_intro_slide5_path_value']->content ?>"><img width="960" src="<?php print $baseurl . $fields['field_intro_slide5_fid']->content ?>" alt="" /></a></div> <?php } ?>
	</div>
	<div class="clear"></div>
</div>
<?php if($fields['field_intro_slide2_fid']->content != ""){ ?>
<div id="controlwrapper">
<div style="float: right; width: auto; margin: 0 5px 0 0;">
<div id="prevslide"><a href="javascript: void(0);">&nbsp;</a></div>
<div id="controls">
	<?php if($fields['field_intro_slide1_fid']->content != ""){ ?> <div><a href="#slide1" class="first" title="<?php print $fields['field_intro_slide1_color_value']->content ?>">1</a></div> <?php } ?>
	<?php if($fields['field_intro_slide2_fid']->content != ""){ ?> <div><a href="#slide2" title="<?php print $fields['field_intro_slide2_color_value']->content ?>">2</a></div> <?php } ?>
	<?php if($fields['field_intro_slide3_fid']->content != ""){ ?> <div><a href="#slide3" title="<?php print $fields['field_intro_slide3_color_value']->content ?>">3</a></div> <?php } ?>
	<?php if($fields['field_intro_slide4_fid']->content != ""){ ?> <div><a href="#slide4" title="<?php print $fields['field_intro_slide4_color_value']->content ?>">4</a></div> <?php } ?>
	<?php if($fields['field_intro_slide5_fid']->content != ""){ ?> <div><a href="#slide5" title="<?php print $fields['field_intro_slide5_color_value']->content ?>">5</a></div> <?php } ?>
</div>
<div id="nextslide"><a href="javascript: void(0);">&nbsp;</a></div>
</div>
</div>
<?php } ?>