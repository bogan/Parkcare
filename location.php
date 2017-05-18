<?php $title = 'Location';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Ridge</a></li>
        <li class="active">Location</li>
    </ul>

    <h2 class="page-header">Location</h2>

    <p>
        Cooleman Ridge is covered by the Cooleman Ridge Nature Reserve. It is located on in the south western suburbs of Canberra. It is bordered by the Canberra suburbs of Chapman, Fisher and Kambah.
    </p>

    <p>
        The Cooleman Ridge Nature Reserve runs in a general north-west to south-east direction. It is approximately 3.3km long on this axis, and generally averages approximately 500m in width in the north-east to south-west direction. It is appoximately 10 sq km (10000 hectares) in area.
    </p>

    <p>The Cooleman Ridge Nature Reserve is a lowing lying ridge made of many small hills. It is an example of a "grassy woodland" ecosystem which is highly endangered ecosystem. because they are often converted to grazing and/or urban development.

        There are very few high quality ones still exist in the Australian Capital Territory. The ecology has been significantly altered but some good high quality ones remain.
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

    <p>
        The official map of the nature reserve can be found at <a href="http://www.environment.act.gov.au/__data/assets/pdf_file/0007/390589/cnpmapcooleman.pdf">Cooleman Ridge Nature Reserve Map</a>
    </p>


    <div align="center">
        <img align="center" alt="" height="970" src="images/ourmap.jpg" width="700">
    </div>

<?php include 'footer.php'; ?>