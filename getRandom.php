<?php
$num = rand( 0, 64 );
$dict[ 'valeurHazard'] = $num;
$dict[ 'nom'] = "toto";
//sleep( 1 );
print( json_encode( $dict ) );
?>