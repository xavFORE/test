<?php

require "maLibGeo01AS.php";

// ********************************************************


$mesFormes =   [
    new Carre( 10, 15, 100 ),
    new Cercle( 10, 15, 100 ),
    new Rectangle( 11, 13, 100, 200 ),
    new Carre( 1, 5, 4096 ),
    new Cercle( 12, 125, 11 ),
    new Rectangle( 11, 14, 22, 66 )
];

foreach( $mesFormes as $forme )
    $forme->aff(); 

$totalSurface=0;
foreach( $mesFormes as $forme )
    $totalSurface += $forme->surface(); 

print( "la surface totale de toutes ces formes est $totalSurface<br>");



?>