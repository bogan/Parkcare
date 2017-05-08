<?php $title = 'About';
include 'header.php';
?>



    <h2 class="page-header">About</h2>

    <p>
    The Cooleman Ridge Park Care Group is a <a href="http://www.environment.act.gov.au/parks-conservation/parks-and-reserves/get-involved/parkcare-and-urban-landcare-program">ParkCare</a> group that &quot;cares&quot; for the Cooleman Ridge Nature Reserve.
    </p>

    <p>
        The Cooleman Ridge Park Care Group is small but active group made up of various volunteers from a variety of backgrounds. It includes scientists, public servants, accounts, homekeepers.
    </p>

    <p>
    The Cooleman Ridge Park Care Group is part of a larger network of other parkcare groups working throughout the ACT. See our <a href="partners.php">partners</a> page for more details.
    </p>

    <p>
    The mission of the Cooleman Ridge Park Care Group is to &quot;restore the bush&quot; by returning the ecology of the nature reserve to its pre-European state.
    </p>

    <p>
        The ridge has been part of various rural properties and the ecology of the ridge has been significantly change to fit in with the thinking of the day.
        The ridge has since became a nature reserve in the 1980's. Please see our <a href="history">history</a> page for a more detailed description of the history of the ridge.
    </p>

    <p>
        The group has managed to make some major improvements to the ecology of the ridge. Native habit has been progressively replaced damaged errors. There is still a signficant amoun of work to be done.
        Please see our group areas and individual areas to be more aware of the progress that has been made of the years.
    </p>

    <p>The nature reserve borders the Canberra suburbs of Chapman, Fisher and Kambah.</p>

    <p>
        The Cooleman Ridge Nature Reserve is an example of a grass woodland ecosystem which is highly endagered ecosystem. These ecosystems are vulnerable to grazing and urban development and very few high quality ones still exist in the Australian Capital Territory.
    </p>

    <p>
        The Cooleman Ridge Nature Reserve is one of the more damaged but there still remain many good areas. These areas serve as the nucleus of the groups efforts to restore the ecology of the ridge.
    </p>

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

