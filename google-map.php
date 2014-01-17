<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key= 	
AIzaSyDqLq437Q7l62LyH4NqiKjYiQ0e7HqBycc&sensor=false">
    </script>

    <script type="text/javascript">
      function initialize() {
	var myLatLng = new google.maps.LatLng(44.983957, -93.254075);
        var mapOptions = {
          center: myLatLng,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
	  scrollwheel: false,
          draggable: false
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
	
	var marker = new google.maps.Marker({
    		position: myLatLng,
    		map: map,
    		title:"Kemteck",
	});
	google.maps.event.addListener(marker, 'click', function() {
	    window.location.href="https://www.google.com/maps?q=219+Main+St+Se&t=m&hnear=219+SE+Main+St,+Minneapolis,+Minnesota+55414&z=16";
	  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="map-canvas"></div>