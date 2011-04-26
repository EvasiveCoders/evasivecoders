<?php
// $Id: search-theme-form.tpl.php,v 1.1.2.1 2009/12/02 01:09:00 sociotech Exp $

/**
 * @file search-theme-form.tpl.php
 * Default theme implementation for displaying a search form directly into the
 * theme layout. Not to be confused with the search block or the search page.
 *
 * Available variables:
 * - $search_form: The complete search form ready for print.
 * - $search: Array of keyed search elements. Can be used to print each form
 *   element separately.
 *
 * Default keys within $search:
 * - $search['search_theme_form']: Text input area wrapped in a div.
 * - $search['submit']: Form submit button.
 * - $search['hidden']: Hidden form elements. Used to validate forms when submitted.
 *
 * Since $search is keyed, a direct print of the form element is possible.
 * Modules can add to the search form so it is recommended to check for their
 * existance before printing. The default keys will always exist.
 *
 *   <?php if (isset($search['extra_field'])): ?>
 *     <div class="extra-field">
 *       <?php print $search['extra_field']; ?>
 *     </div>
 *   <?php endif; ?>
 *
 * To check for all available data within $search, use the code below.
 *
 *   <?php print '<pre>'. check_plain(print_r($search, 1)) .'</pre>'; ?>
 *
 * @see template_preprocess_search_theme_form()
 */
?>
<?php
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
?>
<?php /* Set search form label values and functions */ ?>
<?php $search_label = t('Search...'); ?>
<?php $search_phrase = t('Enter the terms you wish to search for.'); ?>
<?php $on_blur = "if(this.value=='') this.value='" . $search_label . "';"; ?>
<?php $on_focus = "if(this.value=='" . $search_label . "') this.value='';"; ?>

<div id="search">
	<div id="searchicon">
		<a id="subscriber" href="<?php print check_url($front_page); ?>interact">SUBSCRIBE</a>
		<a class="fbicon" href="http://www.facebook.com/answerracing" rel="external"><img src="<?php print $baseurl; ?>sites/all/themes/acquia_prosper/design_packs/gray/images/face.jpg" width="25" height="23" alt="Keep up with Answer on Facebook" /></a>
		<a class="twittericon" href="http://twitter.com/answerracing" rel="external"><img src="<?php print $baseurl; ?>sites/all/themes/acquia_prosper/design_packs/gray/images/twit.jpg" width="25" height="23" alt="Follow Answer on Twitter" /></a>
		<a class="myspaceicon" href="http://www.myspace.com/answerracingusa" rel="external"><img src="<?php print $baseurl; ?>sites/all/themes/acquia_prosper/design_packs/gray/images/myspace.jpg" width="25" height="23" alt="Check out Answer on MySpace" /></a>
		<a class="youtubeicon" href="http://youtube.com/answerracing1" rel="external"><img src="<?php print $baseurl; ?>sites/all/themes/acquia_prosper/design_packs/gray/images/youtube.jpg" width="25" height="23" alt="Favorite Answer on YouTube" /></a>
	</div>
	<div id="searcharea"><input type="text" maxlength="128" name="search_theme_form" id="edit-search-theme-form-header" size="15" title="<?php print $search_phrase; ?>" value="<?php print $search_label; ?>" onblur="<?php print $on_blur; ?>" onfocus="<?php print $on_focus; ?>" class="form-text" /></div>
    <div id="searchbutton"><input type="image" name="op" src="<?php print base_path() . $directory; ?>/design_packs/gray/images/searchsubmit.jpg" alt="Search" /></div>
  <?php print $search['hidden'] ?>
</div>