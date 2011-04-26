<?php
// $Id: page.tpl.php,v 1.1.2.5 2010/01/11 00:09:05 sociotech Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <meta name="author" content="William Hall will@contemporary-communications.com" />
  <meta name="description" content="MSR (Malcolm Smith Racing) was founded in 1971 by motorcycle legend Malcolm Smith. Since then, MSR has evolved in to one of the leading manufactures in motorcycle apparel and hard parts. Distributed exclusively through loyal Tucker Rocky Dealers." />

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
jQuery(function() {
 jQuery(".menu li a").prepend("<span>&bull;</span>").append("<span>&bull;</span>");	

 jQuery("#frontslider").scrollable({size: 1, speed: 500, clickable: false, onSeek: function() {
    var actcolor = jQuery("#controls .current").attr("title");
    jQuery("#logo").animate({backgroundColor: actcolor}, 500);
    jQuery("#controls a").animate({backgroundColor: "#ffffff"}, 100);
    jQuery("#controls .current").animate({backgroundColor: actcolor}, 500);
 }
 }).autoscroll({interval: 3500}).circular().navigator({navi: "#controls", naviItem: 'a', activeClass: 'current'});

 jQuery("#primary-menu ul.sf-menu").superfish({
   hoverClass:  'sfHover',
   delay:       850,
   animation:   {opacity:'show',height:'show'},
   speed:       'fast',
   autoArrows:  false,
   dropShadows: false
 }).supposition().supersubs({
	minWidth:    108,
	maxWidth:    108
 });

jQuery("a[rel='external']").click(function(){ this.target = "_blank"; }); 

});
//--><!]]>
</script>
</head>

<body id="<?php print $body_id; ?>" class="<?php print $body_classes; ?>">
<?php if (!empty($admin)) print $admin; ?>
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
                <div id="logo">
                  <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                </div>
                <?php endif; ?>
		        <div id="newsandsearch">
		        <h5><a href="<?php print check_url($front_page); ?>interact">JOIN MSR NEWS LETTER!</a></h5>
		        <?php print theme('grid_block', $search_box, 'search-box'); ?>
		        </div>
              </div><!-- /header-site-info-inner -->
            </div><!-- /header-site-info -->
            <?php endif; ?>
            <?php print $header; ?>
          </div><!-- /header-group-inner -->
        </div><!-- /header-group -->
      </div><!-- /header-group-wrapper -->

	      <div id="header-primary-menu-wrapper" class="header-primary-menu-wrapper full-width">
	        <div id="header-primary-menu" class="header-primary-menu row <?php print $grid_width; ?>">
          <div id="header-primary-menu-inner" class="header-primary-menu-inner">
            <?php print theme('grid_block', $primary_links_tree, 'primary-menu'); ?>
          </div><!-- /header-primary-menu-inner -->
        </div><!-- /header-primary-menu -->
      </div><!-- /header-primary-menu-wrapper -->
<div id="subdot"></div>
      <!-- preface-top row: width = grid_width -->
      <?php print theme('grid_row', $preface_top, 'preface-top', 'full-width', $grid_width); ?>

      <!-- main row: width = grid_width -->
      <div id="main-wrapper" class="main-wrapper full-width">
        <div id="main" class="main row <?php print $grid_width; ?>">
          <div id="main-inner" class="main-inner inner clearfix">
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
						<div class="clear">&nbsp;</div>
						<h1 class="bigred">NEWS<span class="followstuff">FOLLOW US AT <a href="http://twitter.com/msrmx" rel="external"><img src="<?php print check_url($front_page); ?>sites/all/themes/acquia_prosper/design_packs/gray/images/twiticon.jpg" alt="Follow MSR on Twitter" height="19" /></a>&nbsp;<a href="http://www.facebook.com/MSRMX" rel="external"><img src="<?php print check_url($front_page); ?>sites/all/themes/acquia_prosper/design_packs/gray/images/fbicon.jpg" alt="Keep up with MSR on Facebook" height="19" /></a><br />FOLLOW NICK WEY <a href="http://twitter.com/NickWey27" rel="external"><img src="<?php print check_url($front_page); ?>sites/all/themes/acquia_prosper/design_packs/gray/images/twiticon.jpg" alt="Follow Nick Wey on Twitter" height="19" /></a></span></h1>
							
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
                            <a name="main-content-area" id="main-content-area"></a>
                            <?php print theme('grid_block', $tabs, 'content-tabs'); ?>
                            <div id="content-inner" class="content-inner block">
                              <div id="content-inner-inner" class="content-inner-inner inner">
                                <?php if ($content): ?>
                                <div id="content-content" class="content-content">
                                  <?php print $content; ?>
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
					<div class="dotborder"></div>
					<div id="closingrow">
					  <div id="sitecredits">
						SITE BY: <a href="http://ccideas.com" rel="external">CONTEMPORARY COMMUNICATIONS INC.</a>
					  </div>
					  <div id="socialstuff">
						<a href="http://www.facebook.com/MSRMXFANS" rel="external"><img src="<?php print check_url($front_page); ?>sites/all/themes/acquia_prosper/design_packs/gray/images/fbicon.jpg" alt="Keep up with MSR on Facebook" height="19" /></a>
						<a href="http://twitter.com/msrmx" rel="external"><img src="<?php print check_url($front_page); ?>sites/all/themes/acquia_prosper/design_packs/gray/images/twiticon.jpg" alt="Follow MSR on Twitter" height="19" /></a>&nbsp;&nbsp;
						<a href="http://www.youtube.com/user/msrseventyone" rel="external"><img src="<?php print check_url($front_page); ?>sites/all/themes/acquia_prosper/design_packs/gray/images/msrtube.jpg" height="19" alt="Follow MSR on Youtube" /></a>&nbsp;&nbsp;

						<a href="<?php print check_url($front_page); ?>company">ABOUT</a> | 
						<a href="<?php print check_url($front_page); ?>company">CONTACT</a> | 
						&copy; 2010 MSR MX ALL RIGHTS RESERVED
					  </div>
					</div> <!-- /closingrow -->
                </div><!-- /main-content -->
              </div><!-- /main-group-inner -->
            </div><!-- /main-group -->
          </div><!-- /main-inner -->
        </div><!-- /main -->
      </div><!-- /main-wrapper -->
    </div><!-- /page-inner -->
  </div><!-- /page -->
  <?php print $closure; ?>
</body>
</html>
