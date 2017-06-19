<?php $title = 'Individual Areas';	?>
<?php include 'header.php'; ?>
<?php include 'articleheader.php'; ?>


    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Our Work</a></li>
        <li><a href="#">Areas</a></li>
        <li class="active">Individual Areas</li>
    </ul>

    <h2 class="page-header">Individual Areas</h2>

<p>The group has defined many individual work areas. These areas are &quot;owned&quot; by individual members of the group and are typically areas outside of the group areas. The individual member works on their area whenever they want and performs any <a href="activity">activity</a> that they wish.</p>

    <p>
        The individual areas are an important part of our <a href="strategy.php">strategy</a> to regenerate the ridge with native vegetation. The individual areas complement the work the group does in our <a href="groupareas.php">group area</a>. They help link the various group areas into a more integrated whole and therefore help accelerate our goal of eventually linking all the various work areas together into a unified area.
    </p>

    <p>Many individual areas have seen significant improvement with many weeds removed and natural regeneration occurring. These improvements have not only helped contribute to a goal of regenerating the ridge but have also provide each member with significant pleasure and satisfaction.</p>

    <p>The following map displays all the currently known individual work areas. You can click on any one for more information about the individual and the work that they do.</p>

    <div id="individualareas" style="height:600px;"></div>

    <div>
        <a href="individualareas.kml">Export as KML file</a>
    </div>

    <script>
        function initMap() {

            var individualareasmap = new google.maps.Map(document.getElementById('individualareas'), {
                zoom: 11,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });

            var individuals = new google.maps.KmlLayer({

                url: 'http://www.coolemanridge.org.au/individualareas.kml',

                map: individualareasmap

            });
        }
    </script>

    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCD686jeBcuFYgXk6k7dCHiWakzmYS6uI&callback=initMap"></script>

<?php include 'footer.php'; ?>

        <!--<table cellpadding="0" cellspacing="0" width="100%">-->

        <!--	<tr>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--		<td valign="top"><br>-->

        <!--		<h2><font color="#ba7025" face="ARIAL">Members' areas</font></h2>-->

        <!--		</td>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--	</tr>-->

        <!--	<tr>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--		<td><font color="black" size="3">Various members of Cooleman Ridge Park -->

        <!--		Care Group have undertaken to look after areas of their own choosing, weeding, -->

        <!--		monitoring and generally enjoying them. The map refers to these areas with -->

        <!--		numbers signifying the relevant caretaker. The numbers and letters in the -->

        <!--		margins of the map denote the squares; for instance, the top of Mt Arawang -->

        <!--		is in square K8.-->

        <!--		<p></p>-->

        <!--		<ol>-->

        <!--			<li>Alan </li>-->

        <!--			<li>Erika </li>-->

        <!--			<li>G�sta </li>-->

        <!--			<li>Pauline </li>-->

        <!--			<li>Malcolm </li>-->

        <!--			<li>Reet </li>-->

        <!--			<li>Mike and Pat </li>-->

        <!--			<li>Elizabeth </li>-->

        <!--			<li>Kathryn </li>-->

        <!--			<li>David (Monkman Street) </li>-->

        <!--			<li>Paul </li>-->

        <!--			<li>David (Lincoln Place) </li>-->

        <!--			<li>Rohan </li>-->

        <!--			<li>Doug </li>-->

        <!--			<li>Mary </li>-->

        <!--			<li>Tina </li>-->

        <!--		</ol>-->

        <!--		</font></td>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--	</tr>-->

        <!--	<tr>-->

        <!--		<td colspan="3">&nbsp;</td>-->

        <!--	</tr>-->

        <!--	<tr>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--		<td align="center">-->

        <!--		<img alt="map" height="510" src="images/map.jpg" width="700"></td>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--	</tr>-->

        <!--	<tr>-->

        <!--		<td colspan="3">&nbsp;</td>-->

        <!--	</tr>-->

        <!--	<tr>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--		<td align="center">Map by Treeline Designs, Barton, ACT.</td>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--	</tr>-->

        <!--	<tr>-->

        <!--		<td colspan="3">&nbsp;</td>-->

        <!--	</tr>-->

        <!--	<tr>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--		<td align="right"><a href="index.php">Home Page</a></td>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--	</tr>-->

        <!--	<tr>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--		<td align="left"><a href="members.php">Members' page</a></td>-->

        <!--		<td width="20">&nbsp;</td>-->

        <!--	</tr>-->

        <!--</table>-->
