<!DOCTYPE html>
<html>
<head>	
	<title>Specie</title>

	<meta charset="utf-8">
	<link href="styles/style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/jquery/jquery-1.8.3.min.js"></script>	
	<link rel="stylesheet" href="/styles/redactor.css" />
	<script src="/scripts/redactor.js"></script>
	<script type="text/javascript">
        $(document).ready(
            function () 
            {
                //$('#habitat').redactor();
				//$('#characteristics').redactor();
				//$('#distribution').redactor();
				//$('#origin').redactor();
				//$('#nameDerivation').redactor();
				//$('#propogation').redactor();
				//$('#conservationStatus').redactor();
            }
        );

		function saveHabitat() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#habitatForm').serialize()
            })
			
			$('#habitat').destroyEditor();
        ;}
		
		function saveCharacteristics() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#characteristicsForm').serialize()
            })
			
			$('#characteristics').destroyEditor();
        ;}
		
		function saveDistribution() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#distributionForm').serialize()
            })
			
			$('#distribution').destroyEditor();
        ;}
		
		function saveOrigin() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#originForm').serialize()
            })
			
			$('#origin').destroyEditor();
        ;}
		
		function saveNameDerivation() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#nameDerivationForm').serialize()
            })
			
			$('#nameDerivation').destroyEditor();
        ;}
		
		function savePropogation() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#propogationForm').serialize()
            })
			
			$('#propogation').destroyEditor();
        ;}
		
		function saveConservationStatus() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#conservationStatus').serialize()
            })
			
			$('#conservationStatus').destroyEditor();
        ;}
		
		function editHabitat() {
                    
			$('#habitat').redactor({ focus: true });
        ;}
		
		function editCharacteristics() {
                    
			$('#characteristics').redactor({ focus: true });
        ;}
		
		function editDistribution() {
                    
			$('#distribution').redactor({ focus: true });
        ;}
		
		function editOrigin() {
                    
			$('#origin').redactor({ focus: true });
        ;}
		
		function editNameDerivation() {
                    
			$('#nameDerivation').redactor({ focus: true });
        ;}
		
		function editPropogation() {
                    
			$('#propogation').redactor({ focus: true });
        ;}
		
		function editConservationStatus() {
                    
			$('#conservationStatus').redactor({ focus: true });
        ;}
		
		
		
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
					<div style="float:left">
						<h2>Habitat</h2>
					</div>
					<div style="float:right;height:70px">
						<div  style="padding:19px 0px 19px 0px">
							<a href="#" onclick="editHabitat();">Edit</a>
							<a href="#" onclick="saveHabitat();">Save</a>
						</div>
					</div>
				</div>
				<div style="clear:both">
					<form action="" id="habitatForm" method="post">
						<div id="habitat" name="habitat">
							<?php 
							echo $row['habitat'];
							?> 
						</div>    
						<input type="hidden" name="idspecies" value="401">
					</form>
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
				<div style="float:left">
					<h2>Characteristics</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a href="#" onclick="editCharacteristics();">Edit</a>
						<a href="#" onclick="saveCharacteristics();">Save</a>
					</div>
				</div>
				<div style="clear:both">
					<form action="" id="characteristicsForm" method="post">
						<div id="characteristics" name="characteristics">
							<?php 
							echo $row['characteristics'];
							?> 
						</div>    
						<input type="hidden" name="idspecies" value="401">
					</form>
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
				<div style="float:left">
					<h2>Distribution</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a href="#" onclick="editDistribution();">Edit</a>
						<a href="#" onclick="saveDistribution();">Save</a>
					</div>
				</div>
				<div style="clear:both">
					<form action="" id="distributionForm" method="post">
						<div id="distribution" name="distribution">
							<?php 
							echo $row['distribution'];
							?> 
						</div>    
						<input type="hidden" name="idspecies" value="401">
					</form>
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
				<div style="float:left">
					<h2>Origin</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a href="#" onclick="editOrigin();">Edit</a>
						<a href="#" onclick="saveOrigin();">Save</a>
					</div>
				</div>
				<div style="clear:both">
					<form action="" id="originForm" method="post">
						<div id="origin" name="origin">
							<?php 
							echo $row['origin'];
							?> 
						</div>    
						<input type="hidden" name="idspecies" value="401">
					</form>
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
				<div style="float:left">
					<h2>Name Derivation</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a href="#" onclick="editNameDerivation();">Edit</a>
						<a href="#" onclick="saveNameDerivation();">Save</a>
					</div>
				</div>
				<div style="clear:both">
					<form action="" id="nameDerivationForm" method="post">
						<div id="nameDerivation" name="nameDerivation">
							<?php 
							echo $row['nameDerivation'];
							?> 
						</div>    
						<input type="hidden" name="idspecies" value="401">
					</form>
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
				<div style="float:left">
					<h2>Propogation</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a href="#" onclick="editPropogation();">Edit</a>
						<a href="#" onclick="savePropogation();">Save</a>
					</div>
				</div>
				<div style="clear:both">
					<form action="" id="propogationForm" method="post">
						<div id="propogation" name="propogation">
							<?php 
							echo $row['propogation'];
							?> 
						</div>    
						<input type="hidden" name="idspecies" value="401">
					</form>
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
				<div style="float:left">
					<h2>Conservation Status</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a href="#" onclick="editConservationStatus();">Edit</a>
						<a href="#" onclick="saveConservationStatus();">Save</a>
					</div>
				</div>
				<div style="clear:both">
					<form action="" id="conservationStatusForm" method="post">
						<div id="conservationStatus" name="conservationStatus">
							<?php 
							echo $row['conservationStatus'];
							?> 
						</div>    
						<input type="hidden" name="idspecies" value="401">
					</form>
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