<?php

$idspecies = intval($_REQUEST['idspecies']);
$idgenus = intval($_REQUEST['idgenus']);
$name = $_REQUEST['speciesName'];
$commonName = $_REQUEST['commonName'];
$exotic = $_REQUEST['exotic'];
$habitat = $_REQUEST['habitat'];
//$description = $_REQUEST['description'];

require_once('FirePHPCore/FirePHP.class.php');
$firephp = FirePHP::getInstance(true);
$firephp->log('Plain Fred Message');     // or FB::


require("/dbinfo.php");
$con = @mysql_connect("localhost",$username,$password);
	
if (!$con) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('parkcare', $con);

//$sql = "update species set name='$name',commonName='$commonName',exotic='$exotic',habitat='$habitat' where idspecies=$idspecies";

$sql = "update species set idgenus='$idgenus', name='$name', commonName='$commonName', habitat='$habitat' where idspecies=$idspecies";

//$sql = "update species set idgenus='$idgenus', name='$name', commonName='$commonName', habitat='$habitat' where idspecies=$idspecies";

$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	$error = mysql_error();
	
	echo json_encode(array('msg'=>$error));
}
?>