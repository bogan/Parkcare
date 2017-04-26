<?php

// Get data
include 'database.php';

// Creates the Document.
$dom = new DOMDocument('1.0', 'UTF-8');

// Creates the root KML element and appends it to the root document.
$node = $dom->createElementNS('http://earth.google.com/kml/2.1', 'kml');
$parNode = $dom->appendChild($node);

// Creates a KML Document element and append it to the KML element.
$dnode = $dom->createElement('Document');
$docNode = $parNode->appendChild($dnode);

// Creates the two Style elements, one for restaurant and one for bar, and append the elements to the Document element.
// $restStyleNode = $dom->createElement('Style');
// $restStyleNode->setAttribute('id', 'restaurantStyle');
// $restIconstyleNode = $dom->createElement('IconStyle');
// $restIconstyleNode->setAttribute('id', 'restaurantIcon');
// $restIconNode = $dom->createElement('Icon');
// $restHref = $dom->createElement('href', 'http://maps.google.com/mapfiles/kml/pal2/icon63.png');
// $restIconNode->appendChild($restHref);
// $restIconstyleNode->appendChild($restIconNode);
// $restStyleNode->appendChild($restIconstyleNode);
// $docNode->appendChild($restStyleNode);

// $barStyleNode = $dom->createElement('Style');
// $barStyleNode->setAttribute('id', 'barStyle');
// $barIconstyleNode = $dom->createElement('IconStyle');
// $barIconstyleNode->setAttribute('id', 'barIcon');
// $barIconNode = $dom->createElement('Icon');
// $barHref = $dom->createElement('href', 'http://maps.google.com/mapfiles/kml/pal2/icon27.png');
// $barIconNode->appendChild($barHref);
// $barIconstyleNode->appendChild($barIconNode);
// $barStyleNode->appendChild($barIconstyleNode);
// $docNode->appendChild($barStyleNode);




// Iterates through the MySQL results, creating one Placemark for each row.

while($row = $result->fetch_assoc()) {

    $id = $row["id"];
    $source = $row["source"];
    $easting = $row["easting"];
    $northing = $row["northing"];
    $latitude = $row["latitude"];
    $longitude = $row["longitude"];
    $size = $row["size"];
    $density = $row["density"];
    $health = $row["health"];
    $burnt = $row["burnt"];
    $creationDate = date_format(date_create($row["creation_date"]),"d-m-Y");
    
    // Creates a Placemark and append it to the Document.
    $node = $dom->createElement('Placemark');
    $placeNode = $docNode->appendChild($node);
    
    // Creates an id attribute and assign it the value of id column.
    $placeNode->setAttribute('id', 'blackberry'.$id);
    
    // Create name, and description elements and assigns them the values of the name and address columns from the results.
    $nameNode = $dom->createElement('name','Blackberry #'.$id);
    $placeNode->appendChild($nameNode);
    // $descNode = $dom->createElement('description', 'bar');
    // $placeNode->appendChild($descNode);
    // $styleUrl = $dom->createElement('styleUrl', '#' . 'barStyle' . 'Style');
    // $placeNode->appendChild($styleUrl);
    
    // Creates a Point element.
    $pointNode = $dom->createElement('Point');
    $placeNode->appendChild($pointNode);
    
    // Creates a coordinates element and gives it the value of the lng and lat columns from the results.
    $coorStr = $longitude . ','  . $latitude;
    $coorNode = $dom->createElement('coordinates', $coorStr);
    $pointNode->appendChild($coorNode);

}

//$myfile = fopen("blackberrys.csv", "r") or die("unable to open file!");

/* while(!feof($myfile))
{
	$line = fgets($myfile);
	$location = explode(',', $line);
	
	$id = trim($location[0]);
    $easting = trim($location[1]);
    $northing = trim($location[2]);
    $latitude =  trim($location[3]);
    $longitude = trim($location[4]);
}
 */

$kmlOutput = $dom->saveXML();
header('Content-type: application/vnd.google-earth.kml+xml');
header('Content-Disposition: attachment; filename=blackberrys.kml');
echo $kmlOutput;
?>

