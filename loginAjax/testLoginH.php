<?php
    $login       = $_POST[ 'login' ];
    $password       = $_POST[ 'pw' ];

    $resultat = "";
    if ( $login == "toto" && $password == "123")
        $resultat = "OK"; 
    else
        $resultat = "inconnu";
    print( $resultat ); 
?>