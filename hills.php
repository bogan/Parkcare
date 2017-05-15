<?php $title = 'Hills';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Ridge</a></li>
        <li><a href="#">Features</a></li>
        <li class="active">Hills</li>
    </ul>

    <h2 class="page-header">Hills</h2>

    <p>The Cooleman Ridge Nature Reserve is distinctve among other Canberra Nature Parks. It is a long ridge line that is made up of a number of separate gently rolling hills on the ridge.</p>

    <p>
        Cooleman Ridge is a ridge composed of a series of six low lying hills - Mr Arawang (753m), Reservoir Hill (734m), Sentry Box Hill (733m), Cooleman Trig (732m), One Tree Hill (703m) and Fence Post Hill (653m).
    </p>

    <p> Some of these hills have their own summit trails - Mt Arawang and Cooleman Trig. Please see our <a href="trails.php">Trails</a> page for more information.</p>

    <p>
        We think that we have the best views in Canberra. The various ranges, Bullen, Tidbinbilla and Brindabella ranges in the background.</p>

    <p>Click on an area for more information</p>

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