<?php

require("dbinfo.php");

 $con = mysql_connect("localhost", $username, $password);

 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
 
mysql_select_db("parkcare", $con);
 
$result = mysql_query("SELECT * FROM Family where idfamily = 3");
 
 echo "<form action='insert.php' method='post'>";
 
 echo "<table border='1'>
 <tr>
 <th>ID</th>
 <th>Name</th>
 </tr>";
 
while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>";
	echo "ID: <input type='text' name='firstname' value='" . $row['idfamily'] . "'>";
	echo "</td>";
	echo "<td>";
	echo "Name: <input type='text' name='lastname' value='" . $row['name'] . "'>";
	echo "</td>";
	echo "</tr>";
	/*echo $row['idfamily'] . " " . $row['name'];*/
}

echo "</table>";
 
echo "</form>";
 
mysql_close($con);
 ?> 