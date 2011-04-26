<?php
// $Id: views-view-list.tpl.php,v 1.3 2008/09/30 19:47:11 merlinofchaos Exp $
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */

global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
?>

<div class="twitter">
	<h3><img src="<?php print $themeurl; ?>/design_packs/gray/images/ansicon.jpg" alt="" width="20" />&nbsp;&nbsp;&nbsp;LATEST TWEETS</h3>
	<div class="clear"></div>
	<div class="tweetwrap">
    <?php foreach ($rows as $id => $row): ?>
     <?php print $row; ?>
    <?php endforeach; ?>
	<div class="clear"></div>
	</div>
<a id="followers" href="http://www.twitter.com/answerracing" rel="external">FOLLOW US</a>
<div class="clear"></div>
</div>
