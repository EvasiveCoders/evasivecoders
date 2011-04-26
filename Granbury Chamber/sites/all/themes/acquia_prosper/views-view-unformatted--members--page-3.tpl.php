<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="memslider">
<?php foreach ($rows as $id => $row): ?>
    <?php print $row; ?>
<?php endforeach; ?>
</div>
<div id="memnavi">
<?php foreach ($rows as $id => $row): ?>
    <a href="javascript: void(0);"></a>
<?php endforeach; ?>
</div>
<div class="clear"></div>
<div id="directionservice">
<h1 class="titlebreak">Get Directions to <span id="insertco"></span></h1>
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
<script src="<?php print $baseurl; ?>/sites/all/themes/acquia_prosper/js/color.js"></script>
<!-- Hey Source code spies :) Here is how I did the map using cck and GMAP APIv3 - cck fields are populating the the geocoding service - triggered in a domfunction when the form is submitted I use jQuery to grab the current vals and set them as the starting point - then trigger the lookup sweet and simple. //-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var directionDisplay;
var directionsService = new google.maps.DirectionsService();
var geocoder;
var eviction_list = [];

function evictMarkers() {

    // clear all markers

    $(eviction_list).each(function () {
         this.setMap(null);
    });

    // reset the eviction array 
    eviction_list = [];
}

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
function codeAddress(activeaddy) {
  evictMarkers();
  var address = activeaddy;
  if (geocoder) {
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map, 
            position: results[0].geometry.location
        });
        eviction_list.push(marker);
      } else {
        alert("Geocode was not successful for the following reason: " + status);
      }
    });
  }
}
function calcRoute(activeaddy) {
  var fromstreet = $('#fromstreet').val();
  var fromcity = $('#fromcity').val();
  var fromzip = $('#fromzip').val();
  var start = fromstreet + fromcity + fromzip;
  var end = activeaddy;
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

 $('#dirprint').click(function() {
  	ClickHereToPrint();
 });
 $('.memoffers').colorbox({inline: true, href: ".offerdesc", innerWidth: "500px", innerHeight: "400px"});
 jQuery('#memnavi').tabs('#memslider > .memberprofile', {
	effect: 'fade',
	fadeOutSpeed: 'slow',
	rotate: 'true',
	current: 'current',
	onClick: function(event, tabIndex) {
     var myPane = this.getCurrentPane();
     var panehtml = myPane.html();
	 var activeaddy = jQuery(panehtml).children(".mapaddy").text();
	 var activeco = jQuery(panehtml).children("h1.activeco").text();
	//alert(activeco);
	 jQuery('#insertco').text(activeco);
	 codeAddress(activeaddy);
	 $('#fromaddy').submit(function() {
		calcRoute(activeaddy);
	   if($('#fromstreet').val() != '' || $('#fromcity').val() != '' || $('#fromzip').val() != ''){
	     $('#dirprint, #directionstext').fadeIn("slow");
	   } else {
	    $('#fromstreet, #fromcity, #fromzip').animate({backgroundColor: "red"}, 500, function() {
		  $(this).animate({backgroundColor: "white"}, 500);
	    });
		return false;
	   }
	 });
    }
 }).slideshow({autoplay: true, interval: '10000'});
});
</script>
<!-- End Map Script //-->