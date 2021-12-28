<?php

$compteur= $_GET['compteur'];

$numHaz = rand( 0,$compteur );
//print($compteur); 
$dict['numHaz']=$numHaz;
print( json_encode( $dict ) );

?>
