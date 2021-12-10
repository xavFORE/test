<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $query  = "select * from livres;";
    //print( $query );
    $res = query( $query );

    $tableauData = [];
    while ( $ligne = $res->fetch_assoc())
    {
        $ligne['nom'] = utf8_encode ($ligne['nom']);
        $tableauData[] = $ligne;
    } 
    //print_r($tableauData)
    print( json_encode( $tableauData ) );
    /*
    back -> 
    tableau brute (json_encode)-> text 
    -> front 
    -> (JSON.parse)
    -> tableau brute
    */
?>