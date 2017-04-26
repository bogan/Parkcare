<?php

include 'database.php';

// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=blackberry.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('id', 'source', 'easting', 'northing', 'latitude', 'longitude', 'size', 'density', 'health', 'burnt', 'comment', 'creation_date', 'last_updated_date'));

// loop over the rows, outputting them
while ($row = $result->fetch_assoc()) fputcsv($output, $row);
    
   
// echo("<p/>");

// echo("<table border='1' cellpadding='0' cellspacing='0'>");
// echo("<tr><th>ID</th><th>Easting</th><th>Northing</th><th>Latitude</th><th>Longitude</th></tr></tr>");

// $myfile = fopen("blackberrys.csv", "r") or die("unable to open file!");
// // output one line until end-of-file
// while(!feof($myfile)) {
// // $line = fgets($myfile);
// printBlackberry(fgets($myfile));
// }
// fclose($myfile);

// echo("</table>");

// echo("<p/>");

//echo("<table border='1' cellpadding='0' cellspacing='0'>");
//echo("<tr><th>Variable</th><th>Value</th></tr>");
//$point = redfearnGridtoLLDebug(0685921,0685921);
//echo("</table>");
//echo("<p/>");