<?php
    require_once "ressources.php";
    require_once "fonctions.php";

<<<<<<< HEAD
    $query  = "select nom from livres;";
    //print( $query );
    $res = query( $query );

    $tableauData = [];
    while ( $ligne = $res->fetch_assoc())
    {  $ligne['nom'] = utf8_encode($ligne['nom']);
        $tableauLivres[] = $ligne;
    } 
    //print_r($tableauLivres);
    print( json_encode( $tableauLivres ) );
    /*
    back -> 
    tableau brute (json_encode)-> text 
    -> front 
    -> (JSON.parse)
    -> tableau brute
    */
=======
    query2json( "select * from livres;" ); 
>>>>>>> origin/biblioX
?>