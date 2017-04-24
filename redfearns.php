<?php
/**
 * Created by PhpStorm.
 * User: Rohan
 * Date: 16/01/2017
 * Time: 17:40
 */
##################################################
# Sourced from https://plaintech.net.au/
#
# This work is distributed under the following licence
# http://creativecommons.org/licenses/by/3.0/au/
#
# This is a remix (adapted work) of an Excel spreadsheet provided by "Geoscience Australia".
# The original spreadsheet can be found at -
# http://www.ga.gov.au/geodesy/datums/calcs.jsp
#
# Geoscience Australia do not endorse this remix in any manner.
#
# ~Remix by P. Howarth with thanks to B.B.Morgan (http://www.hotchipsnsource.com/redfearn.php)
# for getting it started.
###################################################



//$point = redfearnLLtoGrid(-37.8175, 144.9674);

//echo $point["Easting"] . "<br>";
//echo $point["Northing"];

function printBlackberry($line)
{
	$location = explode(',', $line);
  
	$id = $location[0];
    $easting = $location[1];
    $northing = $location[2];
    $point = redfearngridtoll($easting,$northing);
    $lat =  $point["Latitude"];
    $long = $point["Longitude"];

    echo("<tr>");
    echo("<td width='200'>$id</td>");
    echo("<td width='200'>$easting</td>");
    echo("<td width='200'>$northing</td>");
    echo("<td width='200'>$lat</td>");
    echo("<td width='200'>$long</td>");
    echo("</tr>");
}

function DMStoDecimalDegrees ($Degrees, $Minutes, $Seconds)
{
    $Decimal = abs($Degrees) + abs($Minutes) / 60 + abs($Seconds) / 3600;
    if ( $Degrees < 0 ) {
        $DecimalDegrees = -$Decimal;
    } elseif ($Minutes < 0) {
        $DecimalDegrees = -$Decimal;
    } elseif ($Seconds < 0) {
        $DecimalDegrees = -$Decimal;
    } else {
        $DecimalDegrees = $Decimal;
    }
    return $DecimalDegrees;
}

function DecimalDegreestoDMS ($DecimalDegrees)
{
    $Degrees = intval($DecimalDegrees);
    $Minutes = intval(($DecimalDegrees - $Degrees) * 60);
    $Seconds = ($DecimalDegrees - $Degrees - ($Minutes / 60)) * 3600;

    $Point["Degrees"] = $Degrees;
    $Point["Minutes"] = $Minutes;
    $Point["Seconds"] = $Seconds;

    return $Point;
}

