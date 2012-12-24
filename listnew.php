<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Strict//EN">
<!-- saved from url=(0038)list.html -->
<html>

<head>
<title>Plant page</title>
<meta content="text/html; charset=windows-1252" http-equiv="Content-Type">
<meta content="MSHTML 9.00.8112.16443" name="GENERATOR">
<link rel="stylesheet" href="style.css" type="text/css">
<script type="text/javascript" src="jquery/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="jquery/jquery.tablesorter.min.js"></script> </head>

<body leftmargin="0" topmargin="0">
<script type="text/javascript">

	$(document).ready(function()     
		{         
			$("#myTable").tablesorter();     
		}
	 ); 
</script>

<?php include 'header.php'; ?>
<table width="100%">
	<tr>
		<td>

			<table align="left">
				<tr>
					<td width="20">&nbsp;</td>
					<td align="left" valign="top">
						<h2><font color="#ba7025" face="ARIAL">Plant List</font></h2>
					</td>
					<td width="20">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>	
	<tr>		
		<td>	
			<table  id="myTable" class="tablesorter" align="center" border="1" width="100%">
			<thead>
				<tr>
					<!--<th>Details</th>-->
					<th>Family</th>
					<th>Genus</th>
					<th>Species</th>
					<th>Common Name</th>
					<th>Exotic</th>
				</tr>
				</thead>
				<tbody>
				
				
<?php
require("dbinfo.php");
$conn = @mysql_connect($username,$password,$database);
				
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("parkcare", $con);
 
$result = mysql_query("SELECT * FROM all_names");
 
 
 
while($row = mysql_fetch_array($result))
   {
   
   ?>
   
   <tr>
		<td><?php echo $row['Family Name'];?></td>
		<td><?php echo $row['Genus Name'];?></td>
		<td><?php echo $row['Species Name'];?></td>
		<td><?php echo $row['Common Name'];?></td>
		<td><?php echo $row['Exotic'];?></td>
	</tr>
   
   <?php
   }
 
 
 
 
mysql_close($con);
 ?> 

				
				</tbody>
			</table>
		</td>
	</tr>
	
	
</table>
<?php include 'footer.php'; ?>
</body>

</html>
