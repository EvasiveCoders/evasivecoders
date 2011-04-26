<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="contactblock">
  <h2>Contact Us</h2>
  <p>You may email Biker's Choice directly at <a href="mailto:bikerschoice@bikerschoice.com">bikerschoice@bikerschoice.com</a> or use the contact form below.</p>
  <div id="contactform">
    <h4 style="color: #fff;">Contact Form</h4>
  <?php $block = module_invoke('webform', 'block_view', 'client-block-41'); ?>
  <?php print render($block); ?>
  </div>
</div>
<div id="faqblock">
  <h2 style="text-transform: none;">FAQs</h2>
<?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
<?php endforeach; ?>
</div>