(function ($) {
  Drupal.behaviors.customOmegaSubthemeJS = {
    attach: function(context, settings) {
		$.fn.equalHeights = function(px) {
			$(this).each(function(){
				var currentTallest = 0;
				$(this).children().each(function(i){
					if ($(this).height() > currentTallest) { currentTallest = $(this).height(); }
				});
				if (!px || !Number.prototype.pxToEm) currentTallest = currentTallest.pxToEm(); //use ems unless px is specified
				// for ie6, set height since min-height isn't supported
				if ($.browser.msie && $.browser.version == 6.0) { $(this).children().css({'height': currentTallest}); }
				$(this).children().css({'min-height': currentTallest}); 
			});
			return this;
		};
			
		Number.prototype.pxToEm = String.prototype.pxToEm = function(settings){
			//set defaults
			settings = jQuery.extend({
				scope: 'body',
				reverse: false
			}, settings);

			var pxVal = (this == '') ? 0 : parseFloat(this);
			var scopeVal;
			var getWindowWidth = function(){
				var de = document.documentElement;
				return self.innerWidth || (de && de.clientWidth) || document.body.clientWidth;
			};	

			/* When a percentage-based font-size is set on the body, IE returns that percent of the window width as the font-size. 
				For example, if the body font-size is 62.5% and the window width is 1000px, IE will return 625px as the font-size. 	
				When this happens, we calculate the correct body font-size (%) and multiply it by 16 (the standard browser font size) 
				to get an accurate em value. */

			if (settings.scope == 'body' && $.browser.msie && (parseFloat($('body').css('font-size')) / getWindowWidth()).toFixed(1) > 0.0) {
				var calcFontSize = function(){		
					return (parseFloat($('body').css('font-size'))/getWindowWidth()).toFixed(3) * 16;
				};
				scopeVal = calcFontSize();
			}
			else { scopeVal = parseFloat(jQuery(settings.scope).css("font-size")); };

			var result = (settings.reverse == true) ? (pxVal * scopeVal).toFixed(2) + 'px' : (pxVal / scopeVal).toFixed(2) + 'em';
			return result;
		};
		
	//Begin our JS Calls...
	$('#banners').cycle({
	    fx:     'fade', 
	    timeout: 10000, 
	    delay:  -2000,
		prev: '.prevslide',
		next: '.nextslide',
		speed: '2000'
	});
	$('#bannercaps').animate({
		right: '+=480px'
	}, 500, 'easeInOutBack').cycle({
		sync: false,
		easeIn: 'easeInOutBack',
	    fx:     'blindX', 
	    timeout: 10000, 
	    delay:  -2000,
		prev: '.prevslide',
		next: '.nextslide',
		speed: '2000'
	});
    
 	$('#preface-container, #content-container').equalHeights();
	

	// fix the submenu widths
	$(document).ready(function() {
		$('.nice-menu li ul').each(function() {
			$(this).wrapInner('<div />');
		});
		$('ul.nice-menu').superfish({
	      hoverClass: 'over',
	      autoArrows: false,
	      dropShadows: false,
	      delay: 500,
	      speed: 'fast',
	      animation:     {opacity: 'show'}
	    }).find('ul').bgIframe({opacity:false});

		//Open Dialog on Courses
		$('#opendiag').click(function() {
			$('#coursed').dialog({width: 1000, title: 'Course List', modal: true, draggable: false, resizable: false});


		});
		
		if(window.location.hash) {
			$('#cals ' + window.location.hash).show().addClass('active');
		} else {
			$('#cals div:first').show().addClass('active');
		}
		$('#caljump a').click(function(e) {
			var calopen = $(this).attr('href');
			$('#cals .active').removeClass('active').fadeOut('slow', function() {
				$(calopen).fadeIn('slow').addClass('active');
			});
		});
		
	
	});

	// $(document).ready(function() {
	// 	});
	// });

	// Clean up the messages

	$(document).ready(function() {
		$('#message-container').hide();
		$('#message-container').slideToggle('slow').delay('5000').slideToggle('slow');
		$(".date").html(function(i,text){
		    return text.replace(/\w+\s/, function(match){
		        return '<span>' + match + '</span>';
		    });
		});
		$('#alerts').show('slow', function() {
			$(this).animate({top: '+=30px'}, 500);
		});
		$('.alertcopy .closethis').click(function() {
			$('#alerts').animate({top: '-=30px'}, 500).hide('slow');
		});
		$(window).scroll(function() {
			$('#alerts').animate({top: '-=30px'}, 500).hide('slow');
		});
		$('.alertitem').cycle({
		    fx:     'scrollLeft', 
		    timeout: 6000, 
		    delay:  -2000,
			speed: '2000',
			pause:   1
		});
	});


	$('#imagelinks a').children('img').css("opacity", "0.1");

	$('#imagelinks a').hover(function() {
		
		$(this).children('img').stop(true, true).fadeTo('slow', '1.0');
	}, function() {
		$(this).children('img').stop(true, true).fadeTo('slow', '0.1');
	});

	$('.select-or-other').parent('div').children('label').hide();
		
    }
  };

})(jQuery);