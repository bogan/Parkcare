<?php $title = 'Locaation';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Ridge</a></li>
        <li class="active">Location</li>
    </ul>

    <h2 class="page-header">Location</h2>

    <p>
    The Cooleman Ridge Nature reserve is appoximately 10 sq km (10000 hectares). It runs in a general North West to South East direction. It is 3.3km long on this axis, and averages approximately 500m in the other direction.
    </p>

    <p>The nature reserve borders the Canberra suburbs of Chapman, Fisher and Kambah.</p>

    <p>
        The Cooleman Ridge Nature Reserve is an example of a grass woodland ecosystem which is highly endagered ecosystem. These ecosystems are vulnerable to grazing and urban development and very few high quality ones still exist in the Australian Capital Territory.
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

<?php include 'footer.php'; ?>