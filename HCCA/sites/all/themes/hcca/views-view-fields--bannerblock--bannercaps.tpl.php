<?php
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
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */

$linkpath = drupal_lookup_path('alias','node/'. $fields['field_bannerlink']->content);

?>
<div class="slidecap">
		<div class="slidetop"></div>
		<div class="titlefix"><h2><?php print $fields['title']->content; ?></h2></div>
		<div class="slidecopy">
			<p><?php print $fields['field_bannercap']->content; ?><br /><br />
				<?php if($fields['field_bannerlinktext']->content != '') { ?>&gt;&gt; <a href="<?php print $linkpath; ?>" title="<?php print $fields['field_bannerlinktext']->content; ?>"><?php print $fields['field_bannerlinktext']->content; ?></a><?php } ?>
			</p>
		</div>	
		<div class="prevnext">
			<a class="prevslide" href="javascript: void(0);">&lt;</a>
			<a class="nextslide" href="javascript: void(0);">&gt;</a>
		</div>
</div>