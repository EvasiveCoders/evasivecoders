jQuery(function() {

// Colorbox 
jQuery('#primary-menu-inner ul li a').click(function() {
	if(jQuery(this).html() == 'Membership &amp; Area Guide') {
	jQuery(this).colorbox({iframe: true, width: '100%', height: '100%'});
    }
});
jQuery('.areaguide').colorbox({iframe: true, width: '100%', height: '100%'});
jQuery('.imap').colorbox({iframe: true, width: '100%', height: '100%'});
 jQuery('#avatar').colorbox({width: '675px', height: '375px', iframe: 'true', scrolling: 'false', 
	title: function() {return '<div id="titletime">Please wait while the presentation loads...</div>'},
	onComplete: function() {
		jQuery('#titletime').text("Please wait while the presentation loads...").animate({opacity: "1.0"}, 3000, function() {
			jQuery(this).text("Please select a topic from the right to continue...");
		});
	}
 });
jQuery('.allylevels div h1').click(function() {
   var openthis = jQuery(this).next("div");
  jQuery(this).colorbox({width: '475px', height: '300px', inline: "true", href: openthis});	
 });


if(jQuery.browser.msie) {
// IE Rounding
 jQuery('#header-group-inner').corner({ tl: {radius: 10}, tr: {radius: 10}, bl: {radius: 0}, br: {radius: 0} });	
 jQuery('#footer, #primary-menu ul ul').corner({ tl: {radius: 0}, tr: {radius: 0}, bl: {radius: 10}, br: {radius: 10} });
 jQuery('#sumbitsearch-wrapper, .roundthis, .allybadge, #memoffers, .memoffers, .buttonthis').corner({ tl: {radius: 8}, tr: {radius: 8}, bl: {radius: 8}, br: {radius: 8} });
// jQuery('.fancybutton, #sumbitsearch-wrapper, .roundthis, .allybadge, #memoffers, .memoffers, .buttonthis').corner({ tl: {radius: 8}, tr: {radius: 8}, bl: {radius: 8}, br: {radius: 8} });
 jQuery('#navi a, #memnavi a').corner({ tl: {radius: 2}, tr: {radius: 2}, bl: {radius: 2}, br: {radius: 2} });
 jQuery('.allylevels div h1').corner({ tl: {radius: 5}, tr: {radius: 5}, bl: {radius: 5}, br: {radius: 5} });
 //jQuery('#edit-company-wrapper, #edit-submitted-name-wrapper, #edit-submitted-email-wrapper, #edit-submitted-street-address-wrapper, #edit-submitted-city-wrapper, #edit-submitted-state-wrapper, #edit-submitted-zip-wrapper, #edit-submitted-phone-wrapper, #edit-submitted-fax-wrapper, #edit-submitted-comments-wrapper, #edit-submitted-member-services-send-membership-info-wrapper').addClass('ieinputfix');
 //jQuery('.ieinputfix').corner({ tl: {radius: 5}, tr: {radius: 5}, bl: {radius: 5}, br: {radius: 5} });
 //jQuery('#edit-company').css("width","470px");
} else {
// Non IE Rounding
 jQuery('#header-group-inner').corner({ tl: {radius: 10}, tr: {radius: 10}, bl: {radius: 0}, br: {radius: 0} });	
 jQuery('#footer').corner({ tl: {radius: 0}, tr: {radius: 0}, bl: {radius: 10}, br: {radius: 10} });
 jQuery('.fancybutton, #sumbitsearch, .roundthis, .allybadge, #memoffers, .memoffers, .buttonthis').corner({ tl: {radius: 8}, tr: {radius: 8}, bl: {radius: 8}, br: {radius: 8} });
 jQuery('#edit-company').corner({ tl: {radius: 5}, tr: {radius: 5}, bl: {radius: 5}, br: {radius: 5} });
 jQuery('.allylevels div h1').corner({ tl: {radius: 5}, tr: {radius: 5}, bl: {radius: 5}, br: {radius: 5} })
 jQuery('#primary-menu ul ul').corner({ tl: {radius: 0}, tr: {radius: 0}, bl: {radius: 10}, br: {radius: 10} });
 jQuery('#navi a, #memnavi a').corner({	tl: {radius: 2}, tr: {radius: 2}, bl: {radius: 2}, br: {radius: 2} });
 jQuery('#edit-submitted-name, #edit-submitted-email, #edit-submitted-street-address, #edit-submitted-city, #edit-submitted-state, #edit-submitted-zip, #edit-submitted-phone, #edit-submitted-fax, #edit-submitted-comments, #edit-submitted-member-services-send-membership-info').corner({ tl: {radius: 5}, tr: {radius: 5}, bl: {radius: 5}, br: {radius: 5} });
 jQuery('#edit-submitted-your-name, #edit-submitted-your-email, #edit-submitted-your-company, #edit-submitted-event-title, #edit-submitted-start-time, #edit-submitted-end-time, #edit-submitted-location, #edit-submitted-event-description, #edit-submitted-subject').corner({ tl: {radius: 5}, tr: {radius: 5}, bl: {radius: 5}, br: {radius: 5} });

}



 jQuery(".allybadgedir a, .offersbadge a").tooltip({effect: 'slide'});


//Form Styling
var opts = jQuery('#edit-cat').html();
jQuery('#edit-cat').remove();
jQuery('#edit-cat-wrapper').append("<select id='newcat' name='cat[]'><option value='any' selected='selected'>Any</option>" + opts +"</select>");	

 jQuery('#newcat').selectmenu({maxHeight: 150, width: 250, menuWidth: 400, style:'dropdown'});
 jQuery('#edit-level').selectmenu({menuWidth: 150, width: 75, style:'dropdown'});
 jQuery("#edit-submit-members, #edit-reset").button();
 jQuery(".views-exposed-form").fadeIn("slow");
 jQuery('#edit-submitted-member-services-luncheon-reservations-month, #edit-submitted-member-services-luncheon-reservations-day, #edit-submitted-member-services-luncheon-reservations-year').selectmenu({maxHeight: 150,menuWidth: 150, width: 75, style:'dropdown'});
 jQuery('#edit-submitted-subject').selectmenu({maxHeight: 150,menuWidth: 180, width: 180, style:'dropdown'});

 jQuery('.webform-client-form #edit-submit').button();
 jQuery('#views-exposed-form-members-page-1').submit(function() {
	return false;
 });
 jQuery('#edit-submit-members').click(function() {
	var catcheck = jQuery('#newcat').val();
  	var catval = jQuery('#newcat').serialize();
    var allyval = jQuery('#edit-level').val();
    var coval = jQuery('#edit-company').val();
    var catload = '';
    var allyload = '';
    var coload = '';
     if(catcheck != 'any') {var catload = catval +"&";}
     if(allyval != '') {var allyload = "level=" + allyval;}
     if(coval != '') {var coload = "&company=" + coval;}
   document.location.href = "/members?" + catload + allyload + coload;
 });

 jQuery('#edit-reset').click(function() {
   document.location.href = "/members";
 });


 jQuery('#edit-submitted-start-month, #edit-submitted-start-day, #edit-submitted-start-year, #edit-submitted-end-month, #edit-submitted-end-day, #edit-submitted-end-year').selectmenu({maxHeight: 150, width: 75, menuWidth: 75, style:'dropdown'});

 jQuery('.lakeinfo .quint').equalHeights();
});