<?php
// $Id: node-product.tpl.php,v 1.1.2.3 2009/11/11 05:26:25 sociotech Exp $
global $base_url;
$baseurl = base_path();
$themeurl =  base_path() . path_to_theme();
?>
<div class="clear"></div>
<div id="memberprofile">
<div id="profileleft">
	<h1><?php print $node->field_member_company[0]['value']; ?>
		<?php if($node->field_member_isally[0]['value'] != '') { ?>
			<?php if($node->field_member_level[0]['value'] != '') { ?> 
				<span class="allybadge <?php print $node->field_member_level[0]['value']; ?>"><?php print $node->field_member_level[0]['view']; ?></span>
			<?php } ?>
		<?php } ?>
	</h1>
	<h3><?php if($node->field_member_street[0]['value'] != '' && $node->field_member_cat[0]['value'] != 'Individuals') { print $node->field_member_street[0]['value']; ?> <?php } else { ?>Individual Residence - <?php } print $node->field_member_city[0]['value']; ?>, <?php print $node->field_member_zip[0]['value']; ?></h3>

	<div id="aboutmember">
	  <div id="memsince"><strong>Member Since:</strong> <?php print $node->field_member_join[0]['view']; ?></div>
	  <div id="memcat">
		<ul>
			<?php if($node->field_member_cat[0]['view'] != '') { ?><li><?php print $node->field_member_cat[0]['view']; ?></li><?php } ?>
			<?php if($node->field_member_cat[1]['view'] != '') { ?><li><?php print $node->field_member_cat[1]['view']; ?></li><?php } ?>
			<?php if($node->field_member_cat[2]['view'] != '') { ?><li><?php print $node->field_member_cat[2]['view']; ?></li><?php } ?>
			<?php if($node->field_member_cat[3]['view'] != '') { ?><li><?php print $node->field_member_cat[3]['view']; ?></li><?php } ?>
			<?php if($node->field_member_cat[4]['view'] != '') { ?><li><?php print $node->field_member_cat[4]['view']; ?></li><?php } ?>
		</ul>
	  </div>
	  <?php if($node->field_member_website[0]['view'] != '') { ?><div id="memweb"><strong>Member Website:</strong> <a href="http://<?php print $node->field_member_website[0]['view']; ?>" rel="external"><?php print $node->field_member_website[0]['view']; ?></a></div><?php } ?>
	    
	
	  <?php if($node->content['body']['#value'] != '') { ?><div id="memdesc"><?php print $node->content['body']['#value']; ?></div><?php } ?>
	</div>
</div>

<div id="profileright">
	<a href="http://<?php print $node->field_member_website[0]['value']; ?>"><img width="325" src="/<?php if($node->field_member_logo[0]['filepath'] != '') { print $node->field_member_logo[0]['filepath']; } else { ?>sites/default/files/members/nologo.jpg<?php } ?>" alt="<?php print $node->field_member_company[0]['value']; ?>" /></a>
	<div id="membercontact">
		<?php if($node->field_member_phone1[0]['view'] != '') { ?><div id="memphone"><i>Phone:......</i> <a href="tel:<?php print $node->field_member_phone1[0]['view']; ?>"><?php print $node->field_member_phone1[0]['view']; ?></a></div><?php } ?>
		<?php if($node->field_member_phone2[0]['view'] != '') { ?><div id="memphone2"><i>Phone2:....</i> <a href="tel:<?php print $node->field_member_phone2[0]['view']; ?>"><?php print $node->field_member_phone2[0]['view']; ?></a></div><?php } ?>
		<?php if($node->field_member_fax[0]['view'] != '') { ?><div id="memfax"><i>Fax:..........</i> <?php print $node->field_member_fax[0]['view']; ?></div><?php } ?>
	</div>
	<?php if($node->field_member_offers[0]['view'] != '') { ?><a id="memoffers" href="javascript: void(0);">Member to Member Offers</a>
		<div id="offerdesc"><?php if($node->field_member_offer_desc[0]['view'] != '') { print $node->field_member_offer_desc[0]['view']; } ?></div>
	<?php } ?>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
