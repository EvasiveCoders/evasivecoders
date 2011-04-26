<?php
// $Id: node.tpl.php,v 1.1.2.2 2009/11/11 05:26:25 sociotech Exp $
?>

<div class="news">
	<div class="postdate"><span>
		<?php 
			$postdate = date("n/j/Y", $node->created);
			$gettime = (time() - strtotime(date("n/j/Y", $node->created))) / 86400;
			$timesince = $gettime;
			//echo $timesince;
			$daysago = substr($gettime, 0, 1);
			
			$thisdate = "LAST 24 HOURS";
			if($timesince >= "2" && $timesince <= "7") {
				$thisdate = $daysago . " DAYS AGO";
			}
			if($timesince >= "8") {
				$thisdate = $postdate;
			}
			print $thisdate;
		?></span>
	</div>
	<div class="posttext">
		<h3><?php print $node->title; ?></h3>
		<?php print $node->body; ?>
	</div>
</div>

<div class="clear">&nbsp;</div>