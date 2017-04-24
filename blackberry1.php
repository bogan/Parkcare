<?php $title = 'Ridge';	?>
			<?php include 'header.php'; ?>
			
			<script>
			var myCenter1=new google.maps.LatLng(-35.366504,149.046190);
			var myCenter2=new google.maps.LatLng(-35.367151,149.046327);
			var patch28=new google.maps.LatLng(-35.367532,149.046711);
			var patch41=new google.maps.LatLng(-35.367688,149.0471);
			

			function initialize()
			{
			var mapProp = {
			  center:myCenter1,
			  zoom:18,
			  mapTypeId:google.maps.MapTypeId.SATELLITE
			  };
			
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			
			var marker1=new google.maps.Marker({position:myCenter1,});
			var marker2=new google.maps.Marker({position:myCenter2,});
			var marker28=new google.maps.Marker({position:patch28,});
			var marker41=new google.maps.Marker({position:patch41,});
			


			marker1.setMap(map);
			marker2.setMap(map);
			marker28.setMap(map);
			marker41.setMap(map);


			}
			
			google.maps.event.addDomListener(window, 'load', initialize);
			</script>

			<div id="googleMap" style="width:1000px;height:760px;"></div>
						
			<?php include 'footer.php'; ?>