function redfearnLLtoGrid($LatitudeDegrees, $LongitudeDegrees, $EllipsoidDefinition = "GRS80")
{

    switch ($EllipsoidDefinition) {
        case "GRS80":
            $SemiMajorAxis = 6378137.000;
            $InverseFlattening = 298.257222101000;
            $TmDefinition = "GDA-MGA";
            break;
        case "WGS84":
            $SemiMajorAxis = 6378137.000;
            $InverseFlattening = 298.257223563000;
            $TmDefinition = "GDA-MGA";
            break;
        default:
            $EllipsoidDefinition = "GRS80";
            $SemiMajorAxis = 6378137.000;
            $InverseFlattening = 298.257222101000;
            $TmDefinition = "GDA-MGA";
    }

    switch ($TmDefinition) {
        case "GDA-MGA":
            $FalseEasting = 500000.0000;
            $FalseNorthing = 10000000.0000;
            $CentralScaleFactor = 0.9996;
            $ZoneWidthDegrees = 6;
            $LongitudeOfTheCentralMeridianOfZone1Degrees = -177;
            break;
        default:
            $TmDefinition = "GDA-MGA";
            $FalseEasting = 500000.0000;
            $FalseNorthing = 10000000.0000;
            $CentralScaleFactor = 0.9996;
            $ZoneWidthDegrees = 6;
            $LongitudeOfTheCentralMeridianOfZone1Degrees = -177;
    }

    $Flattening = 1 / $InverseFlattening;
    $SemiMinorAxis = $SemiMajorAxis * (1 - $Flattening);
    $Eccentricity = (2 * $Flattening) - ($Flattening * $Flattening);
    $n = ($SemiMajorAxis - $SemiMinorAxis) / ($SemiMajorAxis + $SemiMinorAxis);
    $n2 = pow($n, 2);
    $n3 = pow($n, 3);
    $n4 = pow($n, 4);
    $G = $SemiMajorAxis * (1 - $n) * (1 - $n2) * (1 + (9 * $n2) / 4 + (225 * $n4) / 64) * PI() / 180;
    $LongitudeOfWesternEdgeOfZoneZeroDegrees = $LongitudeOfTheCentralMeridianOfZone1Degrees - (1.5 * $ZoneWidthDegrees);
    $CentralMeridianOfZoneZeroDegrees = $LongitudeOfWesternEdgeOfZoneZeroDegrees + ($ZoneWidthDegrees / 2);
    $LatitudeRadians = ($LatitudeDegrees / 180) * PI();
    $ZoneNoReal = ($LongitudeDegrees - $LongitudeOfWesternEdgeOfZoneZeroDegrees) / $ZoneWidthDegrees;
    $Zone = intval($ZoneNoReal);
    $CentralMeridian = ($Zone * $ZoneWidthDegrees) + $CentralMeridianOfZoneZeroDegrees;

    $DiffLongitudeDegrees =  $LongitudeDegrees - $CentralMeridian;
    $DiffLongitudeRadians =  ($DiffLongitudeDegrees / 180) * PI();
    $SinLatitude = sin($LatitudeRadians);
    $SinLatitude2 = sin(2 * $LatitudeRadians);
    $SinLatitude4 = sin(4 * $LatitudeRadians);
    $SinLatitude6 = sin(6 * $LatitudeRadians);
    $E2 = $Eccentricity;
    $E4 = pow($E2, 2);
    $E6 = $E2 * $E4;
    $A0 = 1 - ($E2 / 4) - ((3 * $E4) / 64) - ((5 * $E6) / 256);
    $A2 = (3/8) * ($E2 + ($E4 / 4) + ((15 * $E6) / 128));
    $A4 = (15/256) * ($E4 + ((3 * $E6) / 4));
    $A6 = (35 * $E6) / 3072;
    $MeridianDistanceTerm1 = $SemiMajorAxis * $A0 * $LatitudeRadians;
    $MeridianDistanceTerm2 = -$SemiMajorAxis * $A2 * $SinLatitude2;
    $MeridianDistanceTerm3 = $SemiMajorAxis * $A4 * $SinLatitude4;
    $MeridianDistanceTerm4 = -$SemiMajorAxis * $A6 * $SinLatitude6;
    $SumMeridianDistances = $MeridianDistanceTerm1 + $MeridianDistanceTerm2 + $MeridianDistanceTerm3 + $MeridianDistanceTerm4;
    $Rho = $SemiMajorAxis * (1 - $E2) / pow((1 - $E2 * pow($SinLatitude, 2)), 1.5);
    $Nu = $SemiMajorAxis / pow((1 - ($E2 * pow($SinLatitude, 2))), 0.5);
    $CosLatitude1 = cos($LatitudeRadians);
    $CosLatitude2 = pow($CosLatitude1 , 2);
    $CosLatitude3 = pow($CosLatitude1 , 3);
    $CosLatitude4 = pow($CosLatitude1 , 4);
    $CosLatitude5 = pow($CosLatitude1 , 5);
    $CosLatitude6 = pow($CosLatitude1 , 6);
    $CosLatitude7 = pow($CosLatitude1 , 7);
    $DiffLongitude1 = $DiffLongitudeRadians;
    $DiffLongitude2 = pow($DiffLongitude1 , 2);
    $DiffLongitude3 = pow($DiffLongitude1 , 3);
    $DiffLongitude4 = pow($DiffLongitude1 , 4);
    $DiffLongitude5 = pow($DiffLongitude1 , 5);
    $DiffLongitude6 = pow($DiffLongitude1 , 6);
    $DiffLongitude7 = pow($DiffLongitude1 , 7);
    $DiffLongitude8 = pow($DiffLongitude1 , 8);
    $TanLatitude1 = tan($LatitudeRadians);
    $TanLatitude2 = pow($TanLatitude1, 2);
    $TanLatitude4 = pow($TanLatitude1, 4);
    $TanLatitude6 = pow($TanLatitude1, 6);
    $Psi1 = $Nu / $Rho;
    $Psi2 = pow($Psi1, 2);
    $Psi3 = pow($Psi1, 3);
    $Psi4 = pow($Psi1, 4);

    $EastingTerm1 = $Nu * $DiffLongitude1 * $CosLatitude1;
    $EastingTerm2 = $Nu * $DiffLongitude3 * $CosLatitude3 * ($Psi1 - $TanLatitude2) / 6;
    $EastingTerm3 = $Nu * $DiffLongitude5 * $CosLatitude5 * (4 * $Psi3 * (1 - 6 * $TanLatitude2) + $Psi2 * (1 + 8 * $TanLatitude2) - $Psi1 * (2 * $TanLatitude2) + $TanLatitude4) / 120;
    $EastingTerm4 = $Nu * $DiffLongitude7 * $CosLatitude7 * (61 - 479 *  $TanLatitude2 + 179 * $TanLatitude4 - $TanLatitude6) / 5400;

    $SumEasting = $EastingTerm1 + $EastingTerm2 + $EastingTerm3 + $EastingTerm4;
    $SumEastingK = $CentralScaleFactor * $SumEasting;

    $Easting = $FalseEasting+$SumEastingK;

    $NorthingMeridianDistance = $SumMeridianDistances;
    $NorthingTerm1 = $Nu * $SinLatitude * $DiffLongitude2 * $CosLatitude1 / 2;
    $NorthingTerm2 = $Nu * $SinLatitude * $DiffLongitude4 * $CosLatitude3 * (4 * $Psi2 + $Psi1 - $TanLatitude2) / 24;
    $NorthingTerm3 = $Nu * $SinLatitude * $DiffLongitude6 * $CosLatitude5 * (8 * $Psi4 * (11 - 24 * $TanLatitude2) - 28 * $Psi3 * (1 - 6 * $TanLatitude2) + $Psi2 * (1 - 32 * $TanLatitude2) - $Psi1 * (2 * $TanLatitude2) + $TanLatitude4) / 720;
    $NorthingTerm4 =  $Nu * $SinLatitude * $DiffLongitude8 * $CosLatitude7 * (1385 - 3111 * $TanLatitude2 + 543 * $TanLatitude4 - $TanLatitude6) / 40320;

    $SumNorthing = $NorthingMeridianDistance + $NorthingTerm1 + $NorthingTerm2 + $NorthingTerm3 + $NorthingTerm4;
    $SumNorthingK = $CentralScaleFactor * $SumNorthing;

    $Northing = $FalseNorthing + $SumNorthingK;

    $GridConvergenceTerm1 = -$SinLatitude * $DiffLongitude1;
    $GridConvergenceTerm2 = -$SinLatitude * $DiffLongitude3 * $CosLatitude2 * (2 * $Psi2 - $Psi1) / 3;
    $GridConvergenceTerm3 = -$SinLatitude * $DiffLongitude5 * $CosLatitude4 * ($Psi4 * (11 - 24 * $TanLatitude2) - $Psi3 * (11 - 36 * $TanLatitude2) + 2 * $Psi2 * (1 - 7 * $TanLatitude2) + $Psi1 * $TanLatitude2) / 15;
    $GridConvergenceTerm4 = $SinLatitude * $DiffLongitude7 * $CosLatitude6 * (17 - 26 * $TanLatitude2 + 2 * $TanLatitude4) / 315;

    $GridConvergenceRadians = $GridConvergenceTerm1 + $GridConvergenceTerm2 + $GridConvergenceTerm3 + $GridConvergenceTerm4;
    $GridConvergenceDegrees = ($GridConvergenceRadians / PI()) * 180;;

    $PointScaleTerm1 = 1 + ($DiffLongitude2 * $CosLatitude2 * $Psi1) / 2;
    $PointScaleTerm2 = $DiffLongitude4 * $CosLatitude4 * (4 * $Psi3 * (1 - 6 * $TanLatitude2) + $Psi2 * (1 + 24 * $TanLatitude2) - 4 * $Psi1 * $TanLatitude2) / 24;
    $PointScaleTerm3 = $DiffLongitude6 * $CosLatitude6 * (61 - 148 * $TanLatitude2 + 16 * $TanLatitude4) / 720;
    $SumPointScale = $PointScaleTerm1 + $PointScaleTerm2 + $PointScaleTerm3;
    $PointScale = $CentralScaleFactor * $SumPointScale;

    $Point["Easting"] = $Easting;
    $Point["Northing"] = $Northing;
    $Point["Zone"] = $Zone;
    $Point["GridConvergence"] = $GridConvergenceDegrees;
    $Point["PointScale"] = $PointScale;

    return $Point;
}

