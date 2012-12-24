<?php

$idspecies = intval($_REQUEST['idspecies']);
$description = $_REQUEST['description'];

/*require_once('FirePHPCore/FirePHP.class.php');
$firephp = FirePHP::getInstance(true);
$firephp->log('Plain Fred Message');     // or FB::

*/
require("dbinfo.php");
$conn = @mysql_connect($username,$password,$database);

if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('parkcare', $conn);

//$sql = "update species set name='$name',commonName='$commonName',exotic='$exotic',habitat='$habitat' where idspecies=$idspecies";

//$sql = "update species set idgenus='$idgenus', name='$name', commonName='$commonName', habitat='$habitat' where idspecies=$idspecies";

$sql = "update species set description ='$description' where idspecies=$idspecies";

$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	$error = mysql_error();
	
	echo json_encode(array('msg'=>$error));
}
?>