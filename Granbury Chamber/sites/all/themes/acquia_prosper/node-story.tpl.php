<?php
// $Id: node.tpl.php,v 1.1.2.2 2009/11/11 05:26:25 sociotech Exp $
?>

<h2 class="block-title"><?php print $title; ?></h2>
<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  <div class="inner">
    <?php print $picture ?>
  
    <?php if ($submitted): ?>
    <div class="meta">
      <span class="submitted"><?php print $submitted ?></span>
    </div>
    <?php endif; ?>
  
    <?php if ($node_top && !$teaser): ?>
    <div id="node-top" class="node-top row nested">
      <div id="node-top-inner" class="node-top-inner inner">
        <?php print $node_top; ?>
      </div><!-- /node-top-inner -->
    </div><!-- /node-top -->
    <?php endif; ?>

    <div class="content clearfix">
      <?php print $content ?>
    </div>
  
    <?php if ($terms): ?>
    <div class="terms">
      <?php print $terms; ?>
    </div>
    <?php endif;?>
    
    <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
    <?php endif; ?>
  </div><!-- /inner -->

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?php print $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?php endif; ?>
</div><!-- /node-<?php print $node->nid; ?> -->