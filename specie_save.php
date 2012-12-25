<?php


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
	die('Error: ' . mysql_error());
}

?>