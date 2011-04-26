<?php
// $Id: node.tpl.php,v 1.1.2.2 2009/11/11 05:26:25 sociotech Exp $
?>
<?php
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
?>

<h1 class="title"><?php print $node->title; ?> <img src="<?php print $themeurl ?>/design_packs/gray/images/h1titlebg.jpg" alt="<?php print $title; ?>" /></h1>

<div class="dotborder"></div>
<br />
<div class="location">
<div class="gmap" id="map_canvas"></div>
<div class="locinfo">
	<h3><?php print $node->locations[0]['phone']; ?></h3>
	<div class="locitem"><?php print $node->locations[0]['name']; ?></div>
	<div class="locitem"><?php print $node->locations[0]['street']; ?>  <?php if($node->locations[0]['additional'] != "") { ?> - <?php print $node->locations[0]['additional']; } ?></div>
	<div class="locitem"><?php print $node->locations[0]['city']; ?>, <?php print $node->locations[0]['province']; ?> <?php print $node->locations[0]['postal_code']; ?></div>
	<div class="locitem"><br /><a href="http://<?php print $node->field_dealer_website[0]['view']; ?>" rel="nofollow" title="<?php print $node->locations[0]['name']; ?>'s Website">Visit Website</a></div>
	
	<div class="dotborder"></div>
	
	<div id="directions">
		<form action="javascript: void(0);" id="fromaddy">
			<div>
			<input id="travelfrom" type="text" /><input id="travelsubmit" type="submit" value="Get Directions" />
			</div>
		</form>
		<div id="directionstext"></div>
	</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div> 


<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAqB81_RaxOAK3XIphJEOaCBSGfP3mzTTqJfBjeoqCLMrp6VMWGBQ3mtaah2_t5vwO6OzXhNkhuu4kWA&amp;sensor=false" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	var map = new GMap2(document.getElementById("map_canvas"));
	var point = new GLatLng(<?php print $node->locations[0]['latitude']; ?>, <?php print $node->locations[0]['longitude']; ?>);
	var directionsPanel;
	var directions;
	var directionDisplay;
	var stepDisplay;
	
	$("#fromaddy").submit(function() {
		var fromhere = $("input#travelfrom").val();
		directionsPanel = document.getElementById("directionstext");
		directions = new GDirections(map, directionsPanel);
		directions.load(fromhere +" to "+ point);
	});
	map.setCenter(new GLatLng(<?php print $node->locations[0]['latitude']; ?>, <?php print $node->locations[0]['longitude']; ?>), 13);
    map.setUIToDefault();
	var baseIcon = new GIcon(G_DEFAULT_ICON);
	baseIcon.shadow = "<?php print $themeurl ?>/design_packs/gray/images/msrmarker-shadow.png";
	baseIcon.iconSize = new GSize(32, 32);
	baseIcon.shadowSize = new GSize(36, 32);
	baseIcon.iconAnchor = new GPoint(9, 32);
	baseIcon.infoWindowAnchor = new GPoint(9, 2);
		function CreateMarker(point) {
			var MSRIcon = new GIcon(baseIcon);
    		MSRIcon.image = "<?php print $themeurl ?>/design_packs/gray/images/msrmarker.png";
    		markerOptions = { icon:MSRIcon };
    		var marker = new GMarker(point, markerOptions);
    	return marker;
		}
    map.addOverlay(CreateMarker(point));
});
</script>
