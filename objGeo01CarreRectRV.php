<?php

require "maLibGeoRV.php";

// ********************************************************

// Carre( x, y, cote );
$k1 = new Carre( 10, 15, 100 );
// Rectangle( x, y, largeur, longueur );
$r1 = new Rectangle( 11, 13, 100, 200 );

$k1->aff();
//je suis un carré en (12,23) de coté 10

$r1->aff();
//je suis un rectangle en (11,13) de largeur 100, de hauteur 200

?>