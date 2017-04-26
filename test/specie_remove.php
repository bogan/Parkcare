<?php

$idspecies = intval($_REQUEST['idspecies']);

require("dbinfo.php");
$con = @mysql_connect("localhost",$username,$password);

if (!$con) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('parkcare', $con);


$sql = "delete from species where idspecies=$idspecies";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>