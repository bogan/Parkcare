<?php

$idspecies = intval($_REQUEST['idspecies']);

require("dbinfo.php");
$conn = @mysql_connect($username,$password,$database);

if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('parkcare', $conn);


$sql = "delete from species where idspecies=$idspecies";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>