<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/khs.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<footer>
    <div id="other-relevant-links">
	    <div class="other-links-title"><a href="index.php" id="home-page-link" data-toggle="tooltip" data-placement="top" title="Access home page"><i class="fa fa-home"></i>&nbsp;Home</a></div>
		    <p><a href="alumni.php" id="mail" data-toggle="tooltip" data-placement="top" title="Access Alumni Portal" style="">Alumni</a></p>
		    <p><a href="staff-portal.php" id="mail" data-toggle="tooltip" data-placement="top" title="Access Staff Portal" style="">Staff Portal</a></p>
			<p><a href="uploads\fee.pdf" id="mail" data-toggle="tooltip" data-placement="top" title="Access Parents Portal" download>Fee Structure</a></p>
	</div>
	<div id="footer-middle-column">
	<div id="mapcolumn">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <div style="overflow:hidden;height:250px;width:600px;">
	        <div id="gmap_canvas" style="height:250px;width:600px;">
            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
            <a class="google-map-code" href="http://www.embedgooglemap.net" id="get-map-data">embedgooglemap.net</a>
            </div>
        <script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(0.4794214617682552,35.7863333442383),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(0.4794214617682552,35.7863333442383)});infowindow = new google.maps.InfoWindow({content:"<br/><br/>Kituro high school</b><br/>114-30400 Kabarnet" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
    </div>
	</div><br/>
    <div class="footerdetails">
        <h4>Contact Us</h4>
            <p><i class="fa fa-map-marker"></i> <em>Address:</em> &nbsp;&nbsp; &nbsp;  P.O BOX 114-30400 KABARNET</p>
            <p><i class="fa fa-phone"></i> <em>Phone: </em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+254) 0726 179 177&nbsp;/&nbsp;0770 464 394</p>
            <p><i class="fa fa-facebook"></i> <em>Facebook:</em>&nbsp;&nbsp;&nbsp; ktrhs</p>
		    <p><i class="fa fa-twitter"></i> <em>Twitter:</em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; @ktrhs</p>
            <p><i class="fa fa-envelope"></i> <em>Email:</em> <a href="" id="mail">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; kiturohigh@gmail.com</a></p>
			
    </div>
	<div id="further-footer-details">
		<p>
           <!-- <a href="#" id="portal1"  data-toggle="tooltip" data-placement="top" title="Feed">Rss</a></i>&nbsp;&nbsp;|&nbsp;-->
            <a href="elearn-login.php" id="portal" data-toggle="tooltip" data-placement="top" title="Students e-learn portal"><i class="fa fa-folder-open" style="font-size: 25px;color:#ffffff;"></i>&nbsp;E-learning</a>&nbsp;|&nbsp;
            <a href="student-portal.php" id="portal" data-toggle="tooltip" data-placement="top" title="Students portal">Student Portal</a>&nbsp;|&nbsp;
            <a href="#" id="portal" data-toggle="tooltip" data-placement="top" title="">Other Links</a></p>
	</div></p>
	</div>
	<div class="footer-border"></div>
    <div class="footercopyright">
        <p id="copyright">Copyright &copykiturohighschool 2016</p>
    </div>
</footer>
