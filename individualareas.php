<?php $title = 'Individual Areas';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Work</a></li>
        <li><a href="#">Areas</a></li>
        <li class="active">Individual Areas</li>
    </ul>

    <h2 class="page-header">Individual Areas</h2>

    <p>The group has also many individual work areas. These are typically small areas outside of the group areas where individual members work by themselves whenever they want.</p>

    <p>These individual areas are an importmant complement to the group area work. They help link the various group areas into a more integrated whole.</p>

    <p>Click on an area for more information</p>

    <div id="individualareas" style="width:750px;height:600px;"><div/>

    <script>
        function initMap() {

            var individualareasmap = new google.maps.Map(document.getElementById('individualareas'), {
                zoom: 11,
            });

            var individuals = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/coolemanridge.kmz',

                map: individualareasmap

            });
        }
    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

<?php include 'footer.php'; ?>