<?php
    $val1       = $_POST[ 'v1' ];
    $val2       = $_POST[ 'v2' ];
    
    /*
    $val1       = '12';
    $val2       = '5';
    $operator   = "+";
    */
    //print( "$val1  $operator  $val2" );
    $resultat = 0;
    if ( $login == "toto" && $pw == "123"  )
        $resultat = "OK"; 
    else
        $resultat = "inconnu";
    print( $resultat ); 
?>