<html>
<head>
<link rel="stylesheet" type="text/css" href="googlemapselector.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script src="googlemapselector.js">

/***********************************************
* Google Map Selector- (c) Dynamic Drive (www.dynamicdrive.com)
* Please keep this notice intact
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

</script>
</head>
<body>
<div id="mapcolumn">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;height:250px;width:600px;"><div id="gmap_canvas" style="height:250px;width:600px;">
<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
<a class="google-map-code" href="http://www.embedgooglemap.net" id="get-map-data">embedgooglemap.net</a>
</div>
<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(0.4794214617682552,35.7863333442383),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(0.4794214617682552,35.7863333442383)});infowindow = new google.maps.InfoWindow({content:"<b>Kituro high school</b><br/><br/>114-30400 Kabarnet" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
</div>
</body>
</html>