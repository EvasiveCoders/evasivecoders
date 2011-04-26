<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
global $base_url;
$current_url = 'http://' .$_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];
?>
<div id="slidewrap">
	<div id="slide"><?php foreach ($rows as $id => $row): print $row; endforeach; ?></div>
	<?php print	views_embed_view('contest_grabber', 'default'); ?>
	<div id="slideshade"></div>
	<div id="slidedeck">
		<div id="catlink"><a href="javascript: void(0);"></a></div>
		<div id="slidenews">
			<?php print	views_embed_view('front_news', 'block'); ?>
		</div>
	</div>
</div>
<div id="featuredprods">
	<h4>Featured Product <span>-click images for details</span></h4>
	<div id="proddock">
			<?php print	views_embed_view('featured_products', 'block');
			jcarousel_add('jcarousel', array('vertical' => FALSE)); ?>
	</div>
</div>
<div id="fblikeit">
	<iframe src="http://www.facebook.com/plugins/like.php?href=<?php print $current_url; ?>&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light"></iframe>
</div>

<!-- IMG Preloading // -->
<div style="display: none;">
	<img src="<?php print $base_url; ?>/sites/all/themes/bc/css/img/catlink-bg-over.png" alt="" /><img src="<?php print $base_url; ?>/sites/all/themes/bc/css/img/contest-button-over.png" alt="" />
</div>		

<script type="text/javascript">
jQuery(function() {
	jQuery('.jcarousel-container').jcarousel({
		scroll: 1,
		wrap: 'circular',
		size: 8,
		visible: 4,
		animation: 'slow',
		initCallback: mycarousel_initCallback,
		itemFirstInCallback:  {
			onBeforeAnimation: unhighlight,
			onAfterAnimation: highlight
		},
        buttonNextHTML: null,
        buttonPrevHTML: null
	});
	jQuery('.prodcontrols a:first, .jci .jciimg:first').addClass('active');
	
	jQuery('#proddock').hide().slideDown('slow');
	});


function unhighlight(carousel, obejctli,liindex,listate){
	jQuery('.prodcontrols a.active, .jci .active').removeClass('active');
}

function highlight(carousel, obejctli,liindex,listate){
	var nextactive = liindex;
	
	jQuery('.prodcontrols a:contains("' + nextactive +'")').addClass('active');
	jQuery('.jcarousel-item-' + nextactive).children('.jci').children('.jciimg').addClass('active');

};

function mycarousel_initCallback(carousel) {
		jQuery('.prodcontrols a').bind('click', function() {
        	carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        	return false;
    	});
		carousel.clip.hover(function() {
        	carousel.stopAuto();
    	}, function() {
        	carousel.startAuto();
    	});
}
</script>