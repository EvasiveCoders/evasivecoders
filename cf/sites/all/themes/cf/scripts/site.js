jQuery(function(){
jQuery(".togglebox").hide();
jQuery("#toggy").click(function(){
jQuery(this).next(".togglebox").slideToggle("slow");
return true;
});
});