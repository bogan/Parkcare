<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Strict//EN">
<!-- saved from url=(0038)list.html -->
<html>

	<head>
		<title>Species</title>
		<meta content="text/html; charset=windows-1252" http-equiv="Content-Type">
		<meta content="MSHTML 9.00.8112.16443" name="GENERATOR">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="styles/style.css" type="text/css">
		<script type="text/javascript" src="jquery/jquery-1.8.3.min.js"></script>
		<script type="text/javascript" src="jquery/jquery.tablesorter.min.js"></script> 
		<script type="text/javascript">
			$(document).ready(function()     
				{         
					$("#myTable").tablesorter();     
				}
			 ); 
		</script>
	</head>

	<body leftmargin="0" topmargin="0">
		<div class="container">
			<?php include 'header.php'; ?>
			<div class="row">
				<div class="span12">
					<table width="100%">
						<tr>
							<td>

								<table align="left">
									<tr>
										<td width="20">&nbsp;</td>
										<td align="left" valign="top">
											<h2><font color="#ba7025" face="ARIAL">Species List</font></h2>
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

									require("connect.php");
 
									$result = mysql_query("SELECT * FROM all_species");
 
									while($row = mysql_fetch_array($result))
									{
									?>

										<tr>
											<td><a href="family.php?id=<?php echo $row['idfamily'];?>"><?php echo $row['familyName'];?></a></td>
											<td><a href="genus.php?id=<?php echo $row['idgenus'];?>"><?php echo $row['genusName'];?></a></td>
											<td><a href="specie.php?id=<?php echo $row['idspecies'];?>"><?php echo $row['speciesName'];?></a></td>
											<td><?php echo $row['commonName'];?></td>
											<td><?php echo $row['exotic'];?></td>
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
				</div>
			</div>
			<?php include 'footer.php'; ?>
		</div>
	</body>
</html>
