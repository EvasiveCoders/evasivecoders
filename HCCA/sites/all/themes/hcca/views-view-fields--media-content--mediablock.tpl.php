<?php
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
global $base_url;
?>
<script type="text/javascript" src="<?php print $base_url; ?>/sites/all/libraries/flowplayer3/example/flowplayer-3.2.6.min.js"></script>

<div style="max-height: 805px; overflow: hidden">
<?php if($fields['field_audio']->content != ""){ ?>
	<div id="audio" style="width: 580px; height: 25px;"></div>
	<audio id="newaudio" controls width="580" height="50">
		<source src="<?php print $fields['field_audio']->content ?>" />
	</audio>

	<script type="text/javascript">
	flowplayer("audio", "<?php print $base_url; ?>/sites/all/libraries/flowplayer3/flowplayer-3.2.7.swf", {
		clip: { 
			url: '<?php print $fields['field_audio']->content ?>',
			autoPlay: false,
			autoBuffering: true		
		},
		plugins: {
			audio: {
				url: '<?php print $base_url; ?>/sites/all/libraries/flowplayer3/flowplayer.audio-3.2.2.swf'
			},
			controls: {
				url: '<?php print $base_url; ?>/sites/all/libraries/flowplayer3/flowplayer.controls-3.2.5.swf',
				fullscreen: false,
				height: 25,
				autoHide: false
			}
		}
	});
	
	jQuery(function() {
			jQuery('#newaudio, #audio').hide();
			var audio = document.createElement('audio');
			if (!!audio && !!audio.canPlayType && audio.canPlayType('audio/mpeg') != '') {
				jQuery('#newaudio').show();
			}
			else {
				jQuery('#audio').show();
			}
	});
	</script>
<?php } ?>

<?php if($fields['field_video']->content != ""){ ?>
	<div id="player" style="width: 580px; height: 356px;"></div>
	<video id="newvideo" controls="controls" preload="none" width="580" height="356">
		<source src="<?php print $fields['field_video']->content; ?>" type='video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;'>
	</video>
		<script type="text/javascript">
		flowplayer("player", "<?php print $base_url; ?>/sites/all/libraries/flowplayer3/flowplayer-3.2.7.swf", { 
		    clip: { 
		        url: '<?php print $fields['field_video']->content; ?>', 
		        // when this is false playback does not start until play button is pressed 
		        autoPlay: false,
				autoBuffering: true,
				scaling: 'fit',
				provider: 'pseudo'
				
		    },
			plugins: { 
			  	pseudo: {
					url: "<?php print $base_url; ?>/sites/all/libraries/flowplayer3/flowplayer.pseudostreaming-3.2.7.swf"
				},
			    controls: { 
			        url: '<?php print $base_url; ?>/sites/all/libraries/flowplayer3/flowplayer.controls-3.2.5.swf'
				} 
			}
		});
		
	jQuery(function() {
			jQuery('#newvideo, #player').hide();
			var video = document.createElement('video');
			if (!!video && !!video.canPlayType && video.canPlayType('video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;') != '') {
				jQuery('#newvideo').show();
			}
			else {
				jQuery('#player').show();
			}
	});
		</script>

	
	
<?php } ?>

<?php if($fields['field_youtube']->content != ""){ ?>
<iframe title="YouTube video player" width="580" height="356" src="<?php print $fields['field_youtube']->content; ?>?rel=0&amp;hd=1" frameborder="0" allowfullscreen></iframe>
<?php } ?>
</div>