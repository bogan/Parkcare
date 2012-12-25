<?php


/*$idgenus = intval($_REQUEST['idgenus']);
$name = $_REQUEST['speciesName'];
$commonName = $_REQUEST['commonName'];
$exotic = $_REQUEST['exotic'];*/
$habitat = $_REQUEST['habitat'];
$characteristics = $_REQUEST['characteristics'];

$idspecies = intval($_REQUEST['idspecies']);

include 'dbinfo.php';

$con = mysql_connect("localhost", $username, $password);

if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("parkcare", $con);

//$sql = "UPDATE species SET name='$_POST[name]',  description='$_POST[description]' WHERE idfamily='$_POST[idfamily]'";
//$sql = "update species set idgenus='$idgenus', name='$name', commonName='$commonName', habitat='$habitat' where idspecies=$idspecies";
//$sql = "update species set habitat='$habitat' where idspecies=$idspecies";
$sql = "update species set characteristics='$characteristics' where idspecies=$idspecies";

if (!mysql_query($sql,$con))
{
	$fred = mysql_error();
	echo mysql_error();
	//die('Error: ' . mysql_error());
}

//echo stripslashes($_POST['habitat']);

?>