<?php $title = 'Location';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Ridge</a></li>
        <li class="active">Location</li>
    </ul>

    <h2 class="page-header">Location</h2>

    <p>
        The Cooleman Ridge Nature reserve is located on in the south western suburbs of Canberra. It is bordered by the Canberra suburbs of Chapman, Fisher and Kambah.
    </p>

    <p>
        The Cooleman Ridge Nature Reserve is It runs in a general north-west to south-east direction. It is 3.3km long on this axis, and averages approximately 500m in the other direction. It is appoximately 10 sq km (10000 hectares) in area.
    </p>

    <p>The Cooleman Ridge Nature Reserve is a lowing lying ridge made of many small hills.</p>

    <p>
        The Cooleman Ridge Nature Reserve is an example of a grass woodland ecosystem which is highly endangered ecosystem. These ecosystems are vulnerable to grazing and urban development and very few high quality ones still exist in the Australian Capital Territory.
    </p>

    <div id="location" style="height:600px;"></div>

    <script>
        function initMap() {

            var locationmap = new google.maps.Map(document.getElementById('location'), {
                zoom: 11,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });

            var location = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/location.kml',

                map: locationmap

            });
        }
    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

    <div align="center">
        <img align="center" alt="" height="970" src="images/ourmap.jpg" width="700">
    </div>

<?php include 'footer.php'; ?>