<?php $title = 'Areas';	?>
<?php include 'header.php'; ?>

    <h2 class="page-header">Areas</h2>

    <p>The group has defined various areas to help in the managment of the reserve.</p>

    <h3>Group Areas</h3>

    <p>Group Areas have been defined for where regular group work is perform. This includes on of our regular group meetings</p>

    <p>Click on an area for more information</p>

    <div id="groupareas"><div/>

    <h3>Individual Areas</h3>

    <p>The group has also many individual work areas. These are typically small areas outside of the group areas where individual members work by themselves whenever they want. These individual areas are an importmant complement to the group area work.</p>

    <p>Click on an area for more information</p>

    <div id="individualareas" style="width:750px;height:600px;"><div/>

    <h3>Special Purpose Areas</h3>

    <p>The group has defined serveral informal areas that are significant for one reason or another.</p>

    <ul>
        <li>Cattle Grazing Trials</li>
        <li>Plantations</li>
        <li>Commemoration</li>
    </ul>

    <p>Click on an area for more information</p>

    <div id="specialpurposeareas" style="width:750px;height:100px;"><div/>

    <script>
        function initMap() {

//            var groupareasmap = new google.maps.Map(document.getElementById('groupareas'), {
//                zoom: 18,
//            });

//            var individualareasmap = new google.maps.Map(document.getElementById('individualareas'), {
//                zoom: 11,
//            });

//            var specialpurposeareasmap = new google.maps.Map(document.getElementById('specialpurposeareas'), {
//                zoom: 11,
//            });

//            var groups = new google.maps.KmlLayer({
//
//                url: 'http://www.coolemanridge.org.au/coolemanridge.kmz',
//
//                map: groupareasmap
//
//            });

//            var individuals = new google.maps.KmlLayer({
//
//                url: 'http://www.coolemanridge.org.au/coolemanridge.kmz',
//
//                map: individualareasmap
//
//            });
//
//            var specialpurposes = new google.maps.KmlLayer({
//
//                url: 'http://www.coolemanridge.org.au/coolemanridge.kmz',
//
//                map: specialpurposeareasmap
//
//            });

        }

    </script>

    <script async="" defer=""

            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap">

    </script>
<?php include 'footer.php'; ?>