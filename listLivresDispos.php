<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    query( "update livres set absent=0;");

    query( "update 
        emprunts, livres 
    set 
        livres.absent=1
    where 
        livres.id = emprunts.idl and emprunts.dateFin is NULL;");

    comboBox("select id, nom from livres where absent=0;" ); 

    $tableauData = [];
    while ( $ligne = $res->fetch_assoc())
    {
        $ligne['nom']  = utf8_encode($ligne['nom']);
        $tableauData[] = $ligne;
    } 
   // print_r($tableauData);
    print( json_encode( $tableauData ) );
  
?>