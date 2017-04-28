<?php


// local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blackberry";

// remote
//$servername = "localhost";
//$username="cooleman_test";
//$password="Eucalyptus1!";
//$dbname="cooleman_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}