<?php $title = 'Special Purpose Areas';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Work</a></li>
        <li><a href="#">Areas</a></li>
        <li class="active">Special Purpose Areas</li>
    </ul>

    <h2 class="page-header">Special Purpose Areas</h2>

    <p>The group has defined several informal areas that are significant for one reason or another.</p>

    <ul>
        <li>Cattle Grazing Trials</li>
        <li>Plantations</li>
        <li>Commemoration</li>
    </ul>

    <p>Click on an area for more information</p>

    <div id="specialpurposeareas" style="height:600px;"></div>

    <script>
        function initMap() {

            var specialpurposeareasmap = new google.maps.Map(document.getElementById('specialpurposeareas'), {
                zoom: 11,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });

            var specialpurposes = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/trails1.kmz',

                map: specialpurposeareasmap

            });
        }

    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

<?php include 'footer.php'; ?>