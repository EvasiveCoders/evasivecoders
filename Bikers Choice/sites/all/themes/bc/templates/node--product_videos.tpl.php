<?php

/**
 * @file
 * Mode display of featured products.
 *
 */
 global $base_url;
 $current_url = 'http://' .$_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];
?>
<div class="featvid">
  <div class="vidframe">
    <iframe src="<?php print strip_tags($node->field_video_link['und'][0]['value']); ?>#player" style="width: 700px; height: 330px; overflow: hidden;"></iframe>
  </div>
  <div class="vidsocial">
    <div id="fblikeit">
	    <iframe src="http://www.facebook.com/plugins/like.php?href=<?php print $current_url; ?>&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light"></iframe>
    </div>
    <div id="ytube">
      <a href="http://www.youtube.com/user/BikersChoiceProducts" rel="external"><img src="<?php print $base_url; ?>/sites/all/themes/bc/css/img/yt-long.png" alt="Follow us on YouTube" /></a>
    </div>
  </div>
  <div class="viddesc">
    <?php print $node->field_video_description['und'][0]['value']; ?>
  </div>
</div>
<div class="clear"></div>
<!-- <pre><?php print_r($node); ?></pre> -->