function redfearnLLtoGridDebug($LatitudeDegrees, $LongitudeDegrees, $EllipsoidDefinition = "GRS80")
{

    switch ($EllipsoidDefinition) {
        case "GRS80":
            $SemiMajorAxis = 6378137.000;
            $InverseFlattening = 298.257222101000;
            $TmDefinition = "GDA-MGA";
            break;
        case "WGS84":
            $SemiMajorAxis = 6378137.000;
            $InverseFlattening = 298.257223563000;
            $TmDefinition = "GDA-MGA";
            break;
        default:
            $EllipsoidDefinition = "GRS80";
            $SemiMajorAxis = 6378137.000;
            $InverseFlattening = 298.257222101000;
            $TmDefinition = "GDA-MGA";
    }

    switch ($TmDefinition) {
        case "GDA-MGA":
            $FalseEasting = 500000.0000;
            $FalseNorthing = 10000000.0000;
            $CentralScaleFactor = 0.9996;
            $ZoneWidthDegrees = 6;
            $LongitudeOfTheCentralMeridianOfZone1Degrees = -177;
            break;
        default:
            $TmDefinition = "GDA-MGA";
            $FalseEasting = 500000.0000;
            $FalseNorthing = 10000000.0000;
            $CentralScaleFactor = 0.9996;
            $ZoneWidthDegrees = 6;
            $LongitudeOfTheCentralMeridianOfZone1Degrees = -177;
    }

    $Flattening = 1 / $InverseFlattening;
    $SemiMinorAxis = $SemiMajorAxis * (1 - $Flattening);
    $Eccentricity = (2 * $Flattening) - ($Flattening * $Flattening);
    $n = ($SemiMajorAxis - $SemiMinorAxis) / ($SemiMajorAxis + $SemiMinorAxis);
    $n2 = pow($n, 2);
    $n3 = pow($n, 3);
    $n4 = pow($n, 4);
    $G = $SemiMajorAxis * (1 - $n) * (1 - $n2) * (1 + (9 * $n2) / 4 + (225 * $n4) / 64) * PI() / 180;
    $LongitudeOfWesternEdgeOfZoneZeroDegrees = $LongitudeOfTheCentralMeridianOfZone1Degrees - (1.5 * $ZoneWidthDegrees);
    $CentralMeridianOfZoneZeroDegrees = $LongitudeOfWesternEdgeOfZoneZeroDegrees + ($ZoneWidthDegrees / 2);
    $LatitudeRadians = ($LatitudeDegrees / 180) * PI();
    $ZoneNoReal = ($LongitudeDegrees - $LongitudeOfWesternEdgeOfZoneZeroDegrees) / $ZoneWidthDegrees;
    $Zone = intval($ZoneNoReal);
    $CentralMeridian = ($Zone * $ZoneWidthDegrees) + $CentralMeridianOfZoneZeroDegrees;

    echo("Flattening = $Flattening<br>");
    echo("SemiMinorAxis = $SemiMinorAxis<br>");
    echo("Eccentricity = $Eccentricity<br>");
    echo("n = $n<br>");
    echo("n2 = $n2<br>");
    echo("n3 = $n3<br>");
    echo("n4 = $n4<br>");
    echo("G = $G<br>");
    echo("LongitudeOfWesternEdgeOfZoneZeroDegrees = $LongitudeOfWesternEdgeOfZoneZeroDegrees<br>");
    echo("CentralMeridianOfZoneZeroDegrees = $CentralMeridianOfZoneZeroDegrees<br>");
    echo("LatitudeRadians = $LatitudeRadians<br>");
    echo("ZoneNoReal = $ZoneNoReal<br>");
    echo("Zone = $Zone<br>");
    echo("CentralMeridian = $CentralMeridian<br>");
    
    $DiffLongitudeDegrees =  $LongitudeDegrees - $CentralMeridian;
    $DiffLongitudeRadians =  ($DiffLongitudeDegrees / 180) * PI();
    $SinLatitude = sin($LatitudeRadians);
    $SinLatitude2 = sin(2 * $LatitudeRadians);
    $SinLatitude4 = sin(4 * $LatitudeRadians);
    $SinLatitude6 = sin(6 * $LatitudeRadians);
    $E2 = $Eccentricity;
    $E4 = pow($E2, 2);
    $E6 = $E2 * $E4;
    $A0 = 1 - ($E2 / 4) - ((3 * $E4) / 64) - ((5 * $E6) / 256);
    $A2 = (3/8) * ($E2 + ($E4 / 4) + ((15 * $E6) / 128));
    $A4 = (15/256) * ($E4 + ((3 * $E6) / 4));
    $A6 = (35 * $E6) / 3072;

    echo("DiffLongitudeDegrees = $DiffLongitudeDegrees<br>");
    echo("DiffLongitudeRadians = $DiffLongitudeRadians<br>");
    echo("SinLatitude = $SinLatitude<br>");
    echo("SinLatitude2 = $SinLatitude2<br>");
    echo("SinLatitude4 = $SinLatitude4<br>");
    echo("SinLatitude6 = $SinLatitude6<br>");
    echo("E2 = $E2<br>");
    echo("E4 = $E4<br>");
    echo("E6 = $E6<br>");
    echo("A0 = $A0<br>");
    echo("A2 = $A2<br>");
    echo("A4 = $A4<br>");
    echo("A6 = $A6<br>");
        
    $MeridianDistanceTerm1 = $SemiMajorAxis * $A0 * $LatitudeRadians;
    $MeridianDistanceTerm2 = -$SemiMajorAxis * $A2 * $SinLatitude2;
    $MeridianDistanceTerm3 = $SemiMajorAxis * $A4 * $SinLatitude4;
    $MeridianDistanceTerm4 = -$SemiMajorAxis * $A6 * $SinLatitude6;
    $SumMeridianDistances = $MeridianDistanceTerm1 + $MeridianDistanceTerm2 + $MeridianDistanceTerm3 + $MeridianDistanceTerm4;
    $Rho = $SemiMajorAxis * (1 - $E2) / pow((1 - $E2 * pow($SinLatitude, 2)), 1.5);
    $Nu = $SemiMajorAxis / pow((1 - ($E2 * pow($SinLatitude, 2))), 0.5);
    $CosLatitude1 = cos($LatitudeRadians);
    $CosLatitude2 = pow($CosLatitude1 , 2);
    $CosLatitude3 = pow($CosLatitude1 , 3);
    $CosLatitude4 = pow($CosLatitude1 , 4);
    $CosLatitude5 = pow($CosLatitude1 , 5);
    $CosLatitude6 = pow($CosLatitude1 , 6);
    $CosLatitude7 = pow($CosLatitude1 , 7);
    $DiffLongitude1 = $DiffLongitudeRadians;
    $DiffLongitude2 = pow($DiffLongitude1 , 2);
    $DiffLongitude3 = pow($DiffLongitude1 , 3);
    $DiffLongitude4 = pow($DiffLongitude1 , 4);
    $DiffLongitude5 = pow($DiffLongitude1 , 5);
    $DiffLongitude6 = pow($DiffLongitude1 , 6);
    $DiffLongitude7 = pow($DiffLongitude1 , 7);
    $DiffLongitude8 = pow($DiffLongitude1 , 8);
    $TanLatitude1 = tan($LatitudeRadians);
    $TanLatitude2 = pow($TanLatitude1, 2);
    $TanLatitude4 = pow($TanLatitude1, 4);
    $TanLatitude6 = pow($TanLatitude1, 6);
    $Psi1 = $Nu / $Rho;
    $Psi2 = pow($Psi1, 2);
    $Psi3 = pow($Psi1, 3);
    $Psi4 = pow($Psi1, 4);

    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    echo("Flattening = $Flattening<br>");
    
    $EastingTerm1 = $Nu * $DiffLongitude1 * $CosLatitude1;
    $EastingTerm2 = $Nu * $DiffLongitude3 * $CosLatitude3 * ($Psi1 - $TanLatitude2) / 6;
    $EastingTerm3 = $Nu * $DiffLongitude5 * $CosLatitude5 * (4 * $Psi3 * (1 - 6 * $TanLatitude2) + $Psi2 * (1 + 8 * $TanLatitude2) - $Psi1 * (2 * $TanLatitude2) + $TanLatitude4) / 120;
    $EastingTerm4 = $Nu * $DiffLongitude7 * $CosLatitude7 * (61 - 479 *  $TanLatitude2 + 179 * $TanLatitude4 - $TanLatitude6) / 5400;

    echo("EastingTerm1 = $EastingTerm1<br>");
    echo("EastingTerm2 = $EastingTerm2<br>");
    echo("EastingTerm3 = $EastingTerm3<br>");
    echo("EastingTerm4 = $EastingTerm4<br>");
    
    $SumEasting = $EastingTerm1 + $EastingTerm2 + $EastingTerm3 + $EastingTerm4;
    $SumEastingK = $CentralScaleFactor * $SumEasting;

    echo("SumEasting = $SumEasting<br>");
    echo("SumEastingK = $SumEastingK<br>");
    
    $Easting = $FalseEasting+$SumEastingK;

    echo("Easting = $Easting<br>");
    
    $NorthingMeridianDistance = $SumMeridianDistances;
    $NorthingTerm1 = $Nu * $SinLatitude * $DiffLongitude2 * $CosLatitude1 / 2;
    $NorthingTerm2 = $Nu * $SinLatitude * $DiffLongitude4 * $CosLatitude3 * (4 * $Psi2 + $Psi1 - $TanLatitude2) / 24;
    $NorthingTerm3 = $Nu * $SinLatitude * $DiffLongitude6 * $CosLatitude5 * (8 * $Psi4 * (11 - 24 * $TanLatitude2) - 28 * $Psi3 * (1 - 6 * $TanLatitude2) + $Psi2 * (1 - 32 * $TanLatitude2) - $Psi1 * (2 * $TanLatitude2) + $TanLatitude4) / 720;
    $NorthingTerm4 =  $Nu * $SinLatitude * $DiffLongitude8 * $CosLatitude7 * (1385 - 3111 * $TanLatitude2 + 543 * $TanLatitude4 - $TanLatitude6) / 40320;

    echo("NorthingMeridianDistance = $NorthingMeridianDistance<br>");
    echo("NorthingTerm1 = $NorthingTerm1<br>");
    echo("NorthingTerm2 = $NorthingTerm2<br>");
    echo("NorthingTerm3 = $NorthingTerm3<br>");
    echo("NorthingTerm4 = $NorthingTerm4<br>");
    
    $SumNorthing = $NorthingMeridianDistance + $NorthingTerm1 + $NorthingTerm2 + $NorthingTerm3 + $NorthingTerm4;
    $SumNorthingK = $CentralScaleFactor * $SumNorthing;

    echo("SumNorthing = $SumNorthing<br>");
    echo("SumNorthingK = $SumNorthingK<br>");
    
    $Northing = $FalseNorthing + $SumNorthingK;

    echo("Northing = $Northing<br>");
    
    $GridConvergenceTerm1 = -$SinLatitude * $DiffLongitude1;
    $GridConvergenceTerm2 = -$SinLatitude * $DiffLongitude3 * $CosLatitude2 * (2 * $Psi2 - $Psi1) / 3;
    $GridConvergenceTerm3 = -$SinLatitude * $DiffLongitude5 * $CosLatitude4 * ($Psi4 * (11 - 24 * $TanLatitude2) - $Psi3 * (11 - 36 * $TanLatitude2) + 2 * $Psi2 * (1 - 7 * $TanLatitude2) + $Psi1 * $TanLatitude2) / 15;
    $GridConvergenceTerm4 = $SinLatitude * $DiffLongitude7 * $CosLatitude6 * (17 - 26 * $TanLatitude2 + 2 * $TanLatitude4) / 315;

    echo("GridConvergenceTerm1 = $GridConvergenceTerm1<br>");
    echo("GridConvergenceTerm2 = $GridConvergenceTerm2<br>");
    echo("GridConvergenceTerm3 = $GridConvergenceTerm3<br>");
    echo("GridConvergenceTerm4 = $GridConvergenceTerm4<br>");
    
    $GridConvergenceRadians = $GridConvergenceTerm1 + $GridConvergenceTerm2 + $GridConvergenceTerm3 + $GridConvergenceTerm4;
    $GridConvergenceDegrees = ($GridConvergenceRadians / PI()) * 180;;

    echo("GridConvergenceRadians = $GridConvergenceRadians<br>");
    echo("GridConvergenceDegrees = $GridConvergenceDegrees<br>");
    
    $PointScaleTerm1 = 1 + ($DiffLongitude2 * $CosLatitude2 * $Psi1) / 2;
    $PointScaleTerm2 = $DiffLongitude4 * $CosLatitude4 * (4 * $Psi3 * (1 - 6 * $TanLatitude2) + $Psi2 * (1 + 24 * $TanLatitude2) - 4 * $Psi1 * $TanLatitude2) / 24;
    $PointScaleTerm3 = $DiffLongitude6 * $CosLatitude6 * (61 - 148 * $TanLatitude2 + 16 * $TanLatitude4) / 720;
    $SumPointScale = $PointScaleTerm1 + $PointScaleTerm2 + $PointScaleTerm3;
    $PointScale = $CentralScaleFactor * $SumPointScale;

    echo("PointScaleTerm1 = $PointScaleTerm1<br>");
    echo("PointScaleTerm2 = $PointScaleTerm2<br>");
    echo("PointScaleTerm3 = $PointScaleTerm3<br>");
    echo("SumPointScale = $SumPointScale<br>");
    echo("PointScale = $PointScale<br>");
    
    $Point["Easting"] = $Easting;
    $Point["Northing"] = $Northing;
    $Point["Zone"] = $Zone;
    $Point["GridConvergence"] = $GridConvergenceDegrees;
    $Point["PointScale"] = $PointScale;

    return $Point;
}

