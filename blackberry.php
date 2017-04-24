<?php

include 'redfearns.php';
include 'connection.php';

// define variables and set to empty values
$eastingErr = $northingErr = $latitudeErr = $longitudeErr = "";
$sizeErr = $densityErr = $healthErr = $burntErr = "";
$easting = $northing = $latitude = $longitude = NULL;
$source = $size = $density = $health = $burnt = $comment = "";
$creation_date = $last_updated_date = null;
$mode = "none";
$date = date("Y-m-d");
$debug = true;
$point = null;
$ok = true;
$id = null;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $debug = isset($_GET['debug']) && $_GET['debug'] == "true";
        $mode = "Update";
        $source = "Grid";
            
        $sql = "SELECT source, easting, northing, latitude, longitude, size, density, health, burnt, comment, creation_date, last_updated_date FROM blackberry1 WHERE id = " . $id;
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
        
                $source = trim($row["source"]);
                $easting = trim($row["easting"]);
                $northing = trim($row["northing"]);
                $latitude = trim($row["latitude"]);
                $longitude = trim($row["longitude"]);
                $size = trim($row["size"]);
                $burnt = trim($row["burnt"]);
                $health = trim($row["health"]);
                $density = trim($row["density"]);
                $comment = trim($row["comment"]);
                $creation_date = trim($row["creation_date"]);
                $last_updated_date = trim($row["last_updated_date"]);
        
                //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        } else {
            echo "Error: Unable to find record";
        }
    }
    else{
        $id = 0;
        $mode = "Insert";
        $source = "Grid";
    }
    $conn->close();
}
else {
    
  if (empty($_POST["id"])) {
    $mode = "Insert";
    $id = 0;
  }
  else {
    $mode = "Update";
    $id = $_POST["id"];
    
  }
  $source = $_POST["source"];
  $debug = isset($_POST['debug']) && $_POST['debug'] == "true";
  
  // Easting
  if ($source == "Grid" && empty($_POST["easting"])) {
    $eastingErr = "Easting is required";
    $ok = false;
  } elseif($source == "Grid") {
    $easting = test_input($_POST["easting"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9.-]*$/",$easting)) {
      $eastingErr = "Only numbers are allowed"; 
        $ok = false;
    }
  }
  
  // Northing
  if ($source == "Grid" && empty($_POST["northing"])) {
    $northingErr = "Northing is required";
    $ok = false;
  } elseif($source == "Grid") {
    $northing = test_input($_POST["northing"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9.-]*$/",$northing)) {
      $northingErr = "Only numbers are allowed"; 
      $ok = false;
    }
  }
  
  // Latitude
  if ($source == "Geographic" && empty($_POST["latitude"])) {
      $latitudeErr = "Latitude is required";
      $ok = false;
  } elseif($source == "Geographic") {
      $latitude = test_input($_POST["latitude"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[0-9.-]*$/",$latitude)) {
          $latitudeErr = "Only numbers are allowed";
          $ok = false;
      }
  }
  
  // Longitude
  if ($source == "Geographic" && empty($_POST["longitude"])) {
      $longitudeErr = "Longitude is required";
      $ok = false;
  } elseif($source == "Geographic") {
      $longitude = test_input($_POST["longitude"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[0-9.-]*$/",$longitude)) {
          $longitudeErr = "Only numbers are allowed";
          $ok = false;
      }
  }

  // Size
  if (empty($_POST["size"])) {
    $sizeErr = "Size is required";
    $ok = false;
  } else {
    $size = test_input($_POST["size"]);
  }

  // Density
  if (empty($_POST["density"])) {
    $densityErr = "Density is required";
    $ok = false;
  } else {
    $density = test_input($_POST["density"]);
  }

  // Health
  if (empty($_POST["health"])) {
    $healthErr = "Health is required";
    $ok = false;
  } else {
    $health = test_input($_POST["health"]);
  }

  // Burnt
  if (empty($_POST["burnt"])) {
    $burntErr = "Burnt is required";
    $ok = false;
  } else {
    $burnt = test_input($_POST["burnt"]);
  }
  
  // Comment
  $comment = test_input($_POST["comment"]);
  
  if($ok == true)
  {
      if($source == "Grid")
      {
          $point = redfearnGridtoLL($easting,$northing);
          
          $latitude = $point["Latitude"];;
          $longitude = $point["Longitude"];
      }
      else 
      {
          $point = redfearnLLtoGrid($latitude,$longitude);
          
          $easting = $point["Easting"];;
          $northing = $point["Northing"];
      }
      
      if($mode=="Update")
      {
          $sql = "UPDATE blackberry1 SET source='$source', easting=$easting, northing=$northing, latitude=$latitude, longitude=$longitude, size='$size', density='$density', health='$health', burnt='$burnt', comment='$comment', last_updated_date = '$date' WHERE id = " . $id;
          
          if ($conn->query($sql) === TRUE) {
              echo "Record updated successfully";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
      }
      else 
      {
          $sql = "INSERT INTO blackberry1 (source, easting, northing, latitude, longitude, size, density, health, burnt, comment, creation_date, last_updated_date)
          VALUES ('$source', $easting, $northing, $latitude, $longitude, '$size', '$density', '$health', '$burnt', '$comment', '$date', '$date')";
          
          if ($conn->query($sql) === TRUE) {
              $id = $conn->insert_id;
              echo "Record created successfully";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
      }
      
//       if($ok == true)
//       {
//           Redirect('blackberry.php', false);
//       }
  }
	
  $conn->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
?>

<!DOCTYPE HTML>  
<html>
<head>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
	
	$(document).ready(function() {
//     $('input[type=radio][name=source]').change(function() {
//         if (this.value == 'Grid') {
// 			$("#easting").attr('disabled',false);
// 			$("#northing").attr('disabled',false);
// 			$("#latitude").attr('disabled',true);
// 			$("#longitude").attr('disabled',true);
//             $("#latitude").val('');
//             $("#longitude").val('');
//         }
//         else if (this.value == 'Geographic') {
// 			$("#easting").attr('disabled',true);
// 			$("#northing").attr('disabled',true);
// 			$("#latitude").attr('disabled',false);
// 			$("#longitude").attr('disabled',false);
//             $("#easting").val('');
//             $("#northing").val('');
//         }
//     });

    $('input[type=radio][name=source]').change(function() {
        if (this.value == 'Grid') {
			$("#divEasting").show();
			$("#divNorthing").show();
			$("#divLatitude").hide();
			$("#divLongitude").hide();
            $("#latitude").val('');
            $("#longitude").val('');
        }
        else if (this.value == 'Geographic') {
			$("#divEasting").hide();
			$("#divNorthing").hide();
			$("#divLatitude").show();
			$("#divLongitude").show();
            $("#easting").val('');
            $("#northing").val('');
        }
    });
});



	</script>
  	<style>

        *{
            font-family: "Arial";
        }
        
        label{
            float: left;
            width: 120px;
            font-weight: bold;
        }
        
        .error {
      	     float:right;
      	     color: #FF0000;
        }
    
        div { 
             width: 300px; 
             border: 0px solid black; 
             padding: 5px; 
             margin: 5px; 
        } 
        
        /* input, textarea{
            width: 180px;
            margin-bottom: 5px;
        } */
        
        textarea{
            width: 250px;
            height: 150px;
        }
        
        .boxes{
            width: 1em;
        }
        
        #submitbutton{
            margin-left: 120px;
            margin-top: 5px;
            width: 90px;
        }
        
/*         br{ */
/*             clear: left; */
/*         } */
    </style>
</head>
<body>  

<?php if($mode == "Update") {?>
<h2>Update Blackberry Record</h2>
<?php } else {?>
<h2>Create Blackberry Record</h2>
<?php }?>

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <input type="hidden" name="foo" value="<?php echo $debug;?>">
  <input type="hidden" name="debug" value="true">
  
  <!-- Source -->
  <div id="divSource">
  	<label for="source">Source:</label> 
  	<input type="radio" name="source" value="Grid" <?php if (isset($source) && $source=="Grid") echo "checked";?>> Grid<input type="radio" name="source" value="Geographic" <?php if (isset($source) && $source=="Geographic") echo "checked";?>> Geographic
  </div>	
	
  <!-- ID -->
  <?php if($mode == "Update") {?>
  	<div id="divId">
  		<label for="id">ID:</label> 
    	<input type="text" id="id" name="id" disabled="disabled" value="<?php echo $id;?>">
   </div>
  <?php }?>
  
  <!-- Easting -->
  <div id="divEasting">
    <label for="easting">Easting:</label> 
    <input type="text" id="easting" name="easting" value="<?php echo $easting;?>" <?php if (isset($source) && $source=="Geographic") echo "disabled";?>>
    <span class="error">* <?php echo $eastingErr;?></span>
  </div>
  
  <!-- Northing -->
  <div id="divNorthing">
    <label for="northing">Northing:</label> 
    <input type="text" id="northing" name="northing" value="<?php echo $northing;?>" <?php if (isset($source) && $source=="Geographic") echo "disabled";?>>
    <span class="error">* <?php echo $northingErr;?></span>
  </div>
  
  <!-- Latitude -->
  <div id="divLatitude">
    <label for="latitude">Latitude:</label> 
  	<input type="text" id="latitude" name="latitude" value="<?php echo $latitude;?>" <?php if (isset($source) && $source=="Grid") echo "disabled";?> >
  	<span class="error">* <?php echo $latitudeErr;?></span>
  </div>
  
  <!-- Longitude -->
  <div id="divLongitude">
    <label for="longitude">Longitude:</label> 
  	<input type="text"  id="longitude" name="longitude" value="<?php echo $longitude;?>" <?php if (isset($source) && $source=="Grid") echo "disabled";?>>
  	<span class="error">* <?php echo $longitudeErr;?></span>
  </div>
  
  <!-- Size -->
  <div id="divSize">
    <label for="size">Size:</label> 
      <select name="size">
          <option value="" <?php if (isset($size) && $size=="") echo "selected";?>>Please select</option>
          <option value="Huge" <?php if (isset($size) && $size=="Huge") echo "selected";?>>Huge</option>
          <option value="Very Large" <?php if (isset($size) && $size=="Very Large") echo "selected";?>>Very Large</option>
          <option value="Large" <?php if (isset($size) && $size=="Large") echo "selected";?>>Large</option>
          <option value="Medium" <?php if (isset($size) && $size=="Medium") echo "selected";?>>Medium</option>
          <option value="Small" <?php if (isset($size) && $size=="Small") echo "selected";?>>Small</option>
          <option value="Very Small" <?php if (isset($size) && $size=="Very Small") echo "selected";?>>Very Small</option>
          <option value="[Unknown]" <?php if (isset($size) && $size=="[Unknown]") echo "selected";?>>[Unknown]</option>
      </select>
      <span class="error">* <?php echo $sizeErr;?></span>
  </div>
  
  <div id="divDensity">
    <label for="density">Density:</label> 
      <select name="density">
          <option value="" <?php if (isset($density) && $density=="") echo "selected";?>>Please select</option>
          <option value="Thick" <?php if (isset($density) && $density=="Thick") echo "selected";?>>Thick</option>
          <option value="Thin"  <?php if (isset($density) && $density=="Thin") echo "selected";?>>Thin</option>
          <option value="[Unknown]" <?php if (isset($density) && $density=="[Unknown]") echo "selected";?>>[Unknown]</option>
      </select>
      <span class="error">* <?php echo $densityErr;?></span>
  </div>
  
  <div id="divHealth">
    <label for="health">Health:</label> 
      <select name="health">
          <option value="" <?php if (isset($health) && $health=="") echo "selected";?>>Please select</option>
          <option value="Good" <?php if (isset($health) && $health=="Good") echo "selected";?>>Good</option>
          <option value="Poor" <?php if (isset($health) && $health=="Poor") echo "selected";?>>Poor</option>
          <option value="Dead" <?php if (isset($health) && $health=="Dead") echo "selected";?>>Dead</option>
          <option value="[Unknown]" <?php if (isset($health) && $health=="[Unknown]") echo "selected";?>>[Unknown]</option>
      </select>
      <span class="error">* <?php echo $healthErr;?></span>
  </div>
  
  <div id="divBurnt">
	<label for="burnt">Burnt:</label> 
    <select name="burnt">
        <option value="" <?php if (isset($burnt) && $burnt=="") echo "selected";?>>Please select</option>
        <option value="All" <?php if (isset($burnt) && $burnt=="All") echo "selected";?>>All</option>
        <option value="Part" <?php if (isset($burnt) && $burnt=="Part") echo "selected";?>>Part</option>
        <option value="None" <?php if (isset($burnt) && $burnt=="None") echo "selected";?>>None</option>
        <option value="[Unknown]"<?php if (isset($burnt) && $burnt=="[Unknown]") echo "selected";?>>[Unknown]</option>
    </select>
    <span class="error">* <?php echo $burntErr;?></span>
  </div>
  
  <div id="divComment">
    <label for="comment">Comment:</label> 
	<textarea name="comment" rows="4" cols="50">
			<?php echo $comment;?>
  	</textarea>
  </div>
  
  <div id="divCreationDate">
    <label for="creationDate">Creation Date:</label> 
  	<input type="text" disabled="disabled" name="creation_date" value="<?php echo date_format(date_create($creation_date),"d/m/Y");?>">
  </div>
    
  <div id="divLastUpdateDate">
    <label for="lastUpdateDate">Last Update Date:</label> 
  	<input type="text" disabled="disabled" name="last_update_date" value="<?php echo date_format(date_create($last_updated_date),"d/m/Y");?>">
  </div>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<div>
	<a href="blackberrys.php">Return to main list</a>
</div>

<?php

if($debug == true){
    
    echo "ID = " . $id;
    echo "<br>";
    echo "Source = " . $source;
    echo "<br>";
    echo "Easting = " . $easting;
    echo "<br>";
    echo "Northing = " . $northing;
    echo "<br>";
    echo "Latitude = " . $latitude;
    echo "<br>";
    echo "Longitude = " . $longitude;
    echo "<br>";
    echo "Size = " . $size;
    echo "<br>";
    echo "Density = " . $density;
    echo "<br>";
    echo "Health = " . $health;
    echo "<br>";
    echo "Burnt = " . $burnt;
    echo "<br>";
    echo "Comment = " . $comment;
    echo "<br>";
    echo "Date = " . $date;
    echo "<br>";

    if(isset($point)){
        
        if($source == "Grid")
        {
            echo "Latitude = " . $point["Latitude"];
            echo "<br>";
            echo "Longitude = " . $point["Longitude"];
            echo "<br>";
            echo "GridConvergence = " . $point["GridConvergence"];
            echo "<br>";
            echo "PointScale = " . $point["PointScale"];
            echo "<br>";
        }
        else {
            echo "Easting = " . $point["Easting"];
            echo "<br>";
            echo "Northing = " . $point["Northing"];
            echo "<br>";
            echo "Zone = " . $point["Zone"];
            echo "<br>";
            echo "GridConvergence = " . $point["GridConvergence"];
            echo "<br>";
            echo "PointScale = " . $point["PointScale"];
            echo "<br>";
        }
    }
    
}
?>

</body>
</html>