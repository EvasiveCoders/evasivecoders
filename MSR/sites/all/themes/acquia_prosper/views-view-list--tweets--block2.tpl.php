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
?>
<?php
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
?>

<h1 class="title">MSR ON TWITTER <img src="<?php print $themeurl ?>/design_packs/gray/images/h1titlebg.jpg" alt="<?php print $title; ?>" /></h1>
<div class="dotborder"></div>
<div class="twitter">
    <?php foreach ($rows as $id => $row): ?>
     <?php print $row; ?>
    <?php endforeach; ?>
</div class="clear"></div>
<div class="followmsr"><a href="http://twitter.com/msrmx" title="follow msr on twitter" rel="external"><img src="<?php print $themeurl ?>/design_packs/gray/images/followmsr.jpg" alt="follow msr on twitter" /></a><br /><span>Follow MSR on Twitter for the latest news about your favorite riders and industry related updates.</span><br />
<a href="http://www.youtube.com/user/msrseventyone" title="follow msr on YouTube" rel="external"><img src="<?php print $themeurl ?>/design_packs/gray/images/msrtube-icon.jpg" alt="follow msr on YouTube" /></a>
</div>
</div>
