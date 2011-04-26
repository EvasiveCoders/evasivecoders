<?php
// $Id: node.tpl.php,v 1.1.2.2 2009/11/11 05:26:25 sociotech Exp $
?>
<?php
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
$thedate = strtotime($node->field_am_dob[0]['value']);
//echo $thedate;
$birthdate = date("n/j/Y", $thedate);
//echo $birthdate;
?>

<div class="division"><?php print $node->field_am_division[0]['value']; ?></div>

<div class="ridername"><?php print $node->title; ?></div>

<div class="riderpage">
<div class="riderprofile">
	<div class="riderstats">
		<div class="profilepic"><img src="<?php print $baseurl . $node->field_am_profile_pic[0]['filepath']; ?>" alt="<?php print $node->title; ?>" /></div>
		<div class="riderinfo">
			<div class="riderspec"><span class="info"><span class="labeled">NUMBER</span><span class="specdata"><?php print $node->field_am_number[0]['value']; ?></span></span></div>
			<div class="riderspec"><span class="info"><span class="labeled">NICKNAME</span><span class="specdata"><?php print $node->field_am_nickname[0]['value']; ?></span></span></div>
			<div class="riderspec"><span class="info"><span class="labeled">STATS</span><span class="specdata">DOB: <?php print $birthdate; ?>, H: <?php print $node->field_am_height[0]['value']; ?>, W: <?php print $node->field_am_weight[0]['value']; ?>lbs.</span></span></div>
			<div class="riderspec"><span class="info"><span class="labeled">BIRTHPLACE</span><span class="specdata"><?php print $node->field_am_birthplace[0]['value']; ?></span></span></div>
			<div class="riderspec"><span class="info"><span class="labeled">RESIDENCE</span><span class="specdata"><?php print $node->field_am_residence[0]['value']; ?></span></span></div>
			<div class="riderspec"><span class="info"><span class="labeled">SPONSORS</span><span class="specdata"><?php print $node->field_am_sponsors[0]['value']; ?></span></span></div>
			
		</div>
	</div>
	<div class="rider_accomp">
		<h6>ACCOMPLISHMENTS</h6>
		<?php print $node->field_am_accomp[0]['value']; ?>
	</div>
	<div class="clear"></div>
	<div class="about_rider"><div class="about_rider-inner">
		<h6>ABOUT</h6>
		<?php print $node->content['body']['#value'] ?>
	</div></div>
	<div class="ridershots">
		<div class="ridershots-inner">
			<h6>PHOTOS</h6>
			<?php if($node->field_am_photos[0]['filepath'] != "") { ?><a href="<?php print $baseurl . $node->field_am_photos[0]['filepath']; ?>" rel="group" title="<?php print $node->field_am_photos[0]['data']['description']; ?>"><img src="<?php print $baseurl . $node->field_am_photo_thumbs[0]['filepath']; ?>" alt="<?php print $node->title; ?>" width="90" /></a><?php } ?>
			<?php if($node->field_am_photos[1]['filepath'] != "") { ?><a href="<?php print $baseurl . $node->field_am_photos[1]['filepath']; ?>" rel="group" title="<?php print $node->field_am_photos[1]['data']['description']; ?>"><img src="<?php print $baseurl . $node->field_am_photo_thumbs[1]['filepath']; ?>" alt="<?php print $node->title; ?>" width="90" /></a><?php } ?>
			<?php if($node->field_am_photos[2]['filepath'] != "") { ?><a href="<?php print $baseurl . $node->field_am_photos[2]['filepath']; ?>" rel="group" title="<?php print $node->field_am_photos[2]['data']['description']; ?>"><img src="<?php print $baseurl . $node->field_am_photo_thumbs[2]['filepath']; ?>" alt="<?php print $node->title; ?>" width="90" /></a><?php } ?>
			<?php if($node->field_am_photos[3]['filepath'] != "") { ?><a href="<?php print $baseurl . $node->field_am_photos[3]['filepath']; ?>" rel="group" title="<?php print $node->field_am_photos[3]['data']['description']; ?>"><img src="<?php print $baseurl . $node->field_am_photo_thumbs[3]['filepath']; ?>" alt="<?php print $node->title; ?>" width="90" /></a><?php } ?>
			<?php if($node->field_am_photos[4]['filepath'] != "") { ?><a href="<?php print $baseurl . $node->field_am_photos[4]['filepath']; ?>" rel="group" title="<?php print $node->field_am_photos[4]['data']['description']; ?>"><img src="<?php print $baseurl . $node->field_am_photo_thumbs[4]['filepath']; ?>" alt="<?php print $node->title; ?>" width="90" /></a><?php } ?>
			<?php if($node->field_am_photos[5]['filepath'] != "") { ?><a href="<?php print $baseurl . $node->field_am_photos[5]['filepath']; ?>" rel="group" title="<?php print $node->field_am_photos[5]['data']['description']; ?>"><img src="<?php print $baseurl . $node->field_am_photo_thumbs[5]['filepath']; ?>" alt="<?php print $node->title; ?>" width="90" /></a><?php } ?>
			<?php if($node->field_am_photos[6]['filepath'] != "") { ?><a href="<?php print $baseurl . $node->field_am_photos[6]['filepath']; ?>" rel="group" title="<?php print $node->field_am_photos[6]['data']['description']; ?>"><img src="<?php print $baseurl . $node->field_am_photo_thumbs[6]['filepath']; ?>" alt="<?php print $node->title; ?>" width="90" /></a><?php } ?>
			<?php if($node->field_am_photos[7]['filepath'] != "") { ?><a href="<?php print $baseurl . $node->field_am_photos[7]['filepath']; ?>" rel="group" title="<?php print $node->field_am_photos[7]['data']['description']; ?>"><img src="<?php print $baseurl . $node->field_am_photo_thumbs[7]['filepath']; ?>" alt="<?php print $node->title; ?>" width="90" /></a><?php } ?>
			<?php if($node->field_am_photos[8]['filepath'] != "") { ?><a href="<?php print $baseurl . $node->field_am_photos[8]['filepath']; ?>" rel="group" title="<?php print $node->field_am_photos[8]['data']['description']; ?>"><img src="<?php print $baseurl . $node->field_am_photo_thumbs[8]['filepath']; ?>" alt="<?php print $node->title; ?>" width="90" /></a><?php } ?>
		</div>
	</div>
