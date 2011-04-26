<?php
// $Id: page.tpl.php,v 1.1.2.5 2010/01/11 00:09:05 sociotech Exp $
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
?><!DOCTYPE html>
<html>
<head>
  <title><?php print $head_title; ?></title>
  <meta name="author" content="William Hall will@contemporary-communications.com" />
  <meta name="description" content="Answer Racing was started in 1976 with a vision to provide hardcore MX enthusiasts with products they can trust. We still have not lost site of the original goal." />

  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $setting_styles; ?>
  <!--[if IE 8]>
  <?php print $ie8_styles; ?>
  <![endif]-->
  <!--[if IE 7]>
  <?php print $ie7_styles; ?>
  <![endif]-->
  <!--[if lte IE 6]>
  <?php print $ie6_styles; ?>
  <![endif]-->
  <?php print $local_styles; ?>
  <?php print $scripts; ?>
<script type="text/javascript" src="<?php print check_url($front_page); ?>sites/all/modules/jquery_ui/jquery.ui/ui/jquery-ui.js"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.easing.custom = function (x, t, b, c, d) {
	var s = 1.70158; 
	if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
	return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
}
jQuery(function() {
 jQuery("#frontslider").scrollable({size: 1, speed: 2000, clickable: false, easing: 'custom', prev: '#prevslide', next: '#nextslide'}).autoscroll({interval: 5500}).circular().navigator({navi: "#controls", naviItem: 'a', activeClass: 'current'});
 jQuery("a[rel='external']").click(function(){ this.target = "_blank"; }); 
 jQuery("#pid-athletes .views-view-grid td a img").mouseenter(function() {
  jQuery(this).css("opacity", "0.5");
 }).mouseleave(function() {
  jQuery(this).css("opacity", "1.0");	
 });
});
//--><!]]>
</script>
</head>

<body id="<?php print $body_id; ?>" class="<?php print $body_classes; ?>">
<?php if (!empty($admin)) print $admin; ?>
<div id="sublogo">
	<a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $themeurl; ?>/design_packs/gray/images/sublogo.jpg" alt="<?php print t('Home'); ?>" /></a>
</div>
<div id="newsandsearch">
<?php print theme('grid_block', $search_box, 'search-box'); ?>
</div>
<div id="new-menu-wrapper" class="new-menu-wrapper">
		<?php 
			$block = module_invoke('nice_menus', 'block' , 'view', 1); 
			print $block['content'];
		?>
