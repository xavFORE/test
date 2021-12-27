<?php
    require_once "ressources.php";
    require_once "fonctions.php";
    
    $id = $_POST['id'];
    
    $res = query( "select * from taches where id=$id;" ); 
    $tableauData = [];
    while ( $ligne = $res->fetch_assoc())
    {
        //$ligne[ 'titre' ] = utf8_encode( $ligne[ 'titre' ] );
        //$ligne[ 'description' ] = utf8_encode( $ligne[ 'description' ] );
        $tableauData[] = $ligne;
    } 
    
    print( json_encode( $tableauData ) );
   // print_r( $tableauData );
?>