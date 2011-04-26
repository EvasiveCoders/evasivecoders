<?php
// $Id: node.tpl.php,v 1.3 2010/11/11 03:57:45 danprobo Exp $

if ($node->field_practice[0]['value'] == 'medical')  {
print	'<script type="text/javascript">
		jQuery(function() {
		if(!jQuery.cookie("cfcooksz") || jQuery.cookie("cfcooksz") == "' . $title .'") {
				jQuery.cookie("cfcooksz", "' . $title .'", { expires: 9999, path: "/", domain: ".clbfinance.com" });
			} 
		});
		
		jQuery(function() {
		if(!jQuery.cookie("cfstyle") || jQuery.cookie("cfstyle") == "' . $node->field_practice[0]['value'] .'") {
				jQuery.cookie("cfstyle", "' . $node->field_practice[0]['value'] .'", { expires: 9999, path: "/", domain: ".clbfinance.com" });
			} 
		});
	</script>';
} elseif($node->field_practice[0]['value'] == 'dental') {
	print	'<script type="text/javascript">
			jQuery(function() {
			if(!jQuery.cookie("cfcooksz") || jQuery.cookie("cfcooksz") == "' . $title .'") {
					jQuery.cookie("cfcooksz", "' . $title .'", { expires: 9999, path: "/", domain: ".clbfinance.com" });
				} 
			});
			
			jQuery(function() {
			if(!jQuery.cookie("cfstyle") || jQuery.cookie("cfstyle") == "' . $node->field_practice[0]['value'] .'") {
					jQuery.cookie("cfstyle", "' . $node->field_practice[0]['value'] .'", { expires: 9999, path: "/", domain: ".clbfinance.com" });
				} 
			});
			
		</script>';	
}
?>


<div class="clear"></div>