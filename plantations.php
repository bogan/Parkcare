<?php $title = 'Plantations';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Ridge</a></li>
        <li><a href="#">Features</a></li>
        <li class="active">Plantations</li>
    </ul>

    <h2 class="page-header">Plantations</h2>

    <p>The Cooleman Ridge Nature Reserve has several large plantations that have been planted on it.</p>

    <p>These plantations are made up various large trees - normally Eucalyptus and Acacia. Some of the species are indigenous to the ridge, but many are not.</p>

    <p>The purpose of the plantations is varied. Some are believed to be just windbreaks while others have been planted to replace the native tree cover that was originally removed as part of clearing the land. They also provide other benefits such as  suppressing weeds etc.</p>


    <p>These plantations are have been planted by both the group but some prexisted the group.</p>

    <p>Click on a coloured area for more information about each plantation.</p>

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