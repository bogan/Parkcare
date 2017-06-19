<?php $title = 'Blackberrys';?>
<?php include 'header.php';?>
<?php include 'databasedb.php';?>
<?php include 'articleheader.php'; ?>

    <script>
        function initMap() {

            var locations = [

                <?php

                while($row = $result->fetch_assoc()) {

                    $id = $row["id"];
                    $source = $row["source"];
                    $easting = $row["easting"];
                    $northing = $row["northing"];
                    $latitude = $row["latitude"];
                    $longitude = $row["longitude"];
                    $size = $row["size"];
                    $density = $row["density"];
                    $health = $row["health"];
                    $burnt = $row["burnt"];
                    $comment = $row["comment"];
                    $creation_date = date_format(date_create($row["creation_date"]),"d-m-Y");
                    $last_updated_date = date_format(date_create($row["last_updated_date"]),"d-m-Y");

                    echo "[$id, \"$source\", $easting, $northing, $latitude, $longitude, \"$size\", \"$density\", \"$health\", \"$burnt\", \"$comment\", \"$creation_date\", \"$last_updated_date\"],";
                }

                ?>
            ]

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: { lat: -35.361451, lng: 149.033615 },
                mapTypeId: google.maps.MapTypeId.SATELLITE
            });

            for (i = 0; i < locations.length; i++)
            {
                addLocation(map, locations[i])
            }
        }

        function addLocation(map, location) {

            var id = location[0];
            var source = location[1];
            var easting = location[2];
            var northing = location[3];
            var latitude = location[4];
            var longitude = location[5];
            var size = location[8];
            var density = location[7]
            var health = location[8];
            var burnt = location[9];
            var comment = location[10];
            var creation_date = location[11];
            var last_updated_date = location[12];

            var patch = new google.maps.LatLng(latitude, longitude);
            var marker = new google.maps.Marker({ position: patch, map: map, label: id.toString(), title: "ID# " + id.toString() });
            var url = "http://maps.google.com/?q=loc:" + latitude + "," + longitude + "&z=17&t=k";

            var contentString =
                "<div>" +
                "<p><b>ID:</b> " + id.toString() + "</p>" +
                "<p><b>Source:</b> " + source.toString() + "</p>" +
                "<p><b>Latitude:</b> " + latitude.toString() + "</p>" +
                "<p><b>Longitude:</b> " + longitude.toString() + "</p>" +
                "<p><b>Easting:</b> " + easting.toString() + "</p>" +
                "<p><b>Northing:</b> " + northing.toString() + "</p>" +
                "<p><b>Size:</b> " + size + "</p>" +
                "<p><b>Density:</b> " + density + "</p>" +
                "<p><b>Health:</b> " + health + "</p>" +
                "<p><b>Burnt:</b> " + burnt + "</p>" +
                "<p><b>Comment:</b> " + comment + "</p>" +
                "<p><b>Creation Date:</b> " + creation_date + "</p>" +
                "<p><b>Last Updated Date:</b> " + last_updated_date + "</p>" +
                "<p><a href=\"" + url + "\">Open in Google Maps</a></p>" +

                "</div>";

            //

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }

    </script>

    <script async="" defer=""
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap">
    </script>

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Work</a></li>
        <li><a href="#">Surveys</a></li>
        <li class="active">Woody Weed Survey</li>
    </ul>


    <h2 class="page-header">Woody Weed Survey</h2>

    <p>The following map displays specific occurences of blackberry bushes found on Cooleman Ridge Nature Reserve</p>

    <p><strong>NOTE: You can click on each marker for more detailed information</strong></p>

    <div id="map" style="height:600px;"></div>



    <p>The following table summarises the information contained in the map above.</p>




    <!--<div>-->
    <!--	<a href="blackberry.php">Create New Record</a>-->
    <!--</div>-->
    <div>
        <a href="kml.php">Export as KML file</a>
    </div>
    <div>
        <a href="csv.php">Export as CSV file</a>
    </div>
    <div>
        <table class="tablesorter table table-striped table-bordered table-hover table-condensed">
            <tr>
                <th>ID</th>
                <th>Source</th>
                <th>Easting</th>
                <th>Northing</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Size</th>
                <th>Density</th>
                <th>Health</th>
                <th>Burnt</th>
                <th>Comment</th>
                <th>Creation Date</th>
                <th>Last Updated Date</th>
                <!--    <th>Action</th>-->
            </tr>

            <?php

            $result->data_seek(0);

            while($row = $result->fetch_assoc()) {

                $id = $row["id"];
                $creation_date = date_create($row["creation_date"]);
                $last_updated_date = date_create($row["last_updated_date"]);

                echo "<tr>";
                echo "<td>" . $row["id"]. "</td>";
                echo "<td>" . $row["source"]. "</td>";
                echo "<td>" . $row["easting"]. "</td>";
                echo "<td>" . $row["northing"]. "</td>";
                echo "<td>" . $row["latitude"]. "</td>";
                echo "<td>" . $row["longitude"]. "</td>";
                echo "<td>" . $row["size"]. "</td>";
                echo "<td>" . $row["density"]. "</td>";
                echo "<td>" . $row["health"]. "</td>";
                echo "<td>" . $row["burnt"]. "</td>";
                echo "<td>" . $row["comment"]. "</td>";
                echo "<td>" . date_format($creation_date,"d/m/Y"). "</td>";
                echo "<td>" . date_format($last_updated_date,"d/m/Y"). "</td>";
//	echo "<td><a href=\"blackberry.php?id=$id\">" . "Edit</a></td>";
                echo "</tr>";
            }

            ?>
        </table>
    </div>

<?php include 'articlefooter.php'; ?>
<?php include 'footer.php'; ?>