<?php
// $Id: views-view-fields.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
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
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div id="featured">
	<div id="tweetsblock"><?php print views_embed_view('tweets', 'block2'); ?></div>
	
	<div id="catalogblock">
		<h3>2011 eCATALOG</h3>
		<?php 
			$block = module_invoke('block', 'block' , 'view', 7); 
			print $block['content'];
		?>
	</div>
	
	<div id="prodblock">
	<div id="prodscroll">
		
	<a href="javascript: void(0)" id="prodprev"></a>
		
	<div class="proditems">
		
	<?php if($fields['field_newimage_fid']->content != "") { ?>
	<div>
		<h3><?php print $fields['field_newlabel_value']->content ?></h3>
		<a href="<?php print $fields['field_newpath_value']->content ?>"><img src="<?php print $fields['field_newimage_fid']->content; ?>" alt="<?php print $fields['field_newlabel_value']->content ?> - <?php print $fields['field_newcolor_value']->content; ?>" height="170" /></a>
		<div class="scrollinfo"><span class="prodcolor"><?php print $fields['field_newcolor_value']->content; ?></span> &nbsp; | &nbsp; <span class="prodprice"><?php print $fields['field_newprice_value']->content ?></span></div>
	</div> 
	<?php } ?>
	
	<?php if($fields['field_propicksimage_fid']->content != "") { ?>
		<div>
			<h3><?php print $fields['field_propickslabel_value']->content ?></h3>
			<a href="<?php print $fields['field_propickspath_value']->content ?>"><img src="<?php print $fields['field_propicksimage_fid']->content; ?>" alt="<?php print $fields['field_propickslabel_value']->content ?> - <?php print $fields['field_propickscolor_value']->content; ?>" height="170" /></a>
			<div class="scrollinfo"><span class="prodcolor"><?php print $fields['field_propickscolor_value']->content; ?></span> &nbsp; | &nbsp; <span class="prodprice"><?php print $fields['field_propicksprice_value']->content ?></span></div>
		</div> 
	<?php } ?>

	<?php if($fields['field_freshproductimage_fid']->content != "") { ?>
		<div>
			<h3><?php print $fields['field_freshproductlabel_value']->content ?></h3>
			<a href="<?php print $fields['field_freshproductpath_value']->content ?>"><img src="<?php print $fields['field_freshproductimage_fid']->content; ?>" alt="<?php print $fields['field_freshproductlabel_value']->content ?> - <?php print $fields['field_freshproductcolor_value']->content; ?>" height="170" /></a>
			<div class="scrollinfo"><span class="prodcolor"><?php print $fields['field_freshproductcolor_value']->content; ?></span> &nbsp; | &nbsp; <span class="prodprice"><?php print $fields['field_freshproductprice_value']->content ?></span></div>
		</div> 
	<?php } ?>		

	<?php if($fields['field_mostsearchedimage_fid']->content != "") { ?>
		<div>
			<h3><?php print $fields['field_mostsearchedlabel_value']->content ?></h3>
			<a href="<?php print $fields['field_mostsearchedpath_value']->content ?>"><img src="<?php print $fields['field_mostsearchedimage_fid']->content; ?>" alt="<?php print $fields['field_mostsearchedlabel_value']->content ?> - <?php print $fields['field_mostsearchedcolor_value']->content; ?>" height="170" /></a>
			<div class="scrollinfo"><span class="prodcolor"><?php print $fields['field_mostsearchedcolor_value']->content; ?></span> &nbsp; | &nbsp; <span class="prodprice"><?php print $fields['field_mostsearchedprice_value']->content ?></span></div>
		</div> 
	<?php } ?>
				
	
	<?php if($fields['field_staffpicksimage_fid']->content != "") { ?>
		<div>
			<h3><?php print $fields['field_staffpickslabel_value']->content ?></h3>
			<a href="<?php print $fields['field_staffpickspath_value']->content ?>"><img src="<?php print $fields['field_staffpicksimage_fid']->content; ?>" alt="<?php print $fields['field_staffpickslabel_value']->content ?> - <?php print $fields['field_staffpickscolor_value']->content; ?>" height="170" /></a>
			<div class="scrollinfo"><span class="prodcolor"><?php print $fields['field_staffpickscolor_value']->content; ?></span> &nbsp; | &nbsp; <span class="prodprice"><?php print $fields['field_staffpicksprice_value']->content ?></span></div>
		</div> 
	<?php } ?>
	
	<?php if($fields['field_amateurspotimage_fid']->content != "") { ?>
		<div>
			<h3><?php print $fields['field_amateurspotlabel_value']->content ?></h3>
			<a href="<?php print $fields['field_amateurspotpath_value']->content ?>"><img src="<?php print $fields['field_amateurspotimage_fid']->content; ?>" alt="<?php print $fields['field_amateurspotlabel_value']->content ?> - <?php print $fields['field_amateurspotcolor_value']->content; ?>" height="170" /></a>
			<div class="scrollinfo"><span class="prodcolor"><?php print $fields['field_amateurspotcolor_value']->content; ?></span> &nbsp; | &nbsp; <span class="prodprice"><?php print $fields['field_amateurspotprice_value']->content ?></span></div>
		</div> 
	<?php } ?>
	</div>
	
	<a href="javascript: void(0)" id="prodnext"></a>
	</div>
	</div>		
</div>
