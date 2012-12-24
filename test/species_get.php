<?php
	header("Content-type:application/json");
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();

	require("dbinfo.php");
	$conn = @mysql_connect($username,$password,$database);

	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('parkcare', $conn);
	
	$rs = mysql_query("select count(*) from species");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	//$rs = mysql_query("select idspecies, name, commonName, if(`species`.`exotic`,'Yes','No') AS `exotic`, habitat from species limit $offset,$rows");
	$rs = mysql_query("select idgenus, genusName, idspecies, speciesName, commonName, exotic, habitat, description from all_species limit $offset,$rows");
	
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);

?>