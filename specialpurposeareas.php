<?php $title = 'Special Purpose Areas';	?>
<?php include 'header.php'; ?>

    <h2 class="page-header">Special Purpose Areas</h2>

    <p>The group has defined several informal areas that are significant for one reason or another.</p>

    <ul>
        <li>Cattle Grazing Trials</li>
        <li>Plantations</li>
        <li>Commemoration</li>
    </ul>

    <p>Click on an area for more information</p>

    <div id="specialpurposeareas" style="width:750px;height:100px;"><div/>

    <script>
        function initMap() {

            var specialpurposeareasmap = new google.maps.Map(document.getElementById('specialpurposeareas'), {
                zoom: 11,
            });

            var specialpurposes = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/coolemanridge.kmz',

                map: specialpurposeareasmap

            });
        }

    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

<?php include 'footer.php'; ?>