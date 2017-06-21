<?php $title = 'Hills';	?>
<?php include 'header.php'; ?>
<?php include 'articleheader.php'; ?>

    <ul class="breadcrumb">
        <li>Home</li>
        <li>Our Ridge</li>
        <li>Features</li>
        <li class="active">Hills</li>
    </ul>

    <h2 class="page-header">Hills</h2>

    <p>Cooleman Ridge is distinctve among other Canberra Nature Parks in that instead of being dominated by one large peak, it is a long flat ridge line that is comprised of a series of separate gently rolling hills.</p>

    <p>
        The main hills on the ridge are Mr Arawang (753m), Reservoir Hill (734m), Sentry Box Hill (733m), Cooleman Trig (732m), One Tree Hill (703m) and Fence Post Hill (653m).
    </p>

    <p> Some of these hills have their own summit trails - Mt Arawang and Cooleman Trig. Please see our <a href="trails.php">Trails</a> page for more information.</p>

    <p>
        A major benefit of these hills is that provide probably the best views found in the Canberra urban area. Not only can one get views of most of the city itself but you can also get great views to the west over the Murrumbidge Valley to the Bullen, Tidbinbilla and Brindabella ranges in the background.</p>

    <p>Please click on the markers to get more information about each of the hilss found on the ridge.</p>

    <div id="hills" style="height:600px;"></div>

    <script>
        function initMap() {

            var hillsmap = new google.maps.Map(document.getElementById('hills'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/hills.kml',

                map: hillsmap

            });
        }

    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

    <h3>Fence Post Hill</h3>

    <p>Blah blah</p>

    <h3>One Tree Hill</h3>

    <p>It has been named by the group simply on the basis that it is dominated by solitary Red Box.</p>

    <p>There is no formal trail to the summit but can easily be accessed by one of the nearby management trails.</p>

    <h3>Cooleman Trig</h3>

    <p>It is named after the presence of the trigonometric station located on the summit - one of the two to be found on the ridge.</p>

    <p>The summit is accessed via the Cooleman Trig Walking Trail.</p>.

    <p>The northern slopes of the hill contain some of the best quality areas on the ridge with a wide variety of native grasses and forbes. The southern slopes of the hill however are largely dominated by weeds such as Canary Grass and Wild Oats.</p>

    <p>
        The summit area is worked on once a year typically in October.
    </p>

    <h3>Sentry Box</h3>

    <p>Sentry Box was named by the early settlers because it was used as a common lookout for the locals.</p>

    <p>The summit is not identified by any significant marker.</p>

    <p>There is no formal walking trail to the summit but can easily be accessed from the Bicentennial Trail.</p>

    <h3>Reservoir Hill</h3>

    <p>Named after the small round reservoir. A small . the summit is not identified with any marker.</p>

    <h3>Mt Arawang</h3>

    <p>Mt Arawang is the tallest hill on Cooleman Ridge. It has been the location of significant planting of native trees and shrubs in the early history of the group. The summit area was extremely degraded when the group started work with large thickets of Scotch Thistle and Fleabane, Phalaris. Some of these weeds have been largely eliminated but much work still remains.</p>

    <p>Name</p>

    <p>Trails</p>

    <p>Work. The south eastern segment is contained within the Group Area Arawang.</p>

    <h3>Fence Post Hill</h3>

    <p>Fence Post Hill is the smallest of the hills on Cooleman Ridge. It is named after a distinctive fence post on its  small summit.</p>

<?php include 'articlefooter.php'; ?>
<?php include 'footer.php'; ?>