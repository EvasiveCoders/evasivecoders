<div class="content" style="text-align:left;"><?php print $content; ?><br /><br /> 
<script src="/sites/all/libraries/flowplayer3/flowplayer-3.2.6.min.js"></script>
<a href="http://cdfinance.net/vids/prewebinar.mp4" id="player" style="display:block;width:556px;height:424px;margin-left:50px;;"> </a><br /><br /> 
<script>flowplayer("player", "/sites/all/libraries/flowplayer3/flowplayer-3.2.7.swf");</script>
<script>
//{{{ player configuration

$f("player", "/sites/all/libraries/flowplayer3/flowplayer-3.2.7.swf", {

		// this will enable pseudostreaming support 
		plugins: { 
			pseudo: { url: '/sites/all/libraries/flowplayer3/flowplayer.pseudostreaming-3.2.7.swf' },
			content: {

				// the only required property
				url: '/sites/all/libraries/flowplayer3/flowplayer.content-3.2.0.swf',

				// some display properties
				height: 400,
				padding:30,
				backgroundColor: '#5D8D9C',
				opacity: 1,
				display: 'none',
				/*** content plugin specific properties ***/
				style: {
				'a:hover': {
				textDecoration: 'underline',
				},
				body: {
					fontSize: 16, 
					textAlign: 'center',
					color: '#000000'
				}
				},
				// fetch the actual HTML inside a DIV element on the page
				html: '<p class="webbage"><?php $block = module_invoke("block", "block" , "view", "41"); print $block["content"];?></p>'

		
			}
			
		},

		clip: {
			autoPlay: false,
			autoBuffering: true,
			provider: 'pseudo',
			scaling: 'fit',			
			url: 'http://cdfinance.net/vids/BBCDF2.mp4',
			// when playback finishes perform our custom unload action
			onBeforeFinish: function () {
		       this.getPlugin("play").hide();
		       this.getPlugin("content").show();
		    },
			onFinish: function() {
				this.pause();
			}
		}
	});
</script>
<div style="font-size:16px;text-align:center;margin-left:-20px;margin-top:10px;display:none;"><a href="/request-contact" rel="external">Click here if you would like to be contacted by one of our representatives.</a></div></div>