<!DOCTYPE html>
<html>
<head>	
	<title>Fixed toolbar</title>

	<meta charset="utf-8">
	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/jquery/jquery-1.8.3.min.js"></script>	
	<link rel="stylesheet" href="/styles/redactor.css" />
	<script src="/scripts/redactor.js"></script>
	<script type="text/javascript">
	$(document).ready(
		function()
		{
			$('#habitat').redactor();
			$('#characteristics').redactor();
			$('#distribution').redactor();
			$('#origin').redactor();
			$('#nameDerivation').redactor();
			$('#propogation').redactor();
			$('#conservationStatus').redactor();
		}
	);
	</script>
				

</head>
<body leftmargin="0" topmargin="0">


<?php include 'header.php'; ?>

<?php include 'dbinfo.php'; ?>


<?php 

$con = mysql_connect("localhost", $username, $password);

if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("parkcare", $con);

//$result = mysql_query("SELECT * FROM Family where idfamily = 108");
$result = mysql_query("SELECT * FROM all_species where idSpecies = 401");

while($row = mysql_fetch_array($result))
{

?>

<table align="center" cellpadding="10" width="800">
	<tr>
		<td colspan="5">&nbsp;</td>
	</tr>

	<!-- Scientfic Name -->
	<tr>
		<td width="20">&nbsp;</td>
	<td>
		<div class="content">
			<div>
				<h2>Scientific Name</h2>
			</div>
			<div>
				<p>
								<?php 
								echo $row['genusName'] . " " . $row['speciesName'];
								?> 
				</p>
			</div>
			<div>
				<a href="buh.php" style="align:right">Edit</a>
			</div>
		</div>
	</td>
	<td width="20">&nbsp;</td>
	</tr>

	<!-- Common Name -->
	<tr>
		<td width="20">&nbsp;</td>
		<td>
			<div class="content">
				<div>
					<h2>Common Name</h2>
				</div>
			<div>
				<p>
						<?php 
						echo $row['commonName'];
						?>
				</p>
			</div>
			<div>
				<a href="buh.php" style="align:right">Edit</a>
			</div>
			</div>
		</td>
		<td width="20">&nbsp;</td>
	</tr>

	<!-- Habitat -->
	<tr>
		<td width="20">&nbsp;</td>
		<td>
			<div class="content">
				<div>
					<h2>Habitat</h2>
				</div>
				<div>
					<textarea id="habitat">
						<?php 
						echo $row['habitat'];
						?> 
					</textarea>
				</div>
				<div>
					<a href="buh.php" style="align:right">Edit</a>
				</div>
			</div>	
		</td>
		<td width="20">&nbsp;</td>
	</tr>

	<!-- Characteristics -->
	<tr>
		<td width="20">&nbsp;</td>
		<td>
			<div class="content">
				<div>
					<h2>Characteristics</h2>
				</div>
				<div>
					<textarea id="characteristics">
						<?php 
						echo $row['characteristics'];
						?> 
					</textarea>
				</div>
				<div>
					<a href="buh.php" style="align:right">Edit</a>
				</div>
			</div>
		</td>
		<td width="20">&nbsp;</td>
	</tr>

	<!-- Distribution -->
	<tr>
		<td width="20">&nbsp;</td>
		<td>
			<div class="content">
				<div>
					<h2>Distribution</h2>
				</div>
				<div>
					<textarea id="distribution">
						<?php 
						echo $row['distribution'];
						?> 
					</textarea>
				</div>
				<div>
					<a href="buh.php" style="align:right">Edit</a>
				</div>
			</div>
		</td>
		<td width="20">&nbsp;</td>
	</tr>

	<!-- Origin -->
	<tr>
		<td width="20">&nbsp;</td>
		<td>
			<div class="content">
				<div>
					<h2>Origin</h2>
				</div>
				<div>
					<textarea id="origin">
						<?php 
						echo $row['origin'];
						?> 
					</textarea>
				</div>
				<div>
					<a href="buh.php" style="align:right">Edit</a>
				</div>
			</div>
		</td>
		<td width="20">&nbsp;</td>
	</tr>

	<!-- Name Derivation -->
	<tr>
		<td width="20">&nbsp;</td>
		<td>
			<div class="content">
				<div>
					<h2>Name Derivation</h2>
				</div>
				<div>
					<textarea id="nameDerivation">
						<?php 
						echo $row['nameDerivation'];
						?> 
					</textarea>
				</div>
				<div>
					<a href="buh.php" style="align:right">Edit</a>
				</div>
			</div>
		</td>
		<td width="20">&nbsp;</td>
	</tr>

	<!-- Propogation -->
	<tr>
		<td width="20">&nbsp;</td>
		<td>
			<div class="content">
				<div>
					<h2>Propogation</h2>
				</div>
				<div>
					<textarea id="propogation">
						<?php 
						echo $row['propogation'];
						?> 
					</textarea>
				</div>
				<div>
					<a href="buh.php" style="align:right">Edit</a>
				</div>
			</div>
		</td>
		<td width="20">&nbsp;</td>
	</tr>

	<!--Conservation Status -->
	<tr>
		<td width="20">&nbsp;</td>
		<td>
			<div class="content">
				<div>
					<h2>Conservation Status</h2>
				</div>
				<div>
					<textarea id="conservationStatus">
						<?php 
						echo $row['conservationStatus'];
						?> 
					</textarea>
				</div>
				<div>
					<a href="buh.php" style="align:right">Edit</a>
				</div>
			</div>
		</td>
		<td width="20">&nbsp;</td>
	</tr>

</table>

<?php
}
mysql_close($con);
?>

<?php include 'footer.php'; ?>
</body>
</html>