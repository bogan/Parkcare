<?php $title = 'Trails';	?>
<?php include 'header.php'; ?>

    <ul class="breadcrumb">
        <li>Home</li>
        <li>Our Ridge</li>
        <li>Features</li>
        <li class="active">Trails</li>
    </ul>

    <h2 class="page-header">Trails</h2>

    <p>The Cooleman Ridge Nature Reserve is lucky to be home to a wide variety of tracks that are of local, regional and national significance.</p>

    <p>These various trails serve a variety of purposes ranging from recreation (eg. walking, cycling, horse riding) to management (eg. weed spraying, fire control, etc).</p>

    <p>
        These trails play an important role for connecting the work of the group with the broader community through their recreational value.</p>

    <p>Please click on one of the coloured lines to obtain more information about the various trails found on the ridge.</p>

    <div id="groupareas" style="height:600px;"></div>

    <div>
        <a href="trails.kml">Export as KML file</a>
    </div>

    <script>
        function initMap() {

            var groupareasmap = new google.maps.Map(document.getElementById('groupareas'), {
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



    <h3>Canberra Centenary Trail</h3>

    <p>
        The <a href="http://www.environment.act.gov.au/parks-conservation/parks-and-reserves/find-a-park/rural/canberra-centenary-trail">Canberra Centenary Trail</a> is an ACT based multipurpose track that circumnavigates the city of Canberra. The track was created in 2013 to celebrate the 100th anniversery of the founding of the city of Canberra and is intended for use by both walkers and bike rider.
    </p>

    <p>
       Foo The section that cross the nature reserve is composed of both existing management vehicular trails as well as specially contructed walking trails.
    </p>

    <p>
        The section that crosses the Cooleman Ridge crosses all of our group work areas offers some of the best views that can be seen along the trail, looking out over the Murrumbidge River valley and beyond to the Bullen, Tidbinbilla and Brindabella ranges.
    </p>

    <p>
        The CCT is very popular with Canberrans and many. The group tries to maximise the benefit of this by publicing the work that it does through signage.
    </p>

    <h3>Mt Arawang Walking Trail</h3>

    <p>
        The Mt Arawang Walking Trail is a walking trail that allows walkers to access the summit of Mt Arawang - the highest point on the ridge. The trail has two entry/exit points - one at Namitjira and the other at Lincoln Place.</p>
    </p>

    <p>
        The track was upgraded in 2016 and provides a well formed path to the summit. The views from the summit are some of the best from Canberra. The walk takes approximately 1 hour return.
    </p>

    <h3>Cooleman Trig Walking Trail</h3>

    <p>
        This trail provides access to the summit of Cooleman Trig - the second highest peak on the ridge. The track is short but steep and is composed off a well formed sealed path with steps. Access is from Monkman Street. allow half an hour for the return walk.
    </p>

    <h3>Cooleman Ridge Nature Trail</h3>

    <p>
        The Cooleman Ridge Nature Trail is a 2.7km walking trail that was developed by the group. The purpose of the track is to introduce the public to some of the natural highlights of the ridge.
    </p>

    <p>
        The site of the Nature Trail was originally heavily degraded with little native vegetation. The group in the 1990s  worked extensively on regenerating the bush on this site with considerable succes. The Nature Trail highlights how effective the group can be in regenerating the bush.
    </p>

    <p>
        The Nature Trail is marked with numbered posts that identify points of interest that are explained in an accompanying brochure that the group developed. The brochure is available <a href="images/brochure.pdf">online</a> or in the brochure box at the start of the walk.
    </p>

    <p>
        The trail is accessed from either Guinness Place or from Freebody Place. It is composed of both pupose built waking tracks and preexisting management trails. The walk is a circuit and you should all 1 hourto complete it.
    </p>

    <h3>Management Trails</h3>

    <p>The ridge is covered by a network of vehicular management trails. These are used by authorised parties such as the Rural Fire Service, Parks and Conservation, etc. to perform various work on the ridge.</p>

    <p>The management trails are open to the public for use for walking, bicycle riding and in some cases horse riding.</p>



<?php include 'footer.php'; ?>