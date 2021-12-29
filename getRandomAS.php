<?php
$max = $_POST[ 'max' ];

$num = rand( 0, $max );
$dict[ 'valeurHazard'] = $num;
//sleep( 1 );
print( json_encode( $num ) );
?>