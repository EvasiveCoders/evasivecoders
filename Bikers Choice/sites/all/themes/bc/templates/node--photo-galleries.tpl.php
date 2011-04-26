<?php

/**
 * @file
 * Mode display of featured products.
 *
 */
 global $base_url;
 $current_url = 'http://' .$_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'];
?>
<div class="pap">
  <h1 class="pagetitle">Wallpapers</h1>
  <div class="papshot">
    <img src="<?php print file_create_url($node->field_wallpaper['und'][0]['uri']); ?>" alt="<?php print $node->title; ?>" />
  </div>
  <div class="papdesc">
    <h3><?php print $node->title; ?></h3>
    <p><?php print $node->field_wallpaper_description['und'][0]['safe_value']; ?></p>
    <div class="papitems">
      <strong>Choose your size:</strong><br />
      <?php 
        foreach((array)$field_wallpaper as $item) {
          //print 'test';
          print '<a rel="external" href="' . file_create_url($item['uri']) . '" title="' . $item['title'] . '">' . $item['title'] . '</a>';
        }
      ?>
        
    </div>
  </div>
  <div class="vidsocial">
    <div id="fblikeit">
	    <iframe src="http://www.facebook.com/plugins/like.php?href=<?php print $current_url; ?>&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;font=trebuchet+ms&amp;colorscheme=light"></iframe>
    </div>
  </div>
</div>
<div class="clear"></div>

<hr style="margin: 15px 0;" />

<div class="papmore">
  <strong>More Wallpapers:</strong>
  <div class="extrapaps">
        <?php print views_embed_view('wallpapers', 'block'); ?>
      <div class="clear"></div>
  </div>
  <small><a href="<?php print $base_url; ?>/wallpapers">&lt;&lt; All Wallpapers</a></small>
</div>
<!-- <pre><?php print_r($node); ?></pre> -->