</div>
</div class="clear"></div>
</div>

<div id="breadcrumbs" class="breadcrumbs block"><div id="breadcrumbs-inner" class="breadcrumbs-inner inner clearfix"><div class="breadcrumb"><?php print theme('breadcrumb', drupal_get_breadcrumb()); ?></div></div></div><!-- /breadcrumbs -->

<h1 class="title" style="text-transform: uppercase;"><?php print $node->field_am_nickname[0]['value']; ?> RECOMMENDS <img src="<?php print $themeurl ?>/design_packs/gray/images/h1titlebg.jpg" alt="<?php print $title; ?>" /></h1>

<div class="dotborder"></div>

<div class="introprods-wrapper">
<div class="introprods" id="row1">
	<?php if($node->field_am_title1[0]['value'] != "") { ?><div style="background-image: url(<?php print $baseurl . $node->field_am_image1[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_am_path1[0]['value']; ?>"><span><?php print $node->field_am_title1[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_am_title2[0]['value'] != "") { ?><div style="background-image: url(<?php print $baseurl . $node->field_am_image2[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_am_path2[0]['value']; ?>"><span><?php print $node->field_am_title2[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_am_title3[0]['value'] != "") { ?><div class="noborder" style="background-image: url(<?php print $baseurl . $node->field_am_image3[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_am_path3[0]['value']; ?>"><span><?php print $node->field_am_title3[0]['value']; ?></span></a></div> <?php } ?>
</div>

<div class="dotborder"></div>

<div class="introprods" id="row2">
	<?php if($node->field_am_title4[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_am_image4[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_am_path4[0]['value']; ?>"><span><?php print $node->field_am_title4[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_am_title5[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_am_image5[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_am_path5[0]['value']; ?>"><span><?php print $node->field_am_title5[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_am_title6[0]['value'] != "") { ?><div class="noborder nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_am_image6[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_am_path6[0]['value']; ?>"><span><?php print $node->field_am_title6[0]['value']; ?></span></a></div> <?php } ?>
</div>

</div>

<div class="clear"></div>

<script type="text/javascript">
jQuery(function() {
 jQuery(".ridershots a").mouseenter(function() {
  jQuery(this).css("opacity", "0.5");	
 }).mouseleave(function() {
  jQuery(this).css("opacity", "1.0");	
 });
 jQuery(".ridershots a").colorbox({
	title: function() {
	 var titit = jQuery(this).attr("title");
	 var openit = jQuery(this).attr("href");
	 return titit+' || <a href="'+openit+'" style="color: #fff;">Download</a>';
	}
 });
});
</script>