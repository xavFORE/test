<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    //$query  = "select * from livres;";
    $query  = "select livres.nom, auteurs.nom as auteur from livres, auteurs where livres.auteur=auteurs.id;";
    //print( $query );
    $res = query( $query );

    $tableauData = [];
    while ( $ligne = $res->fetch_assoc())
    {
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




