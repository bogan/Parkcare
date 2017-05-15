<?php $title = 'Plantations';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Ridge</a></li>
        <li><a href="#">Features</a></li>
        <li class="active">Plantations</li>
    </ul>

    <h2 class="page-header">Plantations</h2>

    <p>The Cooleman Ridge Nature Reserve is distinctve among other Canberra Nature Parks by the number of separate hills on the ridge.</p>

    <p>Click on an area for more information</p>

    <div id="plantations" style="height:600px;"></div>

    <script>
        function initMap() {

            var plantationsmap = new google.maps.Map(document.getElementById('plantations'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/plantations.kml',

                map: plantationsmap

            });
        }

    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

<?php include 'footer.php'; ?>