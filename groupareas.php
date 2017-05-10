<?php $title = 'Group Areas';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Work</a></li>
        <li><a href="#">Areas</a></li>
        <li class="active">Group Areas</li>
    </ul>

    <h2 class="page-header">Group Areas</h2>

    <p>Group Areas have been defined for where regular group work is perform.</p>

    <p>The main focus of the group area is to  be the place  were one of a regularly monthly meetings take place</p>

    <p>The work areas also serve the role of being of showpieces of the what the ridge has to offer and what the group has achieved.</p>

    <p>The group areas allow the group to focus on the areas are most valuable and thus help in maximising the return on our work</p>

    <p>The group work areas have shown major improvements over the years, with some of the areas now being very close to their original state.</p>

    <p> The groug areas form the future basis from which to expand and eventually link them up. the nucleus for future expansion. We focus on the best areas. We also try to link the areas eventually.</p>

    <p>The areas selected as group areas have been selected based on a variety of criteria. These include:
        <ul>
           <li>Access</li>
           <li>Ecological value</li>
           <li>Work value</li>
        </ul>
    </p>

    <p>Click on a coloured area for more information about the individual group areas.</p>

    <div id="groupareas" style="width:750px;height:600px;"><div/>

    <script>
        function initMap() {

            var groupareasmap = new google.maps.Map(document.getElementById('groupareas'), {
                zoom: 10,
            });

            var groups = new google.maps.KmlLayer({

                url: 'http://coolemanridge.org.au/coolemanridge.kmz',

                map: groupareasmap

            });
        }

    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

<?php include 'footer.php'; ?>