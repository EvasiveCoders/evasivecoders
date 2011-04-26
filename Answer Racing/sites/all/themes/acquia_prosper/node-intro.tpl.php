<?php
// $Id: node.tpl.php,v 1.1.2.2 2009/11/11 05:26:25 sociotech Exp $
?>
<?php
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
?>

<h1 class="title" style="text-transform: uppercase;"><?php print $node->title; ?> <img src="<?php print $themeurl ?>/css/images/titledown.png" alt="<?php print $title; ?>" /></h1>

<div class="dotborder"></div>

<div class="introprods-wrapper">
<div class="introprods" id="row1">
	<?php if($node->field_intro_title1[0]['value'] != "") { ?><div style="background-image: url(<?php print $baseurl . $node->field_intro_image1[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path1[0]['value']; ?>"><span><?php print $node->field_intro_title1[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_intro_title2[0]['value'] != "") { ?><div style="background-image: url(<?php print $baseurl . $node->field_intro_image2[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path2[0]['value']; ?>"><span><?php print $node->field_intro_title2[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_intro_title3[0]['value'] != "") { ?><div class="noborder" style="background-image: url(<?php print $baseurl . $node->field_intro_image3[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path3[0]['value']; ?>"><span><?php print $node->field_intro_title3[0]['value']; ?></span></a></div> <?php } ?>
</div>

<?php if($node->field_intro_title4[0]['value'] != "") { ?><div class="dotborder"></div>

<div class="introprods" id="row2">
	<?php if($node->field_intro_title4[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_intro_image4[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path4[0]['value']; ?>"><span><?php print $node->field_intro_title4[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_intro_title5[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_intro_image5[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path5[0]['value']; ?>"><span><?php print $node->field_intro_title5[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_intro_title6[0]['value'] != "") { ?><div class="noborder nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_intro_image6[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path6[0]['value']; ?>"><span><?php print $node->field_intro_title6[0]['value']; ?></span></a></div> <?php } ?>
</div>
<?php } ?>

<?php if($node->field_intro_title7[0]['value'] != "") { ?><div class="dotborder"></div>

<div class="introprods" id="row3">
	<?php if($node->field_intro_title7[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_intro_image7[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path7[0]['value']; ?>"><span><?php print $node->field_intro_title7[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_intro_title8[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_intro_image8[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path8[0]['value']; ?>"><span><?php print $node->field_intro_title8[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_intro_title9[0]['value'] != "") { ?><div class="noborder nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_intro_image9[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path9[0]['value']; ?>"><span><?php print $node->field_intro_title9[0]['value']; ?></span></a></div> <?php } ?>
</div>
<?php } ?>

<?php if($node->field_intro_title10[0]['value'] != "") { ?><div class="dotborder"></div>

<div class="introprods" id="row4">
	<?php if($node->field_intro_title10[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_intro_image10[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path10[0]['value']; ?>"><span><?php print $node->field_intro_title10[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_intro_title11[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_intro_image11[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path11[0]['value']; ?>"><span><?php print $node->field_intro_title11[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_intro_title12[0]['value'] != "") { ?><div class="noborder nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_intro_image12[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_intro_path12[0]['value']; ?>"><span><?php print $node->field_intro_title12[0]['value']; ?></span></a></div> <?php } ?>
</div>
<?php } ?>

</div>

<script type="text/javascript">
jQuery(function() {

});
</script>