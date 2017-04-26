<?php $title = 'Blackberry';	?>
<?php include 'header.php'; ?>

<script>
  function initMap() {

  var locations = [
  [1, 685921, 6083904, -35.370878864224, 149.0465866002, "Medium", "Thin", "[Unknown]", "All"],
  [2, 685921, 6083895, -35.3709599643, 149.04658864839, "Small", "[Unknown]", "Dead", "[Unknown]"],
  [3, 685922, 6083919, -35.370743511027, 149.04659418811, "Large", "[Unknown]", "Good", "All"],
  [4, 685915, 6083940, -35.370555582293, 149.04651239839, "Large", "[Unknown]", "Good", "All"],
  [5, 685924, 6083950, -35.370463793505, 149.04660913632, "Large", "Thin", "Good", "All"],
  [6, 685914, 6083957, -35.370402579635, 149.04649752829, "Large", "Thick", "Good", "All"],
  [7, 685907, 6083970, -35.370286739778, 149.04641755959, "Large", "Thick", "Good", "All"],
  [8, 685888, 6083956, -35.370416436612, 149.04621171677, "Large", "Thick", "Good", "All"],
  [9, 685895, 6083981, -35.370189853972, 149.04628303885, "Large", "[Unknown]", "Good", "All"],
  [10, 685907, 6083994, -35.37007047286, 149.04641209836, "Large", "Thin", "Good", "All"],
  [11, 685918, 6084009, -35.369933255771, 149.04652970093, "Small", "Thin", "Good", "All"],
  [12, 685911, 6084018, -35.3698534604, 149.04645064289, "Very Large", "Thick", "Good", "All"],
  [13, 685916, 6084031, -35.36973538388, 149.04650269177, "Large", "[Unknown]", "Poor", "Part"],
  [14, 685886, 6084040, -35.369659875, 149.04617060174, "Large", "Thick", "Good", "[Unknown]"],
  [15, 685865, 6084063, -35.369456532437, 149.04593433993, "Large", "Thick", "Good", "All"],
  [16, 685864, 6084057, -35.369510785525, 149.0459247035, "Large", "Thick", "Good", "[Unknown]"],
  [17, 685857, 6084081, -35.369295822829, 149.04584223425, "Large", "Thick", "Good", "[Unknown]"],
  [18, 685856, 6084107, -35.369061719869, 149.04582531848, "Large", "Thick", "Good", "[Unknown]"],
  [19, 685872, 6084111, -35.369022694043, 149.04600042966, "Large", "Thick", "Good", "[Unknown]"],
  [20, 685887, 6084133, -35.368821654075, 149.04616044412, "Large", "Thick", "Good", "Part"],
  [21, 685862, 6084173, -35.368465867541, 149.04587631271, "Large", "[Unknown]", "Good", "All"],
  [22, 685882, 6084186, -35.368344996169, 149.04609338002, "Large", "[Unknown]", "Good", "All"],
  [23, 685883, 6084198, -35.368236676309, 149.04610165124, "[Unknown]", "[Unknown]", "Good", "[Unknown]"],
  [24, 685902, 6084204, -35.368179068801, 149.04630930907, "Very Large", "[Unknown]", "Good", "None"],
  [25, 685912, 6084243, -35.367825771234, 149.04641044728, "Large", "Thick", "[Unknown]", "All"],
  [26, 685962, 6084281, -35.367474028716, 149.04695185631, "Medium", "[Unknown]", "Good", "None"],
  [27, 685951, 6084274, -35.367539157139, 149.04683243723, "Small", "[Unknown]", "Good", "None"],
  [28, 685940, 6084275, -35.367532196459, 149.04671119745, "Large", "[Unknown]", "Poor", "None"],
  [29, 685958, 6084312, -35.367195429573, 149.04690079687, "Small", "[Unknown]", "Good", "All"],
  [30, 685953, 6084309, -35.367223395002, 149.04684647428, "Small", "[Unknown]", "Good", "None"],
  [31, 685906, 6084318, -35.367151054997, 149.04632737637, "Huge", "[Unknown]", "Good", "All"],
  [32, 685863, 6084300, -35.367321267952, 149.04585842502, "Very Large", "[Unknown]", "Good", "All"],
  [33, 685847, 6084274, -35.367558538315, 149.04568832124, "Huge", "[Unknown]", "Good", "All"],
  [34, 685895, 6084390, -35.366504303714, 149.04618998476, "Large", "Thin", "Good", "All"],
  [35, 685888, 6084365, -35.366730886328, 149.04611866514, "Small", "[Unknown]", "Good", "All"],
  [36, 685888, 6084354, -35.366830008739, 149.04612116753, "Large", "[Unknown]", "Good", "All"],
  [37, 685872, 6084351, -35.366860023463, 149.04594583363, "Small", "[Unknown]", "Good", "All"],
  [38, 685902, 6084354, -35.36682739986, 149.04627518178, "Large", "[Unknown]", "Good", "All"],
  [39, 685928, 6084352, -35.36684057653, 149.04656166328, "Large", "Thin", "[Unknown]", "[Unknown]"],
  [40, 685962, 6084012, -35.369898020162, 149.04701308121, "Small", "[Unknown]", "Good", "All"],
  [41, 685975, 6084257, -35.36768787209, 149.04710033313, "Medium", "[Unknown]", "Good", "All"],
  [42, 686014, 6084266, -35.367599500309, 149.04752732818, "Small", "Thick", "Good", "None"],
  [43, 686039, 6084250, -35.367739016051, 149.04780599893, "Very Large", "[Unknown]", "Good", "All"],
  [44, 686090, 6084221, -35.367990825605, 149.04837366118, "Small", "[Unknown]", "Good", "All"],
  [45, 686080, 6084195, -35.368226980044, 149.0482695708, "Small", "[Unknown]", "Good", "All"],
  [46, 686067, 6084200, -35.36818434945, 149.04812541665, "Large", "[Unknown]", "Good", "All"],
  [47, 686107, 6084254, -35.36769028735, 149.04855316449, "Small", "[Unknown]", "Good", "All"],
  [48, 686086, 6084319, -35.367108482557, 149.04830733794, "Very Large", "[Unknown]", "Good", "All"],
  [49, 686070, 6084315, -35.367147511563, 149.04813223213, "Very Large", "[Unknown]", "[Unknown]", "[Unknown]"],
  [50, 686068, 6084331, -35.367003706747, 149.04810658661, "Large", "[Unknown]", "Good", "All"],
  [51, 686039, 6084370, -35.366657681858, 149.04777867741, "Large", "[Unknown]", "Dead", "[Unknown]"],
  [52, 686174, 6084270, -35.36753360738, 149.04928659363, "Huge", "[Unknown]", "Good", "All"],
  [53, 686158, 6084272, -35.367518571157, 149.04911012048, "Large", "[Unknown]", "Good", "Part"],
  [54, 686135, 6084186, -35.368297818636, 149.04887668656, "Very Large", "[Unknown]", "Good", "All"],
  [55, 686122, 6084192, -35.368246177671, 149.04873230421, "Large", "[Unknown]", "Good", "All"],
  [56, 686094, 6084164, -35.368503712839, 149.04843064805, "Large", "[Unknown]", "Good", "All"],
  [57, 686076, 6084144, -35.368687293019, 149.0482371807, "Very Large", "Thin", "Good", "All"],
  [58, 686055, 6084107, -35.369024621432, 149.04801457985, "Large", "[Unknown]", "Good", "All"],
  [59, 686044, 6084112, -35.368981617559, 149.04789242698, "Very Large", "[Unknown]", "Good", "All"],
  [60, 686009, 6084080, -35.369276500629, 149.04751466673, "Large", "Thin", "Good", "[Unknown]"],
  [61, 686023, 6084082, -35.369255867586, 149.04766823013, "Large", "[Unknown]", "Good", "All"],
  [62, 686000, 6084072, -35.369350267842, 149.0474174759, "Large", "Thin", "Good", "All"],
  [63, 685985, 6084059, -35.369470209328, 149.04725541491, "Large", "Thick", "Good", "All"],
  [64, 685973, 6084089, -35.369202113172, 149.0471165698, "Huge", "Thick", "Good", "[Unknown]"],
  [65, 685958, 6084070, -35.369376120981, 149.04695587425, "Small", "Thin", "Good", "All"],
  [66, 685939, 6084083, -35.36926251838, 149.04674388987, "Large", "Thick", "Good", "All"],
  [67, 685940, 6084093, -35.369172220759, 149.04675261541, "Very Large", "Thick", "Good", "All"],
  [68, 685951, 6084112, -35.3689989589, 149.04686930579, "Large", "Thick", "Good", "All"],
  [69, 685948, 6084121, -35.368918418064, 149.04683425358, "Very Large", "Thick", "Good", "All"],
  [70, 685945, 6084151, -35.368648643663, 149.04679442222, "Large", "Thick", "Good", "All"],
  [71, 685924, 6084154, -35.368625524706, 149.04656271306, "Very Large", "Thick", "Good", "All"],
  [72, 685917, 6084101, -35.369104418935, 149.04649776433, "Huge", "[Unknown]", "Good", "All"],
  [73, 685925, 6084098, -35.369129961181, 149.04658645761, "Medium", "Thick", "Good", "All"],
  [74, 685922, 6084840, -35.369444263503, 149.04655663945, "Very Large", "Thick", "Good", "All"],
  [75, 685908, 6084068, -35.36940346343, 149.0464062613, "Very Large", "Thick", "Good", "All"],
  [76, 685897, 6084054, -35.369531669268, 149.0462884317, "Large", "Thick", "Good", "All"],
  [77, 685908, 6084090, -35.369205218725, 149.04640125536, "Large", "Thick", "Good", "All"],
  [78, 685921, 6084047, -35.369590273975, 149.04655405782, "Very Large", "Thick", "Good", "All"],
  [79, 685916, 6084053, -35.369537139197, 149.04649768553, "Very Large", "Thick", "Good", "All"],
  [80, 685940, 6084052, -35.369541676715, 149.04676194629, "Very Large", "Thick", "Good", "All"],
  [81, 685950, 6084010, -35.369918279569, 149.04688151926, "Large", "Thick", "Good", "All"],
  [82, 685944, 6083981, -35.370180720565, 149.04682211092, "Very Large", "Thick", "Good", "All"],
  [83, 685930, 6083946, -35.370498719551, 149.0466760557, "Large", "Thick", "Good", "All"],
  [84, 685900, 6083939, -35.370567389213, 149.0463476031, "Large", "Thick", "Good", "All"],
  [85, 685930, 6083916, -35.370769053134, 149.04668288324, "Huge", "Thick", "Good", "All"],
  [86, 685864, 6083880, -35.37110575448, 149.04596497103, "Large", "Thick", "Good", "All"]
  ]

  var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 17,
  center: { lat: -35.368648643663, lng: 149.04679442222 },
  mapTypeId: google.maps.MapTypeId.SATELLITE
  });

  for (i = 0; i < locations.length; i++) 
          {
             addLocation(map, locations[i])
          }
        }


        function addLocation(map, location) {

            var id = location[0];
            var easting = location[1];
            var northing = location[2];
            var latitude = location[3];
            var longitude = location[4];
            var size = location[5];
            var density = location[6]
            var health = location[7];
            var burnt = location[8];



            var patch = new google.maps.LatLng(latitude, longitude);

            var marker = new google.maps.Marker({ position: patch, map: map, label: id.toString(), title: "ID# " + id.toString() });

            //var url = "http://maps.google.com/?ll=" + location[1] + "," + location[2] + "&z=17&t=k";
            var url = "http://maps.google.com/?q=loc:" + latitude + "," + longitude + "&z=17&t=k";

            var contentString =
                "<div>" +
                  "<p><b>ID:</b> " + id.toString() + "</p>" +
                  "<p><b>Latitude:</b> " + latitude.toString() + "</p>" +
                  "<p><b>Longitude:</b> " + longitude.toString() + "</p>" +
                  "<p><b>Easting:</b> " + easting.toString() + "</p>" +
                  "<p><b>Northing:</b> " + northing.toString() + "</p>" +
                  "<p><b>Size:</b> " + size + "</p>" +
                  "<p><b>Density:</b> " + density + "</p>" +
                  "<p><b>Health:</b> " + health + "</p>" +
                  "<p><b>Burnt:</b> " + burnt + "</p>" +
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

<p>The following map displays specific occurences of blackberry bushes identified on a ground survey of Mt Arawang on 25 April 2016 by Rohan Thomas</p>

<div id="map" style="width:1000px;height:760px;"></div>

<p/>

<p>The following table summarises the information contained in the map above.</p>

<p/>

<div>
<table border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td>ID</td>
    <td>Easting</td>
    <td>Northing</td>
    <td>Latitude</td>
    <td>Longitude</td>
    <td>Size</td>
    <td>Density</td>
    <td>Health</td>
    <td>Burnt</td>
  </tr>
  <tr>
    <td>1</td>
    <td>685921</td>
    <td>6083904</td>
    <td>-35.37087886</td>
    <td>149.0465866</td>
    <td>Medium</td>
    <td>Thin</td>
    <td>[Unknown]</td>
    <td>All</td>
  </tr>
  <tr>
    <td>2</td>
    <td>685921</td>
    <td>6083895</td>
    <td>-35.37095996</td>
    <td>149.0465886</td>
    <td>Small</td>
    <td>[Unknown]</td>
    <td>Dead</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>3</td>
    <td>685922</td>
    <td>6083919</td>
    <td>-35.37074351</td>
    <td>149.0465942</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>4</td>
    <td>685915</td>
    <td>6083940</td>
    <td>-35.37055558</td>
    <td>149.0465124</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>5</td>
    <td>685924</td>
    <td>6083950</td>
    <td>-35.37046379</td>
    <td>149.0466091</td>
    <td>Large</td>
    <td>Thin</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>6</td>
    <td>685914</td>
    <td>6083957</td>
    <td>-35.37040258</td>
    <td>149.0464975</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>7</td>
    <td>685907</td>
    <td>6083970</td>
    <td>-35.37028674</td>
    <td>149.0464176</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>8</td>
    <td>685888</td>
    <td>6083956</td>
    <td>-35.37041644</td>
    <td>149.0462117</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>9</td>
    <td>685895</td>
    <td>6083981</td>
    <td>-35.37018985</td>
    <td>149.046283</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>10</td>
    <td>685907</td>
    <td>6083994</td>
    <td>-35.37007047</td>
    <td>149.0464121</td>
    <td>Large</td>
    <td>Thin</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>11</td>
    <td>685918</td>
    <td>6084009</td>
    <td>-35.36993326</td>
    <td>149.0465297</td>
    <td>Small</td>
    <td>Thin</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>12</td>
    <td>685911</td>
    <td>6084018</td>
    <td>-35.36985346</td>
    <td>149.0464506</td>
    <td>Very Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>13</td>
    <td>685916</td>
    <td>6084031</td>
    <td>-35.36973538</td>
    <td>149.0465027</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Poor</td>
    <td>Part</td>
  </tr>
  <tr>
    <td>14</td>
    <td>685886</td>
    <td>6084040</td>
    <td>-35.36965988</td>
    <td>149.0461706</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>15</td>
    <td>685865</td>
    <td>6084063</td>
    <td>-35.36945653</td>
    <td>149.0459343</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>16</td>
    <td>685864</td>
    <td>6084057</td>
    <td>-35.36951079</td>
    <td>149.0459247</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>17</td>
    <td>685857</td>
    <td>6084081</td>
    <td>-35.36929582</td>
    <td>149.0458422</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>18</td>
    <td>685856</td>
    <td>6084107</td>
    <td>-35.36906172</td>
    <td>149.0458253</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>19</td>
    <td>685872</td>
    <td>6084111</td>
    <td>-35.36902269</td>
    <td>149.0460004</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>20</td>
    <td>685887</td>
    <td>6084133</td>
    <td>-35.36882165</td>
    <td>149.0461604</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>Part</td>
  </tr>
  <tr>
    <td>21</td>
    <td>685862</td>
    <td>6084173</td>
    <td>-35.36846587</td>
    <td>149.0458763</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>22</td>
    <td>685882</td>
    <td>6084186</td>
    <td>-35.368345</td>
    <td>149.0460934</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>23</td>
    <td>685883</td>
    <td>6084198</td>
    <td>-35.36823668</td>
    <td>149.0461017</td>
    <td>[Unknown]</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>24</td>
    <td>685902</td>
    <td>6084204</td>
    <td>-35.36817907</td>
    <td>149.0463093</td>
    <td>Very Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>None</td>
  </tr>
  <tr>
    <td>25</td>
    <td>685912</td>
    <td>6084243</td>
    <td>-35.36782577</td>
    <td>149.0464104</td>
    <td>Large</td>
    <td>Thick</td>
    <td>[Unknown]</td>
    <td>All</td>
  </tr>
  <tr>
    <td>26</td>
    <td>685962</td>
    <td>6084281</td>
    <td>-35.36747403</td>
    <td>149.0469519</td>
    <td>Medium</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>None</td>
  </tr>
  <tr>
    <td>27</td>
    <td>685951</td>
    <td>6084274</td>
    <td>-35.36753916</td>
    <td>149.0468324</td>
    <td>Small</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>None</td>
  </tr>
  <tr>
    <td>28</td>
    <td>685940</td>
    <td>6084275</td>
    <td>-35.3675322</td>
    <td>149.0467112</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Poor</td>
    <td>None</td>
  </tr>
  <tr>
    <td>29</td>
    <td>685958</td>
    <td>6084312</td>
    <td>-35.36719543</td>
    <td>149.0469008</td>
    <td>Small</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>30</td>
    <td>685953</td>
    <td>6084309</td>
    <td>-35.3672234</td>
    <td>149.0468465</td>
    <td>Small</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>None</td>
  </tr>
  <tr>
    <td>31</td>
    <td>685906</td>
    <td>6084318</td>
    <td>-35.36715105</td>
    <td>149.0463274</td>
    <td>Huge</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>32</td>
    <td>685863</td>
    <td>6084300</td>
    <td>-35.36732127</td>
    <td>149.0458584</td>
    <td>Very Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>33</td>
    <td>685847</td>
    <td>6084274</td>
    <td>-35.36755854</td>
    <td>149.0456883</td>
    <td>Huge</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>34</td>
    <td>685895</td>
    <td>6084390</td>
    <td>-35.3665043</td>
    <td>149.04619</td>
    <td>Large</td>
    <td>Thin</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>35</td>
    <td>685888</td>
    <td>6084365</td>
    <td>-35.36673089</td>
    <td>149.0461187</td>
    <td>Small</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>36</td>
    <td>685888</td>
    <td>6084354</td>
    <td>-35.36683001</td>
    <td>149.0461212</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>37</td>
    <td>685872</td>
    <td>6084351</td>
    <td>-35.36686002</td>
    <td>149.0459458</td>
    <td>Small</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>38</td>
    <td>685902</td>
    <td>6084354</td>
    <td>-35.3668274</td>
    <td>149.0462752</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>39</td>
    <td>685928</td>
    <td>6084352</td>
    <td>-35.36684058</td>
    <td>149.0465617</td>
    <td>Large</td>
    <td>Thin</td>
    <td>[Unknown]</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>40</td>
    <td>685962</td>
    <td>6084012</td>
    <td>-35.36989802</td>
    <td>149.0470131</td>
    <td>Small</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>41</td>
    <td>685975</td>
    <td>6084257</td>
    <td>-35.36768787</td>
    <td>149.0471003</td>
    <td>Medium</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>42</td>
    <td>686014</td>
    <td>6084266</td>
    <td>-35.3675995</td>
    <td>149.0475273</td>
    <td>Small</td>
    <td>Thick</td>
    <td>Good</td>
    <td>None</td>
  </tr>
  <tr>
    <td>43</td>
    <td>686039</td>
    <td>6084250</td>
    <td>-35.36773902</td>
    <td>149.047806</td>
    <td>Very Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>44</td>
    <td>686090</td>
    <td>6084221</td>
    <td>-35.36799083</td>
    <td>149.0483737</td>
    <td>Small</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>45</td>
    <td>686080</td>
    <td>6084195</td>
    <td>-35.36822698</td>
    <td>149.0482696</td>
    <td>Small</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>46</td>
    <td>686067</td>
    <td>6084200</td>
    <td>-35.36818435</td>
    <td>149.0481254</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>47</td>
    <td>686107</td>
    <td>6084254</td>
    <td>-35.36769029</td>
    <td>149.0485532</td>
    <td>Small</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>48</td>
    <td>686086</td>
    <td>6084319</td>
    <td>-35.36710848</td>
    <td>149.0483073</td>
    <td>Very Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>49</td>
    <td>686070</td>
    <td>6084315</td>
    <td>-35.36714751</td>
    <td>149.0481322</td>
    <td>Very Large</td>
    <td>[Unknown]</td>
    <td>[Unknown]</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>50</td>
    <td>686068</td>
    <td>6084331</td>
    <td>-35.36700371</td>
    <td>149.0481066</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>51</td>
    <td>686039</td>
    <td>6084370</td>
    <td>-35.36665768</td>
    <td>149.0477787</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Dead</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>52</td>
    <td>686174</td>
    <td>6084270</td>
    <td>-35.36753361</td>
    <td>149.0492866</td>
    <td>Huge</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>53</td>
    <td>686158</td>
    <td>6084272</td>
    <td>-35.36751857</td>
    <td>149.0491101</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>Part</td>
  </tr>
  <tr>
    <td>54</td>
    <td>686135</td>
    <td>6084186</td>
    <td>-35.36829782</td>
    <td>149.0488767</td>
    <td>Very Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>55</td>
    <td>686122</td>
    <td>6084192</td>
    <td>-35.36824618</td>
    <td>149.0487323</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>56</td>
    <td>686094</td>
    <td>6084164</td>
    <td>-35.36850371</td>
    <td>149.0484306</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>57</td>
    <td>686076</td>
    <td>6084144</td>
    <td>-35.36868729</td>
    <td>149.0482372</td>
    <td>Very Large</td>
    <td>Thin</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>58</td>
    <td>686055</td>
    <td>6084107</td>
    <td>-35.36902462</td>
    <td>149.0480146</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>59</td>
    <td>686044</td>
    <td>6084112</td>
    <td>-35.36898162</td>
    <td>149.0478924</td>
    <td>Very Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>60</td>
    <td>686009</td>
    <td>6084080</td>
    <td>-35.3692765</td>
    <td>149.0475147</td>
    <td>Large</td>
    <td>Thin</td>
    <td>Good</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>61</td>
    <td>686023</td>
    <td>6084082</td>
    <td>-35.36925587</td>
    <td>149.0476682</td>
    <td>Large</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>62</td>
    <td>686000</td>
    <td>6084072</td>
    <td>-35.36935027</td>
    <td>149.0474175</td>
    <td>Large</td>
    <td>Thin</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>63</td>
    <td>685985</td>
    <td>6084059</td>
    <td>-35.36947021</td>
    <td>149.0472554</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>64</td>
    <td>685973</td>
    <td>6084089</td>
    <td>-35.36920211</td>
    <td>149.0471166</td>
    <td>Huge</td>
    <td>Thick</td>
    <td>Good</td>
    <td>[Unknown]</td>
  </tr>
  <tr>
    <td>65</td>
    <td>685958</td>
    <td>6084070</td>
    <td>-35.36937612</td>
    <td>149.0469559</td>
    <td>Small</td>
    <td>Thin</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>66</td>
    <td>685939</td>
    <td>6084083</td>
    <td>-35.36926252</td>
    <td>149.0467439</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>67</td>
    <td>685940</td>
    <td>6084093</td>
    <td>-35.36917222</td>
    <td>149.0467526</td>
    <td>Very Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>68</td>
    <td>685951</td>
    <td>6084112</td>
    <td>-35.36899896</td>
    <td>149.0468693</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>69</td>
    <td>685948</td>
    <td>6084121</td>
    <td>-35.36891842</td>
    <td>149.0468343</td>
    <td>Very Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>70</td>
    <td>685945</td>
    <td>6084151</td>
    <td>-35.36864864</td>
    <td>149.0467944</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>71</td>
    <td>685924</td>
    <td>6084154</td>
    <td>-35.36862552</td>
    <td>149.0465627</td>
    <td>Very Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>72</td>
    <td>685917</td>
    <td>6084101</td>
    <td>-35.36910442</td>
    <td>149.0464978</td>
    <td>Huge</td>
    <td>[Unknown]</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>73</td>
    <td>685925</td>
    <td>6084098</td>
    <td>-35.36912996</td>
    <td>149.0465865</td>
    <td>Medium</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>74</td>
    <td>685922</td>
    <td>6084840</td>
    <td>-35.36244426</td>
    <td>149.04655663945</td>
    <td>Very Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>75</td>
    <td>685908</td>
    <td>6084068</td>
    <td>-35.36940346</td>
    <td>149.0464063</td>
    <td>Very Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>76</td>
    <td>685897</td>
    <td>6084054</td>
    <td>-35.36953167</td>
    <td>149.0462884</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>77</td>
    <td>685908</td>
    <td>6084090</td>
    <td>-35.36920522</td>
    <td>149.0464013</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>78</td>
    <td>685921</td>
    <td>6084047</td>
    <td>-35.36959027</td>
    <td>149.0465541</td>
    <td>Very Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>79</td>
    <td>685916</td>
    <td>6084053</td>
    <td>-35.36953714</td>
    <td>149.0464977</td>
    <td>Very Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>80</td>
    <td>685940</td>
    <td>6084052</td>
    <td>-35.36954168</td>
    <td>149.0467619</td>
    <td>Very Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>81</td>
    <td>685950</td>
    <td>6084010</td>
    <td>-35.36991828</td>
    <td>149.0468815</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>82</td>
    <td>685944</td>
    <td>6083981</td>
    <td>-35.37018072</td>
    <td>149.0468221</td>
    <td>Very Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>83</td>
    <td>685930</td>
    <td>6083946</td>
    <td>-35.37049872</td>
    <td>149.0466761</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>84</td>
    <td>685900</td>
    <td>6083939</td>
    <td>-35.37056739</td>
    <td>149.0463476</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>85</td>
    <td>685930</td>
    <td>6083916</td>
    <td>-35.37076905</td>
    <td>149.0466829</td>
    <td>Huge</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  <tr>
    <td>86</td>
    <td>685864</td>
    <td>6083880</td>
    <td>-35.37110575</td>
    <td>149.045965</td>
    <td>Large</td>
    <td>Thick</td>
    <td>Good</td>
    <td>All</td>
  </tr>
  
</table>
</div>

<?php include 'footer.php'; ?>
