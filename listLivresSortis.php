<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $query  = "select nom from livres where absent=1;";
    //print( $query );
    $res = query( $query );

    $tableauLivresSortis = [];
    while ( $ligne = $res->fetch_assoc())
    {  $ligne['nom'] = utf8_encode($ligne['nom']);
        $tableauLivresSortis[] = $ligne;
    } 
    //print_r($tableauLivresSortis);
    print( json_encode( $tableauLivresSortis ) );
    /*
    back -> 
    tableau brute (json_encode)-> text 
    -> front 
    -> (JSON.parse)
    -> tableau brute
    */
    ?>