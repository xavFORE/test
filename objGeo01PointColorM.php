<?php

require "maLibGeoM.php";

// ********************************************************

$p1 = new PointColor( 10, 15, "red" );
$p2 = new Point( 1, 15 );

$p1->aff();
$p1->deplace( 10, 10);
$p1->aff();
$p2->aff();
print( "<br>");

$c1 = new Cercle( 12, 23, 10 );
$c1->aff(); 

// (10, 15)red          mode normal
// (10, 15,red)         expert level


?>