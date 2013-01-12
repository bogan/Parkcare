<html>
 <body>
 <?php
 
 require("\\dbinfo.php");
 $con = @mysql_connect("localhost",$username,$password);
 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
 
mysql_select_db("parkcare", $con);
 
$result = mysql_query("SELECT * FROM family");
 
 echo "<table border='1'>
 <tr>
 <th>ID</th>
 <th>Name</th>
 </tr>";
 
while($row = mysql_fetch_array($result))
   {
   echo "<tr>";
   echo "<td>" . $row['idfamily'] . "</td>";
   echo "<td>" . $row['name'] . "</td>";
   echo "</tr>";
   }
 echo "</table>";
 
 
 
mysql_close($con);
 ?> 

 
 <?php (phpinfo()) ?>
 
<?php
 $d=date("D");
 if ($d=="Fri")
   echo "Have a nice weekend!";
 else
   echo "Have a nice day!";
 ?>
 <?php include 'footer.php'; ?>
</body>
 </html>