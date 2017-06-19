<?php $title = 'Group Areas';	?>
<?php include 'header.php'; ?>
<?php include 'articleheader.php'; ?>


    <ul class="breadcrumb">
        <li>Home</li>
        <li>Our Work</li>
        <li>Areas</li>
        <li class="active">Group Areas</li>
    </ul>

    <h2 class="page-header">Group Areas</h2>

    <p>
        The group has defined several Group Areas. These areas are areas we work regularly work on a specific on the ridge as a group.
    </p>

    <p>
        The main purpose of the Group Areas area is to be the venue where one of a regularly monthly <a href="meetings#groupmeetings">group meetings</a> take place. The group rotates through the group areas and means that a group area is visited approximately 3 or 4 times a year, once per season.
    </p>

    <p>
        The groups has defined 5 main group areas:
        <ul>
            <li>Group Area North</li>
            <li>Group Area Central</li>
            <li>Group Area South</li>
        </ul>
    </p>

    <p>
        The groups areas have been selected based on a variety of criteria. These include:
        <ul>
            <li>Ease of Access</li>
            <li>Ecological Value</li>
            <li>Work Value</li>
        </ul>
    </p>

    <p>
        The Group Areas are an important part of the groups <a href="strategy.php">strategy</a> to rehabilitate the ridge. The main functions of the Group Work Areas include the following:

        <ul>
            <li>
                Form the basis of the long term goal to restore the health of the ridge.
            </li>
            <li>
                Act as reservoir of high quality biological diversity to form the nuculeus of future expansion ont the ridge.
            </li>
            <li>
                Act as showpieces of the what the ridge has to offer for both educational iand inspirational purposes.
            </li>
            <li>
                Allow the group to focus on the areas are most valuable and thus help in maximising the return on our work.
            </li>
            <li>
                Demonstrate the effectivess of the groups strategy
            </li>
            <li>
                Promotes the work of the group  and help encourages other people to help.
            </li>
        </ul>
    </p>

    <p>
        The group work areas have shown major improvements over the years, with some of the areas now being very close to their original state. The long term goal for the group work areas is to progessively expand them and link them with other group areas or with other <a href="individualareas.php">individual work areas</a>.
    </p>


    <p>
        Click on a coloured area for more information about the individual group areas.
    </p>

    <div id="groupareas" style="width:750px;height:600px;"></div>

    <div>
        <a href="groupareas.kml">Export as KML file</a>
    </div>

    <script>
        function initMap() {

            var groupareasmap = new google.maps.Map(document.getElementById('groupareas'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/groupareas.kml',

                map: groupareasmap

            });
        }

    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

<?php include 'footer.php'; ?>