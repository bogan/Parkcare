<?php

$name = $_REQUEST['name'];
$commonName = $_REQUEST['commonName'];
$exotic = $_REQUEST['exotic'] == "Yes" ? true : false;
$habitat = $_REQUEST['habitat'];

require("dbinfo.php");
$conn = @mysql_connect($username,$password,$database);

if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('parkcare', $conn);


$sql = "insert into species(name,commonName,exotic,habitat) values ('$name','$commonName', $exotic,'$habitat')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {

	$error = mysql_error();

	echo json_encode(array('msg'=>$exotic));
}
?>