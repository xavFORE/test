<?php


    $val1       = $_POST[ 'v1' ];
    $val2       = $_POST[ 'v2' ];
    $operator   = $_POST[ 'op' ];


    
   /* 
    $val1       = '12';
    $val2       = '0';
    $operator   = "div";    */
    
    //print( "$val1  $operator  $val2" );
    $resultat = 0;
    if ( $operator   == "add" )
        $resultat = $val1 + $val2; 
    elseif ( $operator   == "sous" )
        $resultat = $val1 - $val2;    
    elseif ( $operator == "mult" )
        $resultat = $val1 * $val2;
    elseif ( $operator == "div"  )
    {
        if ($val2 != 0) {
            $resultat = $val1 / $val2;
        } else {
            $resultat = "divison impossible";
        }
    }
    else
        $resultat = "opérateur non valide.";

     print( $resultat );
