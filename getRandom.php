<?php
$max = $_POST[ 'max' ];
print($max); 
$num = rand( 0, $max );
<<<<<<< HEAD

//sleep( 1 );
//print( $num  );


?>
=======
$dict[ 'valeurHazard'] = $num;
$dict[ 'nom'] = "toto";
sleep( 1 );
print( json_encode( $dict ) );
?>
>>>>>>> origin/revisionX
