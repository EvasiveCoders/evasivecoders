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
  global $base_url;
  $current_url = 'http://' .$_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];
?>
<div class="featvid">
  <h3><?php print $fields['title']->content; ?></h3>
  <?php if($fields['field_vid_or_doc']->content == 'Technical Video') { ?>
  <div class="vidframe">
    <iframe src="<?php print strip_tags($fields['field_video_link']->content); ?>#player" style="width: 700px; height: 330px; overflow: hidden;"></iframe>
  </div>
  <div class="vidsocial">
    <div id="fblikeit">
	    <iframe src="http://www.facebook.com/plugins/like.php?href=<?php print $current_url; ?>&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light"></iframe>
    </div>
    <div id="ytube">
      <a href="http://www.youtube.com/user/BikersChoiceProducts" rel="external"><img src="<?php print $base_url; ?>/sites/all/themes/bc/css/img/yt-long.png" alt="Follow us on YouTube" /></a>
    </div>
  </div>
  <?php } else { ?>
  <div class="techdl"><h5><a href="<?php print strip_tags($fields['field_resource']->content); ?>">&bull; click to download PDF &bull;</a></h5></div>
  <script type="text/javascript">
   jQuery(function() {
     jQuery('#content-container').wrapInner('<div id="resback" />');
   });
  </script>
  <?php } ?>
  <div class="viddesc">
    <?php print $fields['field_technical_description']->content; ?>
  </div>
</div>