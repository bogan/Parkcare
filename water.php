<?php $title = 'Water';	?>
<?php include 'header.php'; ?>
<?php include 'articleheader.php'; ?>

    <ul class="breadcrumb">
        <li>Home</li>
        <li>Our Ridge</li>
        <li>Features</li>
        <li class="active">Water</li>
    </ul>

    <h2 class="page-header">Water</h2>

    <p>Water is an important part of the ecology of Cooleman Ridge. Unfortunately, water is one feature of the ridge that is not very common with little in the way of permanent natural water sources. There are however, some significant aspects to water including the following.</p>

    <h3>Creeks</h3>

    <p>Cooleman Ridge is the headwaters for four creeks.</p>

    <ul>
        <li><strong>Bulgar Creek</strong> - located on the north west of the ridge and flows to the Murrumbidgee River.</li>
        <li><strong>Weston Creek</strong> - located on the north east side of the ridge and flows into the Molonglo River.</li>
        <li><strong>Village Creek</strong> - located on the the south east end of the ridge and flows into Lake Tuggeranong.</li>
        <li><strong>New Station Creek</strong> - located on the south west edge of the ridge and flows into the Murrumbidge River.</li>
    </ul>

    <p>There are no permanent water courses found on the ridge. The creeks are intermittent and only flow for a short time after heavy rain.</p>

    <h3>Dams</h3>

    <p>
        Cooleman Ridge has three dams:

        <ul>
            <li><strong>The Kathner Street Dam</strong></li>
            <li><strong>The Old Dam</strong></li>
            <li><strong>The Dry Dam</strong></li>
        </ul>

    <p>
        These dams were created principally to support cattle grazing on the ridge, either prior to the ridge becoming a reserve (eg. The Old Dam and Dry Dams) or after it (e.g. Kathner Street Dam). A secondary reason for their creation was to help in firefighting in the event of a fire occuring on the ridge.
    </p>

    <p>
      The main role these dams serve today is to act as artificial wetlands. They provide important habitats for various aquatic species including fish, frogs, ducks, turtles and insects. They play an important role in preserving the biodiversity of the ridge.
    </p>

    <p>
        These dams are a major focus of the work that group does as they provide both important environmental and recreational benefits.
    </p>

    <p>
        These dams are the focus of our Dam Survey which provides a photographic record of the dams over several years. Please see our <a href="dams.php">Dam Survey</a> page for more details.
    </p>

    <p><strong>Please click on one of the coloured lines to obtain more information about the various trails found on the ridge.</strong></p>

    <div id="dams" style="height:600px;"></div>

    <div>
        <a href="trails.kml">Export as KML file</a>
    </div>

    <script>
        function initMap() {

            var groupareasmap = new google.maps.Map(document.getElementById('dams'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/trails.kml',

                map: groupareasmap

            });
        }

    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

    <h4>Kathner Street Dam</h4>

    <p>
        The Kathner Street Dam is located on the headwaters of Bulgar Creak on the north western edge of the ridge. It is easily accessed from the Kathner Street entrance to the reserve. The dam is of a medium size.
    </p>



    <p>
        The water in the dam is sourced from one of the small tributaries of the Bulgar Creek. The flow of water is also supplemented by the flow of water comming from the stormwater drain located further upstream. running along the management trail on the north western slopes of the ridge, which can significantly increase the water supply to the dam.</p>

    <p>
        The water level in the dam fluctuates quickly from completely full to completely empty, but most of the time there is some signficant water contained in.
    </p>

    <p>
        The dam is the focus of a lot of the work that the group performs. The dam is part of one of the groups Group Work Areas and is visited several times a year as part of its Monthly meeting, but also the main focus of one of the groups special area groups. The friday work group.
    </p>

    <p>
        The dam and its immediate environs have seen significant improvement over the years. Many weeds have been eliminated resulting increase in many native species that grow in wet areas such as reeds and rushes. The main work that still remains to be performed is the removal of the remaining pasture grasses from the drain line. Erosion control is also an important part of the work performs on this dam. The group has created man
    </p>

    <p>
        The dam now provides extra facilities that have been ordangised by the group. These include a bench that is now a popular spot for the community to stop and observe the dam and its wildlife. The dam has also contained a bird platform created and maintained by the group. The platform was useful in allowing birds to nest.
    </p>

    <h4>Old Dam</h4>

    <p>
        The Old Dam is located on the headwaters of New Station Creek on the south western slopes of the ridge. It is the largest dam on the ridge.
    </p>

    <p>
        The dam was created when the ridge was a pastoral property to provide water to cattle and sheep.
    </p>

    <p>
        The Old Dam is named simply because it was created before the &quot;newer&quot; Kathner Street Dam. It was created before the formation of the group by the former owners of the pastoral property.
    </p>

    <p>
        The dam is fed by one of the tributaries of New Station Creek. The watershed for this dam is also the largest of the dams on the ridge and it is therefore almost always contains at least water, even in times of drought.
    </p>

    <p>
        The dam contains a bench which was organised by the group.
    </p>

    <p>
        The Old Dam was a major focus of the groups early work in the 1990s with many working parties held there. The group removed many weeds and planted many trees to provide habitat and improve the visual appeal of the dam. The dam is not now regularly worked on.
    </p>

    <p>
        The dam is important habitat for many acquatic species that are not found anywhere else on the ridge such as turtles and frogs.
    </p>

    <h4>Dry Dam</h4>

    <p>The Dry Dam is located on the south eastern of the ridge on the south western slopes of Mt Arawang.</p>

    <p>The Dry Dam is named so simply because it is nearly always now dry.

    <p>The dam was created when the ridge was a pastoral property to provide water to cattle and sheep.</p>

    <p>The dam is effectively abandoned and derelict. The group hopes to one day restore this dam to provide important habitat on the southern and eastern parts of the ridge.</p>

    <p>The dam can be accessed from the Bicentennial Trail.</p>

    <p>The dam was supplied with water shedding from the south western slopes of Mt Arawang.</p>

    <h3>Stormwater</h3>

    <p>The north western slopes are traversed by a large storm water cut off drain. The main purpose of this drain is to prevent excess water runoff from the ridge into the houses belows the ridge in the adjacent suburbs of Kambah and Chapman.</p>

<?php include 'articlefooter.php'; ?>
<?php include 'footer.php'; ?>