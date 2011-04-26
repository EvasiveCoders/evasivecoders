/* jSocialize - bookmark tool ©2008 artViper designstudio - all rights reserved */
/* information about this tool and other widgets: info@artviper.net  */
/* the header 'artViper's social bookmark widget has not to be removed */
/* same goes for the link to this tool */
/* add these lines to your document, to make this script work: */
/* <script language="javascript" type="text/ecmascript" src="js/jquery.js"></script>
<script language="javascript" type="text/ecmascript" src="js/jquery.dimensions.js"></script>
<script language="javascript" type="text/ecmascript" src="js/jSocialize.js"></script>
*/

 $(document).ready(function() {
		$(".socializer").click(function (e) { 
			if(document.getElementById('containerx') == null){							 
				
				var top 	= $(".socializer").offset().top;
				var height	= $(".socializer").height();
				var left	= $(".socializer").offset().left;
				var pos 	= top+height+20;
				
				var div = document.createElement("div");
				$(div).hide();
				$(div).addClass("soc_container");
				$(document.body).prepend(div);
					
				var closeme = document.createElement('img');
				
				$(closeme).attr({ id: "close", src: "/sites/all/themes/acquia_prosper/js/social/images/close.gif"});
				$(closeme).addClass('close');
				$(div).append(closeme);
				
				$(closeme).click(function(){
					$(div).remove();
				})
				
				var title= $(".socializer").attr("title");
				var url  = document.location.href;  //$(".socializer").attr("alt");  --> use this if you wish to define an url in the alt tag 
				
				var name = document.createElement('h2');
				$(name).html('Bookmark this page.');
				$(div).prepend(name);
				
				var left = document.createElement('div');
				$(left).addClass('soc_left');
				$(div).append(left);
				
				//bookmark.it
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to bookmark.it', src: "/sites/all/themes/acquia_prosper/js/social/images/bookmark.gif"  });
				$(left).append(img);
				
				var myLink = document.createElement('a');
				var hrefs = "http://www.bookmark.it/bookmark.php?url=" + url;
				$(myLink).attr({ href: hrefs , title: 'send to bookmark.it' });
				$(myLink).html("bookmark.it");
				$(left).append(myLink);
				
				// del.icio.us
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to delicious', src: "/sites/all/themes/acquia_prosper/js/social/images/delicious.png"  });
				$(left).append(img);
				
				var myLink = document.createElement('a');
				var hrefs = "http://del.icio.us/post?url=" + url;
				$(myLink).attr({ href: hrefs , title: 'send to del.icio.us' });
				$(myLink).html("del.icio.us");
				$(left).append(myLink);
				
				// digg
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to digg', src: "/sites/all/themes/acquia_prosper/js/social/images/digg.png"  });
				$(left).append(img);
				
				var myLink = document.createElement('a');
				var hrefs = 'http://digg.com/submit?phase=2&url='+encodeURIComponent(url)+'&title='+title;
				$(myLink).attr({ href: hrefs , title: 'send to digg' });
				$(myLink).html("digg");
				$(left).append(myLink);
				
				// furl
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to digg', src: "/sites/all/themes/acquia_prosper/js/social/images/furl.png"  });
				$(left).append(img);
				
				var myLink = document.createElement('a');
				var hrefs = 'http://furl.net/storeIt.jsp?t='+title+'&u='+encodeURIComponent(url);
				$(myLink).attr({ href: hrefs , title: 'send to furl' });
				$(myLink).html("furl");
				$(left).append(myLink);
				
				// blinklist
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to blinklist', src: "/sites/all/themes/acquia_prosper/js/social/images/blinklist.png"  });
				$(left).append(img);
				
				var myLink = document.createElement('a');
				var hrefs = 'http://blinklist.com/index.php?Action=Blink/addblink.php&Name='+title+'&Url='+encodeURIComponent(url);
				$(myLink).attr({ href: hrefs , title: 'send to blinklist' });
				$(myLink).html("blinklist");
				$(left).append(myLink);
				
				// reddit
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to reddit', src: "/sites/all/themes/acquia_prosper/js/social/images/reddit.png"  });
				$(left).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://reddit.com/submit?url='+encodeURIComponent(url)+'&title='+title;
				$(myLink).attr({ href: hrefs , title: 'send to reddit' });
				$(myLink).html("reddit");
				$(left).append(myLink);
				
				// feedmelinks
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to feedmelinks', src: "/sites/all/themes/acquia_prosper/js/social/images/feedmelinks.png"  });
				$(left).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://feedmelinks.com/categorize?from=toolbar&op=submit&name='+title+'&url='+encodeURIComponent(url)
				$(myLink).attr({ href: hrefs , title: 'send to feedmelinks' });
				$(myLink).html("feedmelinks");
				$(left).append(myLink);
				
				// technorati
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to technorati', src: "/sites/all/themes/acquia_prosper/js/social/images/technorati.png"  });
				$(left).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://www.technorati.com/faves?add='+encodeURIComponent(url);
				$(myLink).attr({ href: hrefs , title: 'send to technorati' });
				$(myLink).html("technorati");
				$(left).append(myLink);
				
			
				// put in right container
				var right = document.createElement('div');
				$(right).addClass('soc_left');
				$(div).append(right);
				
				//stumbleupon
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to ma.gnolia.com', src: "/sites/all/themes/acquia_prosper/js/social/images/stumbleupon.png"  });
				$(right).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://www.stumbleupon.com/refer.php?url='+encodeURIComponent(url)+'&title='+title;
				$(myLink).attr({ href: hrefs , title: 'send to stumbleupon' });
				$(myLink).html("stumbleupon");
				$(right).append(myLink);
				
				//google
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to google', src: "/sites/all/themes/acquia_prosper/js/social/images/google.png"  });
				$(right).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://www.google.com/bookmarks/mark?op=edit&output=popup&bkmk='+encodeURIComponent(url)+'&title='+title;
				$(myLink).attr({ href: hrefs , title: 'send to google' });
				$(myLink).html("google");
				$(right).append(myLink);
				
				//squidoo
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to squidoo', src: "/sites/all/themes/acquia_prosper/js/social/images/squidoo.png"  });
				$(right).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://www.squidoo.com/lensmaster/bookmark?'+encodeURIComponent(url);
				$(myLink).attr({ href: hrefs , title: 'send to squidoo' });
				$(myLink).html("squidoo");
				$(right).append(myLink);
				
				// spurl.net
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to spurl', src: "/sites/all/themes/acquia_prosper/js/social/images/spurl.png"  });
				$(right).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://www.spurl.net/spurl.php?url='+encodeURIComponent(url)+'&title='+title+'&blocked=';
				$(myLink).attr({ href: hrefs , title: 'send to spurl' });
				$(myLink).html("spurl");
				$(right).append(myLink);
				
				// scuttle
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to scuttle', src: "/sites/all/themes/acquia_prosper/js/social/images/scuttle.png"  });
				$(right).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://www.scuttle.org/bookmarks.php/maxpower?action=add&address='+encodeURIComponent(url)+'&title='+title+'&description=';
				$(myLink).attr({ href: hrefs , title: 'send to scuttle' });
				$(myLink).html("scuttle");
				$(right).append(myLink);
				
				// ask
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to ask.com', src: "/sites/all/themes/acquia_prosper/js/social/images/ask.png"  });
				$(right).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://mystuff.ask.com/mysearch/QuickWebSave?v=1.2&t=webpages&title='+title+'&url='+encodeURIComponent(url);
				$(myLink).attr({ href: hrefs , title: 'send to ask' });
				$(myLink).html("ask");
				$(right).append(myLink);
				
				// yahoo
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to yahoo', src: "/sites/all/themes/acquia_prosper/js/social/images/im_yahoo.gif"  });
				$(right).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://myweb2.search.yahoo.com/myresults/bookmarklet?u='+encodeURIComponent(url)+'&t='+title;
				$(myLink).attr({ href: hrefs , title: 'send to yahoo' });
				$(myLink).html("yahoo");
				$(right).append(myLink);
				
				// gabbr
				var img = document.createElement('img');
				$(img).attr({ alt: 'send to gabbr', src: "/sites/all/themes/acquia_prosper/js/social/images/gabbr.gif"  });
				$(right).append(img);
				
				var myLink = document.createElement('a');
				var hrefs =  'http://www.gabbr.com/submit/?bookurl='+encodeURIComponent(url);
				$(myLink).attr({ href: hrefs , title: 'send to gabbr' });
				$(myLink).html("gabbr");
				$(right).append(myLink);

				
//				$(".soc_container").css("visibility","visible");
				$(".soc_container").fadeIn(500);
					
				// ajax window	
				$('.soc_left a').bind("click",function(e){
					e.preventDefault();
					var address 	= this;
					var scTop 		= $(window).scrollTop();
                    var width		= 0;									
					
					if(jQuery.browser.msie){
						width = document.body.clientWidth;
					}else{
						width	= window.innerWidth;
					}
				
					var left		= (width - 980) /2;
					var wind 		= document.createElement("div");
			        var cssObj;
					
					if(jQuery.browser.msie){
						 cssObj = {
							bottom:0,
							width:'980px',
							position:'absolute',
							right: 0,
							border: '1px solid #515151',
							visibility:'visible'
			
						 }
					}else{
						 cssObj = {
							top:scTop+20,
							width:'980px',
							position:'absolute',
							left: left + 'px'
			
						 }
					}
						
					$(wind).css(cssObj);
					$(wind).addClass('open_window');		
				
					var closeX = document.createElement('img');
					$(closeX).attr({ src:"/sites/all/themes/acquia_prosper/js/social/images/close.gif", position:'absolute',top:"0",right:"0" });
					$(closeX).addClass('close');
					
					$(closeX).click(function(){
						$(wind).remove();											
					})
					
					$(wind).prepend(closeX);
					$(div).append(wind);
					
					var cssObj2 = {
        				width:'980px',
						height:'500px',
						border: 'none',
						position:'absolute',
						overflow:'auto',
						display:'block'
     				 }
					
					var c	 = document.createElement('iframe');		
					$(c).attr("src",this);
					$(c).css(cssObj2);
					$(wind).prepend(c);
					
	       })				
		}			
	})		
 })