<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $query  = "select livres.nom, livres.id from livres, emprunts where emprunts.ide=2 and livres.id=emprunts.idl and emprunts.dateFin is NULL;";
    //$uery  = "select livres.nom, auteurs.nom as auteur from livres, auteurs where livres.auteur=auteurs.id;";
    //print( $query );
    $res = query( $query );

    $tableauData = [];
    while ( $ligne = $res->fetch_assoc())
    {
        $ligne['nom']=utf8_encode($ligne['nom']);
        $tableauData[] = $ligne;
    } 
    //print_r($tableauData);
    print( json_encode( $tableauData ) );
    /*
    back -> 
    tableau brute (json_encode)-> text 
    -> front 
    -> (JSON.parse)
    -> tableau brute
    */

?>
