// $Id: acquia-prosper-script.js,v 1.1.2.2 2010/01/11 00:09:05 sociotech Exp $

Drupal.behaviors.prosperBlocks = function (context) {
  $(".prosper-rounded-title h2.block-title").corner("top 5px"); 
  $(".prosper-shoppingcart h2.block-title").corner("top 5px"); 
  $(".prosper-menu-list h2.block-title").corner("top 5px"); 
  $(".prosper-grayborder-darkbackground .inner").corner("7px"); 
};

jQuery(function() {
	jQuery('.recprods div a span, .introprods div a span').css('opacity','0.8');
})

function isiPhone(){
    return (
        (navigator.platform.indexOf("iPhone") != -1) || (navigator.platform.indexOf("iPod") != -1) || (navigator.platform.indexOf("iPod") != -1)
	);
}