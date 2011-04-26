jQuery.YQL = function(query, callback) {
    var encodedQuery = encodeURIComponent(query.toLowerCase()),
        url = 'http://query.yahooapis.com/v1/public/yql?q='
            + encodedQuery + '&format=json&callback=?';
    jQuery.getJSON(url, callback);
};

var currentTime = new Date()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()

var suffix = "am";
if (hours >= 12) {
suffix = "pm";
hours = hours - 12;
}
if (hours == 0) {
hours = 12;
}

if (minutes < 10)
minutes = "0" + minutes


jQuery(function() {
jQuery.YQL("select * from weather.forecast where location=76048",function(data){
            var w=data.query.results.channel;
            var weatherImage="http://l.yimg.com/a/i/us/nws/weather/gr/"+w.item.condition.code+"d.png";
            var wd=w.wind.direction;
            if(wd>=348.75&&wd<=360){wd="N"};if(wd>=0&&wd<11.25){wd="N"};if(wd>=11.25&&wd<33.75){wd="NNE"};if(wd>=33.75&&wd<56.25){wd="NE"};if(wd>=56.25&&wd<78.75){wd="ENE"};if(wd>=78.75&&wd<101.25){wd="E"};if(wd>=101.25&&wd<123.75){wd="ESE"};if(wd>=123.75&&wd<146.25){wd="SE"};if(wd>=146.25&&wd<168.75){wd="SSE"};if(wd>=168.75&&wd<191.25){wd="S"};if(wd>=191.25 && wd<213.75){wd="SSW"};if(wd>=213.75&&wd<236.25){wd="SW"};if(wd>=236.25&&wd<258.75){wd="WSW"};if(wd>=258.75 && wd<281.25){wd="W"};if(wd>=281.25&&wd<303.75){wd="WNW"};if(wd>=303.75&&wd<326.25){wd="NW"};if(wd>=326.25&&wd<348.75){wd="NNW"};
            jQuery('#weatherImage').html("<img src='" + weatherImage + "' alt='" + w.item.condition.text + "' width='125' />");
            jQuery('#weatherTemp').html(w.item.condition.temp+"&deg;");
            jQuery('#weatherText').text(w.item.condition.text);
            jQuery('#weatherWind').html("Wind: " + wd +" "+w.wind.speed+"mph");
            jQuery('#sunup').html("<strong>Sunrise:</strong> " + w.astronomy.sunrise);
            jQuery('#sundown').html("<strong>Sunset:</strong> " + w.astronomy.sunset);
			jQuery('#localtime').html(hours + ":" + minutes + " " + suffix);
       });
});