/*
Zone values in Australia range from 49-56, most of my use is for zone 55.
For a rough guide to which zones relate to which areas see http://www.ga.gov.au/geodesy/datums/aboutdatums.jsp#WhatisaCoordinateSystem
and
http://www.ga.gov.au/image_cache/GA5111.gif
*/
function redfearnGridtoLL($Easting, $Northing, $Zone = 55, $TmDefinition = "GDA-MGA")
{
    switch ($TmDefinition) {
        case "GDA-MGA":
            $FalseEasting = 500000.0000;
            $FalseNorthing = 10000000.0000;
            $CentralScaleFactor = 0.9996;
            $ZoneWidthDegrees = 6;
            $LongitudeOfTheCentralMeridianOfZone1Degrees = -177;
            $EllipsoidDefinition = "GRS80";
            break;
        default:
            $TmDefinition = "GDA-MGA";
            $FalseEasting = 500000.0000;
            $FalseNorthing = 10000000.0000;
            $CentralScaleFactor = 0.9996;
            $ZoneWidthDegrees = 6;
            $LongitudeOfTheCentralMeridianOfZone1Degrees = -177;
            $EllipsoidDefinition = "GRS80";
    }

    switch ($EllipsoidDefinition) {
        case "GRS80":
            $SemiMajorAxis = 6378137.000;
            $InverseFlattening = 298.257222101000;
            break;
        default:
            $EllipsoidDefinition = "GRS80";
            $SemiMajorAxis = 6378137.000;
            $InverseFlattening = 298.257222101000;
    }

    $Flattening = 1 / $InverseFlattening;
    $SemiMinorAxis = $SemiMajorAxis * (1 - $Flattening);
    $Eccentricity = (2 * $Flattening) - ($Flattening * $Flattening);
    $n = ($SemiMajorAxis - $SemiMinorAxis) / ($SemiMajorAxis + $SemiMinorAxis);
    $n2 = pow($n, 2);
    $n3 = pow($n, 3);
    $n4 = pow($n, 4);
    $G = $SemiMajorAxis * (1 - $n) * (1 - $n2) * (1 + (9 * $n2) / 4 + (225 * $n4) / 64) * PI() / 180;
    $LongitudeOfWesternEdgeOfZoneZeroDegrees = $LongitudeOfTheCentralMeridianOfZone1Degrees - (1.5 * $ZoneWidthDegrees);
    $CentralMeridianOfZoneZeroDegrees = $LongitudeOfWesternEdgeOfZoneZeroDegrees + ($ZoneWidthDegrees / 2);

    $NewE = ($Easting - $FalseEasting);
    $NewEScaled = $NewE / $CentralScaleFactor;
    $NewN = ($Northing - $FalseNorthing);
    $NewNScaled = $NewN / $CentralScaleFactor;
    $Sigma = ($NewNScaled * PI()) / ($G * 180);
    $Sigma2 = 2 * $Sigma;
    $Sigma4 = 4 * $Sigma;
    $Sigma6 = 6 * $Sigma;
    $Sigma8 = 8 * $Sigma;

    $FootPointLatitudeTerm1 = $Sigma;
    $FootPointLatitudeTerm2 = ((3 * $n / 2) - (27 * $n3 / 32)) * sin($Sigma2);
    $FootPointLatitudeTerm3 = ((21 * $n2 / 16) - (55 * $n4 / 32)) * sin($Sigma4);
    $FootPointLatitudeTerm4 = (151 * $n3) * sin($Sigma6) / 96;
    $FootPointLatitudeTerm5 = 1097 * $n4 * sin($Sigma8) / 512;
    $FootPointLatitude = $FootPointLatitudeTerm1 + $FootPointLatitudeTerm2 + $FootPointLatitudeTerm3 + $FootPointLatitudeTerm4 + $FootPointLatitudeTerm5;

    $SinFootPointLatitude = sin($FootPointLatitude);
    $SecFootPointLatitude = 1 / cos($FootPointLatitude);

    $Rho = $SemiMajorAxis * (1 - $Eccentricity) / pow(1 - $Eccentricity * pow($SinFootPointLatitude, 2), 1.5);
    $Nu = $SemiMajorAxis / pow(1 - $Eccentricity * pow($SinFootPointLatitude, 2), 0.5);

    $x1 = $NewEScaled / $Nu;
    $x3 = pow($x1, 3);
    $x5 = pow($x1, 5);
    $x7 = pow($x1, 7);

    $t1 = tan($FootPointLatitude);
    $t2 = pow($t1, 2);
    $t4 = pow($t1, 4);
    $t6 = pow($t1, 6);

    $Psi1 = $Nu / $Rho;
    $Psi2 = pow($Psi1, 2);
    $Psi3 = pow($Psi1, 3);
    $Psi4 = pow($Psi1, 4);

    $LatitudeTerm1 = -(($t1 / ($CentralScaleFactor * $Rho)) * $x1 * $NewE / 2);
    $LatitudeTerm2 = ($t1 / ($CentralScaleFactor * $Rho)) * ($x3 * $NewE / 24) * (-4 * $Psi2 + 9 * $Psi1 * (1 - $t2) + 12 * $t2);
    $LatitudeTerm3 = -($t1 / ($CentralScaleFactor * $Rho)) * ($x5 * $NewE / 720) * (8 * $Psi4 * (11 - 24 * $t2) - 12 * $Psi3 * (21 - 71 * $t2) + 15 * $Psi2 * (15 - 98 * $t2 + 15 * $t4) + 180 * $Psi1 * (5 * $t2 - 3 * $t4) + 360 * $t4);
    $LatitudeTerm4 = ($t1 / ($CentralScaleFactor * $Rho)) * ($x7 * $NewE / 40320) * (1385 + 3633 * $t2 + 4095 * $t4 + 1575 * $t6);
    $LatitudeRadians = $FootPointLatitude + $LatitudeTerm1 + $LatitudeTerm2 + $LatitudeTerm3 + $LatitudeTerm4;
    $LatitudeDegrees = ($LatitudeRadians / PI()) * 180;

    $CentralMeridianDegrees = ($Zone * $ZoneWidthDegrees) + $LongitudeOfTheCentralMeridianOfZone1Degrees - $ZoneWidthDegrees;
    $CentralMeridianRadians = ($CentralMeridianDegrees / 180) * PI();
    $LongitudeTerm1 = $SecFootPointLatitude * $x1;
    $LongitudeTerm2 = -$SecFootPointLatitude * ($x3 / 6) * ($Psi1 + 2 * $t2);
    $LongitudeTerm3 = $SecFootPointLatitude * ($x5 / 120) * (-4 * $Psi3 * (1 - 6 * $t2) + $Psi2 * (9 - 68 * $t2) + 72 * $Psi1 * $t2 + 24 * $t4);
    $LongitudeTerm4 = -$SecFootPointLatitude * ($x7 / 5040) * (61 + 662 * $t2 + 1320 * $t4 + 720 * $t6);
    $LongitudeRadians = $CentralMeridianRadians + $LongitudeTerm1 + $LongitudeTerm2 + $LongitudeTerm3 + $LongitudeTerm4;
    $LongitudeDegrees = ($LongitudeRadians / PI()) * 180;

    $GridConvergenceTerm1 = -($x1 * $t1);
    $GridConvergenceTerm2 = ($t1 * $x3 / 3) * (-2 * $Psi2 + 3 * $Psi1 + $t2);
    $GridConvergenceTerm3 = -($t1 * $x5 / 15) * ($Psi4 * (11 - 24 * $t2) - 3 * $Psi3 * (8 - 23 * $t2) + 5 * $Psi2 * (3 - 14 * $t2) + 30 * $Psi1 * $t2 + 3 * $t4);
    $GridConvergenceTerm4 = ($t1 * $x7 / 315) * (17 + 77 * $t2 + 105 * $t4 + 45 * $t6);
    $GridConvergenceRadians = $GridConvergenceTerm1 + $GridConvergenceTerm2 + $GridConvergenceTerm3 + $GridConvergenceTerm4;
    $GridConvergenceDegrees = ($GridConvergenceRadians / PI()) * 180;

    $PointScaleFactor1 = pow($NewEScaled, 2) / ($Rho*$Nu);
    $PointScaleFactor2 = pow($PointScaleFactor1, 2);
    $PointScaleFactor3 = pow($PointScaleFactor1, 3);
    $PointScaleTerm1 = 1 + $PointScaleFactor1 / 2;
    $PointScaleTerm2 = ($PointScaleFactor2 / 24) * (4 * $Psi1 * (1 - 6 * $t2) - 3 * (1 - 16 * $t2) - 24 * $t2 / $Psi1);
    $PointScaleTerm3 = $PointScaleFactor3 / 720;
    $PointScale = $CentralScaleFactor * ($PointScaleTerm1 + $PointScaleTerm2 + $PointScaleTerm3);

    $Point["Latitude"] = $LatitudeDegrees;
    $Point["Longitude"] = $LongitudeDegrees;
    $Point["GridConvergence"] = $GridConvergenceDegrees;
    $Point["PointScale"] = $PointScale;

    return $Point;
}