<?php if($node->field_member_street[0]['value'] != '' && $node->field_member_cat[0]['value'] != 'Individuals') { ?>
<div id="directionservice">
<h1 class="titlebreak">Get Directions to <?php print $node->field_member_company[0]['value']; ?></h1>
<div class="gmap" id="map_canvas"></div>
<div id="directions">
	<form action="javascript: void(0);" id="fromaddy" onsubmit="calcRoute();">
		<div>
		<div class="streetwrapper">
		<label for="fromstreet">Street</label>
		<input id="fromstreet" type="text" />
		</div>
		<div class="citywrapper">
		<label for="fromcity">City</label>
		<input id="fromcity" type="text" />
		</div>
		<div class="zipwrapper">
		<label for="fromzip">Zip Code</label>
		<input id="fromzip" type="text" />
		</div>
		<a id="dirprint" href="javascript: void(0);">Print Directions</a>
		<input id="travelsubmit" type="submit" class="fancybutton" value="Get Directions" />
		<div class="clear"></div>
		</div>
	</form>
	<div id="directionstext"></div>
	<iframe id='ifrmPrint' src='#' style="float: left; display: none; width: 0px; height: 0px; border: 0; outline: 0;"></iframe>
</div>
</div>
<div class="clear"></div>
<?php } ?>
<script src="<?php print $baseurl; ?>/sites/all/themes/acquia_prosper/js/color.js"></script>
<!-- Hey Source code spies :) Here is how I did the map using cck and GMAP APIv3 - cck fields are populating the the geocoding service - triggered in a domfunction when the form is submitted I use jQuery to grab the current vals and set them as the starting point - then trigger the lookup sweet and simple. //-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var directionDisplay;
var directionsService = new google.maps.DirectionsService();
var geocoder;
var map;
function initialize() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(32.442350, -97.794259);
  var myOptions = {
    zoom: 8,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById("directionstext"));
}
function codeAddress() {
  var address = "<?php print $node->field_member_street[0]['value']; ?>, <?php print $node->field_member_city[0]['value']; ?> <?php print $node->field_member_zip[0]['value']; ?>";
  if (geocoder) {
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map, 
            position: results[0].geometry.location
        });
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
}
function calcRoute() {
  var fromstreet = $('#fromstreet').val();
  var fromcity = $('#fromcity').val();
  var fromzip = $('#fromzip').val();
  var start = fromstreet + fromcity + fromzip;
  var end = "<?php print $node->field_member_street[0]['value']; ?>, <?php print $node->field_member_city[0]['value']; ?> <?php print $node->field_member_zip[0]['value']; ?>";
  var request = {
    origin:start, 
    destination:end,
    travelMode: google.maps.DirectionsTravelMode.DRIVING
  };
  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    }
  });
}
function ClickHereToPrint(){
    try{ 
        var oIframe = document.getElementById('ifrmPrint');
        var oContent = document.getElementById('directionstext').innerHTML;
        var oDoc = (oIframe.contentWindow || oIframe.contentDocument);
        if (oDoc.document) oDoc = oDoc.document;
		oDoc.write("<html><head><title>title</title>");
		oDoc.write("</head><body onload='this.focus(); this.print();'>");
		oDoc.write(oContent + "</body></html>");	    
		oDoc.close(); 	    
    }
    catch(e){
	    self.print();
    }
}
$(document).ready(function() {
initialize();
codeAddress();
 $('#fromaddy').submit(function() {
   if($('#fromstreet').val() != '' || $('#fromcity').val() != '' | $('#fromzip').val() != ''){
     $('#dirprint, #directionstext').fadeIn("slow");
   } else {
    $('#fromstreet, #fromcity, #fromzip').animate({backgroundColor: "red"}, 500, function() {
	  $(this).animate({backgroundColor: "white"}, 500);
    });
	return false;
   }
 });
 $('#dirprint').click(function() {
  	ClickHereToPrint();
 });
 $('#memoffers').colorbox({inline: true, href: "#offerdesc", innerWidth: "500px", innerHeight: "400px"});
});
</script>
<!-- End Map Script //--> 

<div class="clear"></div>