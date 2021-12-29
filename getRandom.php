<?php
$max = $_POST[ 'max' ];

$num = rand( 0, $max );
$dict[ 'valeurHazard'] = $num;
$dict[ 'nom'] = "toto";
sleep( 1 );
print( json_encode( $dict ) );
?>