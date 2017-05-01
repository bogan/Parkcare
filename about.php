<?php $title = 'About';
include 'header.php';
?>



    <h2 class="page-header">About</h2>

    <p>
    The Cooleman Ridge Park Care Group is a <a href="http://www.environment.act.gov.au/parks-conservation/parks-and-reserves/get-involved/parkcare-and-urban-landcare-program">ParkCare</a> group that &quot;cares&quot; for the Cooleman Ridge Nature Reserve.
    </p>

    <p>
        The Cooleman Ridge Park Care Group is small but active group.
    </p>

    <p>
    The Cooleman Ridge Park Care Group is part of a network of other parkcare groups throughout the ACT.
    </p>

    <p>
    The mission of the Cooleman Ridge Park Care Group is to &quot;restore the bush&quot; by returning the ecology of the nature reserve to it's pre-European state.
    </p>

    <p>The nature reserve borders the Canberra suburbs of Chapman, Fisher and Kambah.</p>

    <p>
       The official map of the nature reserve can be found at <a href="http://www.environment.act.gov.au/__data/assets/pdf_file/0007/390589/cnpmapcooleman.pdf">Cooleman Ridge Nature Reserve Map</a>
    </p>

    <div id="map" style="width:750px;height:600px;"></div>

    <br/>

    <div align="center">
        <img align="center" alt="" height="970" src="images/ourmap.jpg" width="700">
    </div>

    <script>
        function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: { lat: -35.361451, lng: 149.033615 },
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });
        }
    </script>

    <script async="" defer=""
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap">
    </script>

<?php include 'footer.php'; ?>

