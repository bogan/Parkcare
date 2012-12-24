<?php

require("dbinfo.php");

 $con = mysql_connect("localhost", $username, $password);

 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
 
mysql_select_db("parkcare", $con);

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
	$idfamily = 'fred'; 

	if(isset($_GET["idfamily"]))
	{
		$idfamily = $_GET["idfamily"]; 
	}
	else
	{
		$idfamily = 3; 
	}
	
	
	
	$result = mysql_query("SELECT * FROM Family where idfamily = " . $idfamily);
	 
	
	 
	while($row = mysql_fetch_array($result))
	{
	
	?>
	<html>
		<head>
		</head>
		<body>
			<div><?php echo $idfamily; ?></div>
			<form action='update.php' method='post'>
				<div>ID</div>
				<div><input type='text' name='idfamily' value='<?php echo $row['idfamily'];?>'></div>
				<div>Name</div>
				<div><input type='text' name='name' value='<?php echo $row['name']; ?>'></div>
				<div>Description</div>
				<div><input type='text' name='description' value='<?php echo $row['description']; ?>'></div>
				<div><input type='submit' value='Go'></div>
			</form>	
		</body>
	</html>
		<?php
	}
	 
	
}
else
{
	echo $_POST["name"];
	
	echo $_POST["idfamily"];
	
	echo $_POST["description"];
	

	$sql = "UPDATE family SET name='$_POST[name]',  description='$_POST[description]' WHERE idfamily='$_POST[idfamily]'";
	
//	$sql = "INSERT INTO Persons (FirstName, LastName, Age) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
	 
	if (!mysql_query($sql,$con))
	   {
	   die('Error: ' . mysql_error());
	   }
	 echo "1 record updated!";
	
	 
} 
mysql_close($con);
 ?> 