</div><!-- /header-primary-menu-wrapper -->

  <div id="page" class="page">
    <div id="page-inner" class="page-inner">

      <!-- header-group row: width = grid_width -->
      <div id="header-group-wrapper" class="header-group-wrapper full-width">
        <div id="header-group" class="header-group row <?php print $grid_width; ?>">
          <div id="header-group-inner" class="header-group-inner inner clearfix">
            <?php if ($logo): ?>
            <div id="header-site-info" class="header-site-info block">
              <div id="header-site-info-inner" class="header-site-info-inner inner clearfix">
                <?php if ($logo): ?>
                <?php endif; ?>
              </div><!-- /header-site-info-inner -->
            </div><!-- /header-site-info -->
            <?php endif; ?>
            <?php print $header; ?>
          </div><!-- /header-group-inner -->
        </div><!-- /header-group -->
      </div><!-- /header-group-wrapper -->

      <!-- preface-top row: width = grid_width -->
      <?php print theme('grid_row', $preface_top, 'preface-top', 'full-width', $grid_width); ?>

      <!-- main row: width = grid_width -->
      <div id="main-wrapper" class="main-wrapper full-width">
        <div id="main" class="main row <?php print $grid_width; ?>">
          <div id="main-inner" class="main-inner inner clearfix">
		  <div id="newbreadcrumbs"><div class="breadcrumb"><?php print theme('breadcrumb', drupal_get_breadcrumb()); ?></div></div>

            <?php print theme('grid_row', $sidebar_first, 'sidebar-first', 'nested', $sidebar_first_width); ?>

            <!-- main group: width = grid_width - sidebar_first_width -->
            <div id="main-group" class="main-group row nested <?php print $main_group_width; ?>">
              <div id="main-group-inner" class="main-group-inner inner">
                <?php print theme('grid_row', $preface_bottom, 'preface-bottom', 'nested'); ?>

                <div id="main-content" class="main-content row nested">
                  <div id="main-content-inner" class="main-content-inner inner">
                    <!-- content group: width = grid_width - (sidebar_first_width + sidebar_last_width) -->
                    <div id="content-group" class="content-group row nested <?php print $content_group_width; ?>">
                      <div id="content-group-inner" class="content-group-inner inner">
                        <?php if ($content_top || $help || $messages): ?>
                        <div id="content-top" class="content-top row nested">
                          <div id="content-top-inner" class="content-top-inner inner">
                            <?php print theme('grid_block', $help, 'content-help'); ?>
                            <?php print theme('grid_block', $messages, 'content-messages'); ?>
                            <?php print $content_top; ?>
                          </div><!-- /content-top-inner -->
                        </div><!-- /content-top -->
                        <?php endif; ?>

                        <div id="content-region" class="content-region row nested">
                          <div id="content-region-inner" class="content-region-inner inner">
                            <a id="main-content-area"></a>
                            <?php print theme('grid_block', $tabs, 'content-tabs'); ?>
                            <div id="content-inner" class="content-inner block">
                              <div id="content-inner-inner" class="content-inner-inner inner">
								<h1 class="title">ATHLETES</h1>
	
                                <?php if ($content): ?>
                                <div id="content-content" class="content-content">
                                  <?php print $content; ?>
								<div class="clear"></div>
								<div id="fmap">
									<?php 
										$block = module_invoke('menu', 'block' , 'view', 'primary-links'); 
										print $block['content'];
									?>
								</div>
								<div class="clear"></div>
								</div><!-- /content-content -->
                                <?php endif; ?>
                              </div><!-- /content-inner-inner -->
                            </div><!-- /content-inner -->
                          </div><!-- /content-region-inner -->
                        </div><!-- /content-region -->
                      </div><!-- /content-group-inner -->
                    </div><!-- /content-group -->

                    <?php print theme('grid_row', $sidebar_last, 'sidebar-last', 'nested', $sidebar_last_width); ?>
                  </div><!-- /main-content-inner -->
                </div><!-- /main-content -->
              </div><!-- /main-group-inner -->
            </div><!-- /main-group -->
          </div><!-- /main-inner -->
 			<div id="closingrow">
			  <div id="sitecredits">
				&copy; 2010 ANSWER RACING ALL RIGHTS RESERVED &nbsp; | &nbsp; <a href="javascript: void(0);">CONSUMER PRODUCT SAFETY</a>
			  </div>
			  <div id="socialstuff">
				<a class="fbicon" href="http://www.facebook.com/answerracing" rel="external"><img src="<?php print $baseurl; ?>sites/all/themes/acquia_prosper/design_packs/gray/images/face.jpg" width="25" height="23" alt="Keep up with Answer on Facebook" /></a>
				<a class="twittericon" href="http://twitter.com/answerracing" rel="external"><img src="<?php print $baseurl; ?>sites/all/themes/acquia_prosper/design_packs/gray/images/twit.jpg" width="25" height="23" alt="Follow Answer on Twitter" /></a>
				<a class="myspaceicon" href="http://www.myspace.com/answerracingusa" rel="external"><img src="<?php print $baseurl; ?>sites/all/themes/acquia_prosper/design_packs/gray/images/myspace.jpg" width="25" height="23" alt="Check out Answer on MySpace" /></a>
				<a class="youtubeicon" href="http://youtube.com/answerracing1" rel="external"><img src="<?php print $baseurl; ?>sites/all/themes/acquia_prosper/design_packs/gray/images/youtube.jpg" width="25" height="23" alt="Favorite Answer on YouTube" /></a>
			  </div>
			</div> <!-- /closingrow -->
        </div><!-- /main -->
      </div><!-- /main-wrapper -->
    </div><!-- /page-inner -->
  </div><!-- /page -->
<div id="cci">SITE BY: <a href="http://www.contemporary-communications.com" title="Contemporary Communications, Inc.">CONTEMPORARY COMMUNICATIONS, INC.</a></div>
  <?php print $closure; ?>
</body>
</html>