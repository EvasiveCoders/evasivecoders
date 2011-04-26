<?php

/**
 * @file
 * Mode display of featured products.
 *
 */
 global $base_url;
 $current_url = 'http://' .$_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];
 $pagenum = $node->field_catalog_page_number['und'][0]['value'];
?>
<div class="prodview">
	<div class="prodimg">
    <div class="prodimg_big"><img src="<?php print file_create_url($node->field_product_images['und'][0]['uri']); ?>" title="<?php print $node->field_product_images['und'][0]['title']; ?>" />
    <div class="prodimg_title">&nbsp;</div>
    </div>
    <div class="prodimg_thumbs">
      <span>Additional Views</span><br />
    <?php foreach ((array)$field_product_images as $item) { ?>
      <a href="javascript: void(0);"><img src="<?php print file_create_url($item['uri']) ?>" title="<?php print $item['title'] ?>" style="width: 80px" /></a>
    <?php } ?>
    </div>
  </div>
  <div class="proddesc">
    <?php if($pagenum) { ?>
      <div class="prodcat">
        <span>&bull;</span>
          for MSRP and Applications click here to see Biker's Choice catalog Page <a href="<?php print $base_url . '/catalog?pg=' . $pagenum; ?>"><?php print $pagenum; ?></a>
        <span>&bull;</span>
      </div>
    <?php } ?>
    <div class="prodtitle"><h2><?php print $node->title; ?></h2></div>
    <div class="proddetails"><?php print $node->field_product_description['und'][0]['value']; ?></div>
  </div>
</div>
<div id="fblikeit">
	<iframe src="http://www.facebook.com/plugins/like.php?href=<?php print $current_url; ?>&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light"></iframe>
</div>
<div class="clear"></div>
<!-- <pre><?php print_r($node); ?></pre> -->