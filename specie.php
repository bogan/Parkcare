<!DOCTYPE HTML>
<html>
<head>	
	<title>Specie</title>
	<meta charset="utf-8">
	<meta content="text/html; charset=windows-1252" http-equiv="Content-Type">
	<meta content="MSHTML 9.00.8112.16443" name="GENERATOR">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
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
				
				$('#saveHabitat').hide();
				$('#saveCharacteristics').hide();
				$('#saveDistribution').hide();
				$('#saveOrigin').hide();
				$('#saveNameDerivation').hide();
				$('#savePropogation').hide();
				$('#saveConservationStatus').hide();
            }
        );

		function saveHabitat() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#habitatForm').serialize()
            })
			
			$('#habitat').destroyEditor();
			$('#editHabitat').show();
			$('#saveHabitat').hide();
        ;}
		
		function saveCharacteristics() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#characteristicsForm').serialize()
            })
			
			$('#characteristics').destroyEditor();
			$('#editCharacteristics').show();
			$('#saveCharacteristics').hide();
        ;}
		
		function saveDistribution() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#distributionForm').serialize()
            })
			
			$('#distribution').destroyEditor();
			$('#editDistribution').show();
			$('#saveDistribution').hide();
        ;}
		
		function saveOrigin() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#originForm').serialize()
            })
			
			$('#origin').destroyEditor();
			$('#editOrigin').show();
			$('#saveOrigin').hide();
        ;}
		
		function saveNameDerivation() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#nameDerivationForm').serialize()
            })
			
			$('#nameDerivation').destroyEditor();
			$('#editNameDerivation').show();
			$('#saveNameDerivation').hide();
        ;}
		
		function savePropogation() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#propogationForm').serialize()
            })
			
			$('#propogation').destroyEditor();
			$('#editPropogation').show();
			$('#savePropogation').hide();
        ;}
		
		function saveConservationStatus() {
                    
			$.ajax({
                url: 'specie_save.php',
                type: 'post',
                data: $('#conservationStatus').serialize()
            })
			
			$('#conservationStatus').destroyEditor();
			$('#editConservationStatus').show();
			$('#saveConservationStatus').hide();
        ;}
		
		function editHabitat() {
                    
			$('#habitat').redactor({ focus: true });
			$('#editHabitat').hide();
			$('#saveHabitat').show();
        ;}
		
		function editCharacteristics() {
                    
			$('#characteristics').redactor({ focus: true });
			$('#editCharacteristics').hide();
			$('#saveCharacteristics').show();
        ;}
		
		function editDistribution() {
                    
			$('#distribution').redactor({ focus: true });
			$('#editDistribution').hide();
			$('#saveDistribution').show();
        ;}
		
		function editOrigin() {
                    
			$('#origin').redactor({ focus: true });
			$('#editOrigin').hide();
			$('#saveOrigin').show();
        ;}
		
		function editNameDerivation() {
                    
			$('#nameDerivation').redactor({ focus: true });
			$('#editDerivation').hide();
			$('#saveDerivation').show();
        ;}
		
		function editPropogation() {
                    
			$('#propogation').redactor({ focus: true });
			$('#editPropogation').hide();
			$('#savePropogation').show();
        ;}
		
		function editConservationStatus() {
                    
			$('#conservationStatus').redactor({ focus: true });
			$('#editConservationStatus').hide();
			$('#saveConservationStatus').show();
        ;}
		
		
		
    </script>
</head>
<body leftmargin="0" topmargin="0">
	<div class="container">

		<?php 

		include('header.php'); 

		include('dbinfo.php');

		require("connect.php");

		$id = $_GET["id"]; 

		$result = mysql_query("SELECT * FROM all_species where idSpecies = ".$id);

		while($row = mysql_fetch_array($result))
		{
		?>



		<!-- Specie ID -->
		<div class="row">
			<div class="span12 content">
				<div>
					<h2>Specie ID</h2>
				</div>
				<div>
					<p>
						<?php 
						echo $row['idspecies'];
						?> 
					</p>
				</div>
			</div>
		</div>
	
		<!-- Scientfic Name -->
		<div class="row">
			<div class="span12 content">
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
		</div>

		<!-- Common Name -->
		<div class="row">
			<div class="span12 content">
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
		</div>

		<!-- Habitat -->
		<div class="row">
			<div class="span12 content">
				<div>
					<div style="float:left">
						<h2>Habitat</h2>
					</div>
					<div style="float:right;height:70px">
						<div  style="padding:19px 0px 19px 0px">
							<a id="editHabitat" href="#" onclick="editHabitat();">Edit</a>
							<a id="saveHabitat" href="#" onclick="saveHabitat();">Save</a>
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
		</div>

		<!-- Characteristics -->
		<div class="row">
			<div class="span12 content">
				<div style="float:left">
					<h2>Characteristics</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a id="editCharacteristics" href="#" onclick="editCharacteristics();">Edit</a>
						<a id="saveCharacteristics" href="#" onclick="saveCharacteristics();">Save</a>
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
		</div>

		<!-- Distribution -->
		<div class="row">
			<div class="span12 content">
				<div style="float:left">
					<h2>Distribution</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a id="editDistribution" href="#" onclick="editDistribution();">Edit</a>
						<a id="saveDistribution" href="#" onclick="saveDistribution();">Save</a>
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
		</div>

		<!-- Origin -->
		<div class="row">
			<div class="span12 content">
				<div style="float:left">
					<h2>Origin</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a id="editOrigin" href="#" onclick="editOrigin();">Edit</a>
						<a id="saveOrigin" href="#" onclick="saveOrigin();">Save</a>
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
		</div>

		<!-- Name Derivation -->
		<div class="row">
			<div class="span12 content">
				<div style="float:left">
					<h2>Name Derivation</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a id="editNameDerivation" href="#" onclick="editNameDerivation();">Edit</a>
						<a id="saveNameDerivation" href="#" onclick="saveNameDerivation();">Save</a>
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
		</div>

		<!-- Propogation -->
		<div class="row">
			<div class="span12 content">
				<div style="float:left">
					<h2>Propogation</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a id="editPropogation" href="#" onclick="editPropogation();">Edit</a>
						<a id="savePropogation" href="#" onclick="savePropogation();">Save</a>
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
		</div>

		<!--Conservation Status -->
		<div class="row">
			<div class="span12 content">
				<div style="float:left">
					<h2>Conservation Status</h2>
				</div>
				<div style="float:right;height:70px">
					<div  style="padding:19px 0px 19px 0px">
						<a id="editConservationStatus" href="#" onclick="editConservationStatus();">Edit</a>
						<a id="saveConservationStatus" href="#" onclick="saveConservationStatus();">Save</a>
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
		</div>
		<?php
		}

		mysql_close($con);
		?>

		<?php include 'footer.php'; ?>
	</div>
</body>
</html>