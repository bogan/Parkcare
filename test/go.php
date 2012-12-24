<html>
 <body>
 <?php
 require("dbinfo.php");
 $con = @mysql_connect($username,$password,$database);

 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
 
mysql_select_db("test", $con);
 
$result = mysql_query("SELECT * FROM buh");
 
 echo "<table border='1'>
 <tr>
 <th>Firstname</th>
 <th>Lastname</th>
 </tr>";
 
while($row = mysql_fetch_array($result))
   {
   echo "<tr>";
   echo "<td>" . $row['idBuh'] . "</td>";
   echo "<td>" . $row['buh'] . "</td>";
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