(function ($) {
  Drupal.behaviors.customOmegaSubthemeJS = {
    attach: function(context, settings) {
    
	$(document).ready(function() {
		$('#message-container').hide();
		$('#message-container').slideToggle('slow').delay('5000').slideToggle('slow');
		$('#message-container').hover(function() {
			$(this).stop('true','true');
		}, function() {
			$(this).slideToggle('slow', function() {
				$(this).stop('true','true');
			});
		});
		var initcap = $('.prodimg_big img').attr('title');
		if(initcap == '') {
			var initcap = ' ';
		}
		$('.prodimg_title').text(initcap);
		$('.prodimg_thumbs a:first').addClass('active');
		$('.prodimg_thumbs a').click(function() {
			$('.prodimg_thumbs a').removeClass('active');
			$(this).addClass('active');
			var nextsrc = $(this).children('img').attr('src');
			var nextcap = $(this).children('img').attr('title');
			if(nextcap == '') {
				var nextcap = ' ';
			}
			$('.prodimg_big img').attr('src', nextsrc).attr('title', nextcap);
			$('.prodimg_title').text(nextcap);
		});
		
		$('ul.treemenu').tree({default_expanded_paths_string : ''});
		$('.treemenu > li > a, .subtree > li > a').click(function() {
			// alert('hmm');
			$(this).prev('span').click();
		});
		
		$('a[rel=external]').click(function() {
			$(this).attr('target', '_blank');
		});
		$('#webform-client-form-42').wrapInner('<div id="dealerform" />');
		$('#dealerform .form-actions').append('<input type="submit" id="edit-clear" name="clear" value="Clear Form" class="form-submit" />');
		$('#edit-clear').click(function() {
			$('#webform-client-form-42 input[type=text]').val('');
			$('#webform-client-form-42 .form-item input').removeAttr("checked");
			$('#webform-client-form-42 .form-select option').removeAttr('selected');
			return false;
		});
		
		$('.extrapaps ul li:nth-child(4n)').css('margin', '0');
	});
  }
 }
})(jQuery);