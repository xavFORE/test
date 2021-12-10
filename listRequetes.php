<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $varRecuperation = $_GET["requete"];
    //print( $query );
    $res = query( $varRecuperation );

    $tableauData = [];
    while ( $ligne = $res->fetch_assoc())
    {
        $ligne['nom'] = utf8_encode ($ligne['nom']);
        $tableauData[] = $ligne;
    } 
    print( json_encode( $tableauData ) );
    /*
    back -> 
    tableau brute (json_encode)-> text 
    -> front 
    -> (JSON.parse)
    -> tableau brute
    */
?>