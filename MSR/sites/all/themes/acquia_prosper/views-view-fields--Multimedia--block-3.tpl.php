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
?>
<?php if($fields['field_video_thumb_fid']->content != "") { ?>
	<div class="itemwrapper">
		<div class="desktopitem" style="background-image: url(<?php print $fields['field_video_thumb_fid']->content; ?>)"><a class="vidtrigger" href="<?php if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') || strpos($_SERVER['HTTP_USER_AGENT'], 'iPod') || strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')){ print $base_url; ?>/vids/<?php print $fields['field_media_iphone_data']->content; } else { ?>javascript: void(0);<?php } ?>"><span style="background: #000; padding: 2px; color: #fff;"><?php print $fields['title']->content; ?></span></a></div>
		<div class="thevid vid<?php print $fields['nid']->content; ?>">
			<object id="flowplayer" width="640" height="360" data="/sites/all/libraries/flowplayer3/flowplayer-3.2.2-0.swf"  
			    type="application/x-shockwave-flash" bgcolor="#000000"> 
			    <param name="movie" value="/sites/all/libraries/flowplayer3/flowplayer-3.2.2-0.swf" />  
			    <param name="allowfullscreen" value="true" />     
			    <param name="flashvars" value='config={"clip":{"url":"<?php print $base_url; ?>/vids/<?php print $fields['field_media_video_data']->content; ?>","autobuffering":"true","scaling":"fit","provider":"pseudo"},"plugins":{"pseudo":{"url":"/sites/all/libraries/flowplayer3/flowplayer.pseudostreaming-3.2.2.swf"}}}' /> 
			</object>
			
			</div>
	</div>
<?php } ?>
