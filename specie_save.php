<?php


/*$idgenus = intval($_REQUEST['idgenus']);
$name = $_REQUEST['speciesName'];
$commonName = $_REQUEST['commonName'];
$exotic = $_REQUEST['exotic'];*/
$habitat = $_REQUEST['habitat'];
$characteristics = $_REQUEST['characteristics'];
$distribution = $_REQUEST['distribution'];
$origin = $_REQUEST['origin'];
$nameDerivation = $_REQUEST['nameDerivation'];
$propogation = $_REQUEST['propogation'];
$conservationStatus = $_REQUEST['conservationStatus'];

$idspecies = intval($_REQUEST['idspecies']);

include 'dbinfo.php';

$con = mysql_connect("localhost", $username, $password);

if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("parkcare", $con);

$sql = "";

//$sql = "UPDATE species SET name='$_POST[name]',  description='$_POST[description]' WHERE idfamily='$_POST[idfamily]'";
//$sql = "update species set idgenus='$idgenus', name='$name', commonName='$commonName', habitat='$habitat' where idspecies=$idspecies";

if($habitat != null)
{
	$sql = "update species set habitat='$habitat' where idspecies=$idspecies";
}
elseif($characteristics != null)
{
	$sql = "update species set characteristics='$characteristics' where idspecies=$idspecies";
}
elseif($distribution != null)
{
	$sql = "update species set distribution='$distribution' where idspecies=$idspecies";
}
elseif($origin != null)
{
	$sql = "update species set origin='$origin' where idspecies=$idspecies";
}
elseif($nameDerivation != null)
{
	$sql = "update species set nameDerivation='$nameDerivation' where idspecies=$idspecies";
}
elseif($propogation != null)
{
	$sql = "update species set propogation='$propogation' where idspecies=$idspecies";
}
elseif($conservationStatus != null)
{
	$sql = "update species set conservationStatus='$conservationStatus' where idspecies=$idspecies";
}

if (!mysql_query($sql,$con))
{
	$fred = mysql_error();
	echo mysql_error();
	//die('Error: ' . mysql_error());
}

//echo stripslashes($_POST['habitat']);

?>