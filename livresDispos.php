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
    

    query( "update livres set absent=0;");
    query( "update 
        emprunts, livres 
    set 
        livres.absent=1
    where 
        livres.id = emprunts.idl and emprunts.dateFin is NULL;");

    query2json( "select id, nom from livres where absent=0;" ); 
    
?>

