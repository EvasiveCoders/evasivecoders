<?php if($node->type == 'webform' || empty($node->field_titleimg)) { ?>
       <img src="/sites/all/themes/rio/css/img/defaultheader.png" />
<?php } else { ?>
  <img src="<?php print file_create_url($node->field_titleimg['und'][0]['uri']);?>" />
<?php } ?>
<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  
  <?php if (!$page && $title): ?>
  <?php endif; ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>
<div class"content-bottom"><img id="bottomimg" src="/sites/all/themes/rio/css/img/bottom.png" /></div>