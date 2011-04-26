<?php
// $Id: node.tpl.php,v 1.1.2.2 2009/11/11 05:26:25 sociotech Exp $
?>

<div id="catalogitem" class="outer" style="width: 95%; padding: 8px; float: left;">
	<div id="itemthumb" style="width: 200px; float: right;">
		<a href="/sample/<?php print $node->field_mainpic[0]['filepath']; ?>"><img src="/sample/<?php print $node->field_mainpic[0]['filepath']; ?>" alt="<?php print $node->field_mainpic[0]['filename']; ?>" width="200" style="float: right;" /></a>
			<div class="clear"></div>
			<div id="morethumbs" style="width: 200px; float: right; text-align: center;">
				<a href="/sample/<?php print $node->field_otherpics[0]['filepath']; ?>"><img src="/sample/<?php print $node->field_otherpics[0]['filepath']; ?>" alt="<?php print $node->field_otherpics[0]['filename']; ?>" width="50" style="float: left;" /></a>
				<a href="/sample/<?php print $node->field_otherpics[1]['filepath']; ?>"><img src="/sample/<?php print $node->field_otherpics[1]['filepath']; ?>" alt="<?php print $node->field_otherpics[1]['filename']; ?>" width="50" style="float: left;" /></a>
				<a href="/sample/<?php print $node->field_otherpics[2]['filepath']; ?>"><img src="/sample/<?php print $node->field_otherpics[2]['filepath']; ?>" alt="<?php print $node->field_otherpics[2]['filename']; ?>" width="50" style="float: left;" /></a>
				<a href="/sample/<?php print $node->field_otherpics[3]['filepath']; ?>"><img src="/sample/<?php print $node->field_otherpics[3]['filepath']; ?>" alt="<?php print $node->field_otherpics[3]['filename']; ?>" width="50" style="float: left;" /></a>
			</div>
	</div>
	<div style="width: 500px; float: left;">
		<div id="itembreakdown"><?php print $node->field_desc[0]['value']; ?></div>
		<div class="clear"></div>
		<table width="100%" style="float: left; margin-bottom: 5px; text-align: center;">
			<tr>
				<td style="padding: 0px 6px;"><?php print $node->field_sizes[0]['value']; ?><?php print $node->field_sizespants[0]['value']; ?>"</td>
				<td style="padding: 0px 6px;"><?php print $node->field_sizes[1]['value']; ?><?php print $node->field_sizespants[1]['value']; ?>"</td>
				<td style="padding: 0px 6px;"><?php print $node->field_sizes[2]['value']; ?><?php print $node->field_sizespants[2]['value']; ?>"</td>
				<td style="padding: 0px 6px;"><?php print $node->field_sizes[3]['value']; ?><?php print $node->field_sizespants[3]['value']; ?>"</td>
				<td style="padding: 0px 6px;"><?php print $node->field_sizes[4]['value']; ?><?php print $node->field_sizespants[4]['value']; ?>"</td>
				<td style="padding: 0px 6px;"><?php print $node->field_sizes[5]['value']; ?><?php print $node->field_sizespants[5]['value']; ?>"</td>
				<td style="padding: 0px 6px;"><?php print $node->field_sizes[6]['value']; ?><?php print $node->field_sizespants[6]['value']; ?>"</td>
			</tr>
			<tr>
				<td style="padding: 0px 6px;">$<?php print $node->field_msrp[0]['value']; ?></td>
				<td style="padding: 0px 6px;">$<?php print $node->field_msrp[1]['value']; ?></td>
				<td style="padding: 0px 6px;">$<?php print $node->field_msrp[2]['value']; ?></td>
				<td style="padding: 0px 6px;">$<?php print $node->field_msrp[3]['value']; ?></td>
				<td style="padding: 0px 6px;">$<?php print $node->field_msrp[4]['value']; ?></td>
				<td style="padding: 0px 6px;">$<?php print $node->field_msrp[5]['value']; ?></td>
				<td style="padding: 0px 6px;">$<?php print $node->field_msrp[6]['value']; ?></td>
			</tr>
			<tr>
				<td style="padding: 0px 6px;"><?php print $node->field_sku[0]['value']; ?></td>
				<td style="padding: 0px 6px;"><?php print $node->field_sku[1]['value']; ?></td>
				<td style="padding: 0px 6px;"><?php print $node->field_sku[2]['value']; ?></td>
				<td style="padding: 0px 6px;"><?php print $node->field_sku[3]['value']; ?></td>
				<td style="padding: 0px 6px;"><?php print $node->field_sku[4]['value']; ?></td>
				<td style="padding: 0px 6px;"><?php print $node->field_sku[5]['value']; ?></td>
				<td style="padding: 0px 6px;"><?php print $node->field_sku[6]['value']; ?></td>
			</tr>
		</table>
	</div>
</div>
<div class="clear"></div>
<div id="bullets" style="width: 95%; float: left; background: #ddd; padding: 6px;">
	<h3>The Bullets</h3>
	<ul>
		<li><?php print $node->field_bullets[0]['value']; ?></li>
		<li><?php print $node->field_bullets[1]['value']; ?></li>
		<li><?php print $node->field_bullets[2]['value']; ?></li>
		<li><?php print $node->field_bullets[3]['value']; ?></li>
		<li><?php print $node->field_bullets[4]['value']; ?></li>
		<li><?php print $node->field_bullets[5]['value']; ?></li>
	</ul>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
