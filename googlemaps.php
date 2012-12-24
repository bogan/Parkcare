<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        html
        {
            height: 100%;
        }

        body
        {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #map_canvas
        {
            height: 100%;
        }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&sensor=true">    </script>
    
    <!--https://maps.google.com.au/maps?q=Cooleman+Ridge+Nature+Reserve,+Australian+Capital+Territory&hl=en&sll=-35.358635,149.10482&sspn=0.852306,1.234589&oq=coo&hq=Cooleman+Ridge+Nature+Reserve,+Australian+Capital+Territory&t=m&z=15-->
    <script type="text/javascript">      
    		function initialize() { 
    		var myLatlng = new google.maps.LatLng(-35.358635,149.10482);
    			var mapOptions = { 
    					center: myLatlng, 
    					zoom: 15, mapTypeId: 
    					google.maps.MapTypeId.ROADMAP };
    					
    			var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    			
    			var contentString = '<div id="content">'+    '<div id="siteNotice">'+    '</div>'+    '<h2 id="firstHeading" class="firstHeading">Uluru</h2>'+    '<div id="bodyContent">'+    '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +    'sandstone rock formation in the southern part of the '+    'Northern Territory, central Australia. It lies 335 km (208 mi) '+    'south west of the nearest large town, Alice Springs; 450 km '+    '(280 mi) by road. Kata Tjuta and Uluru are the two major '+    'features of the Uluru - Kata Tjuta National Park. Uluru is '+    'sacred to the Pitjantjatjara and Yankunytjatjara, the '+    'Aboriginal people of the area. It has many springs, waterholes, '+    'rock caves and ancient paintings. Uluru is listed as a World '+    'Heritage Site.</p>'+    '<p>Attribution: Uluru, <a href="http://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+    'http://en.wikipedia.org/w/index.php?title=Uluru</a> (last visited June 22, 2009).</p>'+    '</div>'+    '</div>';
    			
    			var infowindow = new google.maps.InfoWindow({    content: contentString});
    			
    			var marker = new google.maps.Marker({    
						position: myLatlng,    
						animation: google.maps.Animation.DROP,
						map: map,    
						title:"Uluru (Ayers Rock)"});
						
    			google.maps.event.addListener(marker, 'click', function() {  infowindow.open(map,marker);});    			
 			} 
 			
 			
			function initialize1() {  
			var myLatLng = new google.maps.LatLng(24.886436490787712, -70.2685546875);  
			var mapOptions = {    zoom: 5,    center: myLatLng,    mapTypeId: google.maps.MapTypeId.TERRAIN  };  
			var bermudaTriangle;  
			var map = new google.maps.Map(document.getElementById("map_canvas"),      mapOptions);  
			var triangleCoords = [    
			new google.maps.LatLng(25.774252, -80.190262),    
			new google.maps.LatLng(18.466465, -66.118292),    
			new google.maps.LatLng(32.321384, -64.75737),    
			new google.maps.LatLng(25.774252, -80.190262)  ];  
			// Construct the polygon  
			// Note that we don't specify an array or arrays, but instead just  
			// a simple array of LatLngs in the paths property  
			bermudaTriangle = new google.maps.Polygon({    paths: triangleCoords,    strokeColor: "#FF0000",    strokeOpacity: 0.8,    strokeWeight: 2,    fillColor: "#FF0000",    fillOpacity: 0.35  });  bermudaTriangle.setMap(map);}   
    			
    			
    </script>
</head>
<body onload="initialize()">
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Cooleman+Ridge+Nature+Reserve,+Australian+Capital+Territory&amp;aq=0&amp;oq=coo&amp;sll=-35.358635,149.10482&amp;sspn=0.852306,1.234589&amp;ie=UTF8&amp;hq=Cooleman+Ridge+Nature+Reserve,+Australian+Capital+Territory&amp;t=m&amp;ll=-35.359717,149.03574&amp;spn=0.024708,0.030244&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Cooleman+Ridge+Nature+Reserve,+Australian+Capital+Territory&amp;aq=0&amp;oq=coo&amp;sll=-35.358635,149.10482&amp;sspn=0.852306,1.234589&amp;ie=UTF8&amp;hq=Cooleman+Ridge+Nature+Reserve,+Australian+Capital+Territory&amp;t=m&amp;ll=-35.359717,149.03574&amp;spn=0.024708,0.030244" style="color:#0000FF;text-align:left">View Larger Map</a></small>
 			
    <div id="map_canvas" style="width: 100%; height: 100%"></div>
</body>
</html>