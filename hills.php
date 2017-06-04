<?php $title = 'Hills';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li>Home</li>
        <li>Our Ridge</li>
        <li>Features</li>
        <li class="active">Hills</li>
    </ul>

    <h2 class="page-header">Hills</h2>

    <p>Cooleman Ridge is distinctve among other Canberra Nature Parks in that instead of being dominated by one large peak, it is a long flat ridge line that is comprised of a series of separate gently rolling hills.</p>

    <p>
        The main hills on the ridge are Mr Arawang (753m), Reservoir Hill (734m), Sentry Box Hill (733m), Cooleman Trig (732m), One Tree Hill (703m) and Fence Post Hill (653m).
    </p>

    <p> Some of these hills have their own summit trails - Mt Arawang and Cooleman Trig. Please see our <a href="trails.php">Trails</a> page for more information.</p>

    <p>
        A major benefit of these hills is that provide probably the best views found in the Canberra urban area. Not only can one get views of most of the city itself but you can also get great views to the west over the Murrumbidge Valley to the Bullen, Tidbinbilla and Brindabella ranges in the background.</p>

    <p>Please click on the markers to get more information about each of the hilss found on the ridge.</p>

    <div id="hills" style="height:600px;"></div>

    <script>
        function initMap() {

            var hillsmap = new google.maps.Map(document.getElementById('hills'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/hills.kml',

                map: hillsmap

            });
        }

    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

<?php include 'footer.php'; ?>