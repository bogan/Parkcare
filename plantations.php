<?php $title = 'Plantations';	?>
<?php include 'header.php'; ?>
<?php include 'articleheader.php'; ?>

    <ul class="breadcrumb">
        <li>Home</li>
        <li>Our Ridge</li>
        <li>Features</li>
        <li class="active">Plantations</li>
    </ul>

    <h2 class="page-header">Plantations</h2>

    <p>The group performed many mass plantings in its early years. The focus of the group has steadily shifted away from planting to weeding partly because most areas have now been planted out but partly because the group believes that weeding is amore cost effective approach.</p>

    <p>Planting on the ridge is often more important as means to an end rather than an end itself. Plants are often effective weeders themselves because many weeds do no complete well with large trees such as eucalypts. Trees can be thought of weeders themselves. The best example of this approach has been on the summit of Mt Arawang which was the most damaged area on the ridge with huge infestations of <a href="weeds.php#beardedoats">Scotch Thistle</a>, <a href="weeds.php#beardedoats">Fleabane</a> and <a href="weeds.php#beardedoats">Bearded Oats</a>. Large plantings of ecucalypts and acacia were used to suppress these weeds and they have now largely eliminated the presence of these weeds over time. </p>

    <p>The original focus of the group was to plant new plants. Over the years, the focus of the group has switched focus from plantings to weeding. This is inline with the groups <a href="strategy.php">strategy</a> about how to most effectively restore the ecology of the group.</p>

    <p>The Cooleman Ridge Nature Reserve has several large plantations that have been planted on it.</p>

    <p>These plantations are made up various large trees - normally Eucalyptus and Acacia species. Some of the species are indigenous to the ridge, but many are not.</p>

    <p>The purpose of the plantations is varied. Some are believed to be just windbreaks while others have been planted to replace the native tree cover that was originally removed as part of clearing the land. They also provide other benefits such as  suppressing weeds etc.</p>

    <p>Many of these plantations were planted by both the group. However, some pre existed the group and the history and purpose is not know. These unknown plantations are......</p>

    <p>Please click on a coloured area for more information about each plantation.</p>

    <div id="plantations" style="height:600px;"></div>

    <div>
        <a href="plantations.kml">Export as KML file</a>
    </div>

    <script>
        function initMap() {

            var plantationsmap = new google.maps.Map(document.getElementById('plantations'), {
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });

            var groups = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/plantations.kml',

                map: plantationsmap

            });
        }

    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

<?php include 'articlefooter.php'; ?>
<?php include 'footer.php'; ?>