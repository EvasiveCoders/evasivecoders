<?php
// $Id: node.tpl.php,v 1.1.2.2 2009/11/11 05:26:25 sociotech Exp $
?>
<?php
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
?>

<div id="sizetable">
	<table>
		<?php if($node->field_male_size1[0]['value'] != "") { ?><tr class="hasborder">
			<td class="tdtitle">SIZE</td> 
			<td><?php print $node->field_male_size1[0]['value']; ?></td>
			<td><?php print $node->field_male_size2[0]['value']; ?></td>
			<td><?php print $node->field_male_size3[0]['value']; ?></td>
			<td><?php print $node->field_male_size4[0]['value']; ?></td>
			<td><?php print $node->field_male_size5[0]['value']; ?></td>
			<td><?php print $node->field_male_size6[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_male_size7[0]['value']; ?></td>
		</tr>
		<?php if($node->field_male_sku1[0]['value'] != "") { ?><tr class="hasborder">
			<td class="tdtitle"><?php print $node->field_size1_label[0]['value']; ?></td>
			<td><?php print $node->field_male_sku1[0]['value']; ?></td>
			<td><?php print $node->field_male_sku2[0]['value']; ?></td>
			<td><?php print $node->field_male_sku3[0]['value']; ?></td>
			<td><?php print $node->field_male_sku4[0]['value']; ?></td>
			<td><?php print $node->field_male_sku5[0]['value']; ?></td>
			<td><?php print $node->field_male_sku6[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_male_sku7[0]['value']; ?></td>
		</tr> <?php } ?>

		<tr><td class="noborder"></td></tr>
		<?php } ?>

		<?php if($node->field_male_size8[0]['value'] != "") { ?><tr class="hasborder">
			<td class="tdtitle">SIZE</td> 
			<td><?php print $node->field_male_size8[0]['value']; ?></td>
			<td><?php print $node->field_male_size9[0]['value']; ?></td>
			<td><?php print $node->field_male_size10[0]['value']; ?></td>
			<td><?php print $node->field_male_size11[0]['value']; ?></td>
			<td><?php print $node->field_male_size12[0]['value']; ?></td>
			<td><?php print $node->field_male_size13[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_male_size14[0]['value']; ?></td>
		</tr>
		<?php if($node->field_male_sku8[0]['value'] != "") { ?><tr class="hasborder bottomborder">
			<td class="tdtitle"><?php print $node->field_size1_label[0]['value']; ?></td> 
			<td><?php print $node->field_male_sku8[0]['value']; ?></td>
			<td><?php print $node->field_male_sku9[0]['value']; ?></td>
			<td><?php print $node->field_male_sku10[0]['value']; ?></td>
			<td><?php print $node->field_male_sku11[0]['value']; ?></td>
			<td><?php print $node->field_male_sku12[0]['value']; ?></td>
			<td><?php print $node->field_male_sku13[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_male_sku14[0]['value']; ?></td>
		</tr><?php } ?>
		
		<tr><td class="noborder"></td></tr>
		<tr><td class="noborder"></td></tr>
		<tr><td class="noborder"></td></tr>
		<?php } ?>	
		
		<?php if($node->field_female_size1[0]['value'] != "") { ?><tr class="hasborder">
			<td class="tdtitle">SIZE</td>
			<td><?php print $node->field_female_size1[0]['value']; ?></td>
			<td><?php print $node->field_female_size2[0]['value']; ?></td>
			<td><?php print $node->field_female_size3[0]['value']; ?></td>
			<td><?php print $node->field_female_size4[0]['value']; ?></td>
			<td><?php print $node->field_female_size5[0]['value']; ?></td>
			<td><?php print $node->field_female_size6[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_female_size7[0]['value']; ?></td>
		</tr>
		<?php if($node->field_female_sku1[0]['value'] != "") { ?><tr class="hasborder">
		 	<td class="tdtitle"><?php print $node->field_size2_label[0]['value']; ?></td> 
			<td><?php print $node->field_female_sku1[0]['value']; ?></td>
			<td><?php print $node->field_female_sku2[0]['value']; ?></td>
			<td><?php print $node->field_female_sku3[0]['value']; ?></td>
			<td><?php print $node->field_female_sku4[0]['value']; ?></td>
			<td><?php print $node->field_female_sku5[0]['value']; ?></td>
			<td><?php print $node->field_female_sku6[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_female_sku7[0]['value']; ?></td>
		</tr><?php } ?>

		<tr><td class="noborder"></td></tr>
		 <?php } ?>

		<?php if($node->field_female_size8[0]['value'] != "") { ?> <tr class="hasborder">
			<td class="tdtitle">SIZE</td>
			<td><?php print $node->field_female_size8[0]['value']; ?></td>
			<td><?php print $node->field_female_size9[0]['value']; ?></td>
			<td><?php print $node->field_female_size10[0]['value']; ?></td>
			<td><?php print $node->field_female_size11[0]['value']; ?></td>
			<td><?php print $node->field_female_size12[0]['value']; ?></td>
			<td><?php print $node->field_female_size13[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_female_size14[0]['value']; ?></td>
		</tr>
		<?php if($node->field_female_sku8[0]['value'] != "") { ?><tr class="hasborder bottomborder">
			<td class="tdtitle"><?php print $node->field_size2_label[0]['value']; ?></td> 
			<td><?php print $node->field_female_sku8[0]['value']; ?></td>
			<td><?php print $node->field_female_sku9[0]['value']; ?></td>
			<td><?php print $node->field_female_sku10[0]['value']; ?></td>
			<td><?php print $node->field_female_sku11[0]['value']; ?></td>
			<td><?php print $node->field_female_sku12[0]['value']; ?></td>
			<td><?php print $node->field_female_sku13[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_female_sku14[0]['value']; ?></td>
		</tr><?php } ?>
		
		<tr><td class="noborder"></td></tr>
		<tr><td class="noborder"></td></tr>
		<tr><td class="noborder"></td></tr>
		 <?php } ?>
		
		<?php if($node->field_youth_size1[0]['value'] != "") { ?><tr class="hasborder">
			<td class="tdtitle">SIZE</td>
			<td><?php print $node->field_youth_size1[0]['value']; ?></td>
			<td><?php print $node->field_youth_size2[0]['value']; ?></td>
			<td><?php print $node->field_youth_size3[0]['value']; ?></td>
			<td><?php print $node->field_youth_size4[0]['value']; ?></td>
			<td><?php print $node->field_youth_size5[0]['value']; ?></td>
			<td><?php print $node->field_youth_size6[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_youth_size7[0]['value']; ?></td>
		</tr>
		<?php if($node->field_youth_sku1[0]['value'] != "") { ?><tr class="hasborder">
			<td class="tdtitle"><?php print $node->field_size3_label[0]['value']; ?></td> 
			<td><?php print $node->field_youth_sku1[0]['value']; ?></td>
			<td><?php print $node->field_youth_sku2[0]['value']; ?></td>
			<td><?php print $node->field_youth_sku3[0]['value']; ?></td>
			<td><?php print $node->field_youth_sku4[0]['value']; ?></td>
			<td><?php print $node->field_youth_sku5[0]['value']; ?></td>
			<td><?php print $node->field_youth_sku6[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_youth_sku7[0]['value']; ?></td>
		</tr><?php } ?>

		<tr><td class="noborder"></td></tr>
		 <?php } ?>

		<?php if($node->field_youth_size8[0]['value'] != "") { ?> <tr class="hasborder">
			<td>SIZE (YOUTH)</td>
			<td><?php print $node->field_youth_size8[0]['value']; ?></td>
			<td><?php print $node->field_youth_size9[0]['value']; ?></td>
			<td><?php print $node->field_youth_size10[0]['value']; ?></td>
			<td><?php print $node->field_youth_size11[0]['value']; ?></td>
			<td><?php print $node->field_youth_size12[0]['value']; ?></td>
			<td><?php print $node->field_youth_size13[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_youth_size14[0]['value']; ?></td>
		</tr>
		<?php if($node->field_youth_sku8[0]['value'] != "") { ?><tr class="hasborder">
			<td><?php print $node->field_size3_label[0]['value']; ?></td> 
			<td><?php print $node->field_youth_sku8[0]['value']; ?></td>
			<td><?php print $node->field_youth_sku9[0]['value']; ?></td>
			<td><?php print $node->field_youth_sku10[0]['value']; ?></td>
			<td><?php print $node->field_youth_sku11[0]['value']; ?></td>
			<td><?php print $node->field_youth_sku12[0]['value']; ?></td>
			<td><?php print $node->field_youth_sku13[0]['value']; ?></td>
			<td class="noborder"><?php print $node->field_youth_sku14[0]['value']; ?></td>
		</tr><?php } ?>

		<tr><td class="noborder"></td></tr>
		 <?php } ?>			
	</table>
</div>


<h1 class="title">OTHER PRODUCTS <img src="<?php print $themeurl ?>/design_packs/gray/images/h1titlebg.jpg" alt="<?php print $title; ?>" /></h1>

<div class="dotborder"></div>

<div class="recprods" id="rectoprow">
	<?php if($node->field_riding_gear_prod1[0]['value'] != "") { ?><div style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod1_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod1_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod1[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_riding_gear_prod2[0]['value'] != "") { ?><div style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod2_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod2_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod2[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_riding_gear_prod3[0]['value'] != "") { ?><div class="noborder" style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod3_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod3_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod3[0]['value']; ?></span></a></div> <?php } ?>
</div>

<?php if($node->field_riding_gear_prod4[0]['value'] != "") { ?><div class="dotborder"></div>

<div class="recprods" id="row2">
	<?php if($node->field_riding_gear_prod4[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod4_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod4_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod4[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_riding_gear_prod5[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod5_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod5_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod5[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_riding_gear_prod6[0]['value'] != "") { ?><div class="noborder nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod6_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod6_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod6[0]['value']; ?></span></a></div> <?php } ?>
</div>
<?php } ?>

<?php if($node->field_riding_gear_prod7[0]['value'] != "") { ?><div class="dotborder"></div>

<div class="recprods" id="row3">
	<?php if($node->field_riding_gear_prod7[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod7_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod7_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod7[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_riding_gear_prod8[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod8_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod8_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod8[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_riding_gear_prod9[0]['value'] != "") { ?><div class="noborder nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod9_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod9_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod9[0]['value']; ?></span></a></div> <?php } ?>
</div>
<?php } ?>

<?php if($node->field_riding_gear_prod10[0]['value'] != "") { ?><div class="dotborder"></div>

<div class="recprods" id="row4">
	<?php if($node->field_riding_gear_prod10[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod10_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod10_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod10[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_riding_gear_prod11[0]['value'] != "") { ?><div class="nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod11_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod11_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod11[0]['value']; ?></span></a></div> <?php } ?>
	<?php if($node->field_riding_gear_prod12[0]['value'] != "") { ?><div class="noborder nobottommargin" style="background-image: url(<?php print $baseurl . $node->field_riding_gear_prod12_image[0]['filepath']; ?>)"><a href="<?php print $baseurl . $node->field_riding_gear_prod11_path[0]['value']; ?>"><span><?php print $node->field_riding_gear_prod12[0]['value']; ?></span></a></div> <?php } ?>
</div>
<?php } ?>

<script type="text/javascript">
jQuery(function() {
jQuery("#sizetable").hide();
 var insertable = jQuery("#sizetable").html();
 jQuery("#partinsert").html(insertable);	
});
</script>