/*
Zone values in Australia range from 49-56, most of my use is for zone 55.
For a rough guide to which zones relate to which areas see http://www.ga.gov.au/geodesy/datums/aboutdatums.jsp#WhatisaCoordinateSystem
and
http://www.ga.gov.au/image_cache/GA5111.gif
*/
function redfearnGridtoLLDebug($Easting, $Northing, $Zone = 55, $TmDefinition = "GDA-MGA")
{
    switch ($TmDefinition) {
        case "GDA-MGA":
            $FalseEasting = 500000.0000;
            $FalseNorthing = 10000000.0000;
            $CentralScaleFactor = 0.9996;
            $ZoneWidthDegrees = 6;
            $LongitudeOfTheCentralMeridianOfZone1Degrees = -177;
            $EllipsoidDefinition = "GRS80";
            break;
        default:
            $TmDefinition = "GDA-MGA";
            $FalseEasting = 500000.0000;
            $FalseNorthing = 10000000.0000;
            $CentralScaleFactor = 0.9996;
            $ZoneWidthDegrees = 6;
            $LongitudeOfTheCentralMeridianOfZone1Degrees = -177;
            $EllipsoidDefinition = "GRS80";
    }

    switch ($EllipsoidDefinition) {
        case "GRS80":
            $SemiMajorAxis = 6378137.000;
            $InverseFlattening = 298.257222101000;
            break;
        default:
            $EllipsoidDefinition = "GRS80";
            $SemiMajorAxis = 6378137.000;
            $InverseFlattening = 298.257222101000;
    }

    $Flattening = 1 / $InverseFlattening;
    $SemiMinorAxis = $SemiMajorAxis * (1 - $Flattening);
    $Eccentricity = (2 * $Flattening) - ($Flattening * $Flattening);
    $n = ($SemiMajorAxis - $SemiMinorAxis) / ($SemiMajorAxis + $SemiMinorAxis);
    $n2 = pow($n, 2);
    $n3 = pow($n, 3);
    $n4 = pow($n, 4);
    $G = $SemiMajorAxis * (1 - $n) * (1 - $n2) * (1 + (9 * $n2) / 4 + (225 * $n4) / 64) * PI() / 180;
    $LongitudeOfWesternEdgeOfZoneZeroDegrees = $LongitudeOfTheCentralMeridianOfZone1Degrees - (1.5 * $ZoneWidthDegrees);
    $CentralMeridianOfZoneZeroDegrees = $LongitudeOfWesternEdgeOfZoneZeroDegrees + ($ZoneWidthDegrees / 2);

	echo("Flattening = $Flattening<br>");
	echo("SemiMinorAxis = $SemiMinorAxis<br>");
	echo("Eccentricity = $Eccentricity<br>");
	echo("n = $n<br>");
	echo("n2 = $n2<br>");
	echo("n3 = $n3<br>");
	echo("n4 = $n4<br>");
	echo("G = $G<br>");
	echo("LongitudeOfWesternEdgeOfZoneZeroDegrees = $LongitudeOfWesternEdgeOfZoneZeroDegrees<br>");
	echo("CentralMeridianOfZoneZeroDegrees = $CentralMeridianOfZoneZeroDegrees<br>");

    $NewE = ($Easting - $FalseEasting);
    $NewEScaled = $NewE / $CentralScaleFactor;
    $NewN = ($Northing - $FalseNorthing);
    $NewNScaled = $NewN / $CentralScaleFactor;
    $Sigma = ($NewNScaled * PI()) / ($G * 180);
    $Sigma2 = 2 * $Sigma;
    $Sigma4 = 4 * $Sigma;
    $Sigma6 = 6 * $Sigma;
    $Sigma8 = 8 * $Sigma;

	echo("NewE = $NewE<br>");
	echo("NewEScaled = $NewEScaled<br>");
	echo("NewN = $NewN<br>");
	echo("NewNScaled = $NewNScaled<br>");
	echo("Sigma = $Sigma<br>");
	echo("Sigma2 = $Sigma2<br>");
	echo("Sigma4 = $Sigma4<br>");
	echo("Sigma6 = $Sigma6<br>");
	echo("Sigma8 = $Sigma8<br>");

    $FootPointLatitudeTerm1 = $Sigma;
    $FootPointLatitudeTerm2 = ((3 * $n / 2) - (27 * $n3 / 32)) * sin($Sigma2);
    $FootPointLatitudeTerm3 = ((21 * $n2 / 16) - (55 * $n4 / 32)) * sin($Sigma4);
    $FootPointLatitudeTerm4 = (151 * $n3) * sin($Sigma6) / 96;
    $FootPointLatitudeTerm5 = 1097 * $n4 * sin($Sigma8) / 512;
    $FootPointLatitude = $FootPointLatitudeTerm1 + $FootPointLatitudeTerm2 + $FootPointLatitudeTerm3 + $FootPointLatitudeTerm4 + $FootPointLatitudeTerm5;

	echo("FootPointLatitudeTerm1 = $FootPointLatitudeTerm1<br>");
	echo("FootPointLatitudeTerm2 = $FootPointLatitudeTerm2<br>");
	echo("FootPointLatitudeTerm3 = $FootPointLatitudeTerm3<br>");
	echo("FootPointLatitudeTerm4 = $FootPointLatitudeTerm4<br>");
	echo("FootPointLatitudeTerm5 = $FootPointLatitudeTerm5<br>");
	echo("FootPointLatitude = $FootPointLatitude<br>");
	
    $SinFootPointLatitude = sin($FootPointLatitude);
    $SecFootPointLatitude = 1 / cos($FootPointLatitude);

	echo("SinFootPointLatitude = $SinFootPointLatitude<br>");
	echo("SecFootPointLatitude = $SecFootPointLatitude<br>");

    $Rho = $SemiMajorAxis * (1 - $Eccentricity) / pow(1 - $Eccentricity * pow($SinFootPointLatitude, 2), 1.5);
    $Nu = $SemiMajorAxis / pow(1 - $Eccentricity * pow($SinFootPointLatitude, 2), 0.5);

	echo("Rho = $Rho<br>");
	echo("Nu = $Nu<br>");

    $x1 = $NewEScaled / $Nu;
    $x3 = pow($x1, 3);
    $x5 = pow($x1, 5);
    $x7 = pow($x1, 7);
	
	echo("x1 = $x1<br>");
	echo("x3 = $x3<br>");
	echo("x5 = $x5<br>");
	echo("x7 = $x7<br>");

    $t1 = tan($FootPointLatitude);
    $t2 = pow($t1, 2);
    $t4 = pow($t1, 4);
    $t6 = pow($t1, 6);

	echo("t1 = $t1<br>");
	echo("t2 = $t2<br>");
	echo("t4 = $t4<br>");
	echo("t6 = $t6<br>");

    $Psi1 = $Nu / $Rho;
    $Psi2 = pow($Psi1, 2);
    $Psi3 = pow($Psi1, 3);
    $Psi4 = pow($Psi1, 4);

	echo("Psi1 = $Psi1<br>");
	echo("Psi2 = $Psi2<br>");
	echo("Psi3 = $Psi3<br>");
	echo("Psi4 = $Psi4<br>");

    $LatitudeTerm1 = -(($t1 / ($CentralScaleFactor * $Rho)) * $x1 * $NewE / 2);
    $LatitudeTerm2 = ($t1 / ($CentralScaleFactor * $Rho)) * ($x3 * $NewE / 24) * (-4 * $Psi2 + 9 * $Psi1 * (1 - $t2) + 12 * $t2);
    $LatitudeTerm3 = -($t1 / ($CentralScaleFactor * $Rho)) * ($x5 * $NewE / 720) * (8 * $Psi4 * (11 - 24 * $t2) - 12 * $Psi3 * (21 - 71 * $t2) + 15 * $Psi2 * (15 - 98 * $t2 + 15 * $t4) + 180 * $Psi1 * (5 * $t2 - 3 * $t4) + 360 * $t4);
    $LatitudeTerm4 = ($t1 / ($CentralScaleFactor * $Rho)) * ($x7 * $NewE / 40320) * (1385 + 3633 * $t2 + 4095 * $t4 + 1575 * $t6);
    $LatitudeRadians = $FootPointLatitude + $LatitudeTerm1 + $LatitudeTerm2 + $LatitudeTerm3 + $LatitudeTerm4;
    $LatitudeDegrees = ($LatitudeRadians / PI()) * 180;

	echo("LatitudeTerm1 = $LatitudeTerm1<br>");
	echo("LatitudeTerm2 = $LatitudeTerm2<br>");
	echo("LatitudeTerm3 = $LatitudeTerm3<br>");
	echo("LatitudeTerm4 = $LatitudeTerm4<br>");
	echo("LatitudeRadians = $LatitudeRadians<br>");
	echo("LatitudeDegrees = $LatitudeDegrees<br>");
	
    $CentralMeridianDegrees = ($Zone * $ZoneWidthDegrees) + $LongitudeOfTheCentralMeridianOfZone1Degrees - $ZoneWidthDegrees;
    $CentralMeridianRadians = ($CentralMeridianDegrees / 180) * PI();
    $LongitudeTerm1 = $SecFootPointLatitude * $x1;
    $LongitudeTerm2 = -$SecFootPointLatitude * ($x3 / 6) * ($Psi1 + 2 * $t2);
    $LongitudeTerm3 = $SecFootPointLatitude * ($x5 / 120) * (-4 * $Psi3 * (1 - 6 * $t2) + $Psi2 * (9 - 68 * $t2) + 72 * $Psi1 * $t2 + 24 * $t4);
    $LongitudeTerm4 = -$SecFootPointLatitude * ($x7 / 5040) * (61 + 662 * $t2 + 1320 * $t4 + 720 * $t6);
    $LongitudeRadians = $CentralMeridianRadians + $LongitudeTerm1 + $LongitudeTerm2 + $LongitudeTerm3 + $LongitudeTerm4;
    $LongitudeDegrees = ($LongitudeRadians / PI()) * 180;

	echo("CentralMeridianDegrees = $CentralMeridianDegrees<br>");
	echo("CentralMeridianRadians = $CentralMeridianRadians<br>");
	echo("LongitudeTerm1 = $LongitudeTerm1<br>");
	echo("LongitudeTerm2 = $LongitudeTerm2<br>");
	echo("LongitudeTerm3 = $LongitudeTerm3<br>");
	echo("LongitudeTerm4 = $LongitudeTerm4<br>");
	echo("LongitudeRadians = $LongitudeRadians<br>");
	echo("LongitudeDegrees = $LongitudeDegrees<br>");
	
    $GridConvergenceTerm1 = -($x1 * $t1);
    $GridConvergenceTerm2 = ($t1 * $x3 / 3) * (-2 * $Psi2 + 3 * $Psi1 + $t2);
    $GridConvergenceTerm3 = -($t1 * $x5 / 15) * ($Psi4 * (11 - 24 * $t2) - 3 * $Psi3 * (8 - 23 * $t2) + 5 * $Psi2 * (3 - 14 * $t2) + 30 * $Psi1 * $t2 + 3 * $t4);
    $GridConvergenceTerm4 = ($t1 * $x7 / 315) * (17 + 77 * $t2 + 105 * $t4 + 45 * $t6);
    $GridConvergenceRadians = $GridConvergenceTerm1 + $GridConvergenceTerm2 + $GridConvergenceTerm3 + $GridConvergenceTerm4;
    $GridConvergenceDegrees = ($GridConvergenceRadians / PI()) * 180;

	echo("GridConvergenceTerm1 = $GridConvergenceTerm1<br>");
	echo("GridConvergenceTerm2 = $GridConvergenceTerm2<br>");
	echo("GridConvergenceTerm3 = $GridConvergenceTerm3<br>");
	echo("GridConvergenceTerm4 = $GridConvergenceTerm4<br>");
	echo("GridConvergenceRadians = $GridConvergenceRadians<br>");
	echo("GridConvergenceDegrees = $GridConvergenceDegrees<br>");
	
    $PointScaleFactor1 = pow($NewEScaled, 2) / ($Rho*$Nu);
    $PointScaleFactor2 = pow($PointScaleFactor1, 2);
    $PointScaleFactor3 = pow($PointScaleFactor1, 3);
    $PointScaleTerm1 = 1 + $PointScaleFactor1 / 2;
    $PointScaleTerm2 = ($PointScaleFactor2 / 24) * (4 * $Psi1 * (1 - 6 * $t2) - 3 * (1 - 16 * $t2) - 24 * $t2 / $Psi1);
    $PointScaleTerm3 = $PointScaleFactor3 / 720;
    $PointScale = $CentralScaleFactor * ($PointScaleTerm1 + $PointScaleTerm2 + $PointScaleTerm3);

	echo("PointScaleFactor1 = $PointScaleFactor1<br>");
	echo("PointScaleFactor2 = $PointScaleFactor2<br>");
	echo("PointScaleFactor3 = $PointScaleFactor3<br>");
	echo("PointScaleTerm1 = $PointScaleTerm1<br>");
	echo("PointScaleTerm2 = $PointScaleTerm2<br>");
	echo("PointScaleTerm3 = $PointScaleTerm3<br>");
	echo("PointScale = $PointScale<br>");
	
    $Point["Latitude"] = $LatitudeDegrees;
    $Point["Longitude"] = $LongitudeDegrees;
    $Point["GridConvergence"] = $GridConvergenceDegrees;
    $Point["PointScale"] = $PointScale;

    return $Point;
}
