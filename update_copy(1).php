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
	$result = mysql_query("SELECT * FROM Family where idfamily = 3");
	 
	echo "<form action='update.php' method='post'>";
	 
	while($row = mysql_fetch_array($result))
	{
		echo "<div>ID</div>";
		echo "<div><input type='text' name='idfamily' value='" . $row['idfamily'] . "'></div>";
		echo "<div>Name</div>";
		echo "<div><input type='text' name='name' value='" . $row['name'] . "'></div>";
		echo "<div>Description</div>";
		echo "<div><input type='text' name='description' value='" . $row['description'] . "'></div>";
		echo "<div><input type='submit' value='Go'></div>";
	}
	 
	echo "</form>";
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