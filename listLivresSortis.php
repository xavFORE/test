<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $query  = "
    select nom from livres where absent='1';";
    //print( $query );
    $res = query( $query );

    $tableauData = [];
    while ( $ligne = $res->fetch_assoc())
    {
        $ligne['nom']  = utf8_encode($ligne['nom']);
        $tableauData[] = $ligne;
    } 
   // print_r($tableauData);
    print( json_encode( $tableauData ) );
  
?>