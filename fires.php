<?php $title = 'Fire Survey';	?>
<?php include 'header.php'; ?>
<?php include 'articleheader.php'; ?>

    <ul class="breadcrumb">
        <li>Home</li>
        <li>Our Work</li>
        <li>Surveys</li>
        <li class="active">Fire Survey</li>
    </ul>

    <div class="page-header">
        <h2>Fire Survey</h2>
    </div>

    <p>
        The Cooleman Ridge Nature Reserve is regularly burnt for hazard reduction files.
        These various fires have a significant impact on the regeneration of the bush. Please see our <a href="fire.php">Fire</a> page for more information about the role fire plays on the ridge.
        The group aims to record the location of each fire so as to better understand fire has on the ridge.
    </p>

    <p>Please click on a coloured area for more information</p>

    <div id="groupareas" style="height:600px;"></div>

    <script>
        function initMap() {

            var groupareasmap = new google.maps.Map(document.getElementById('groupareas'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/fires.kml',

                map: groupareasmap

            });
        }

    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

<?php include 'articlefooter.php'; ?>
<?php include 'footer.php'; ?>