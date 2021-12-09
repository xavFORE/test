<?php
header('Content-Type: application/json; charset=utf-8');
require_once "ressources.php";
require_once "fonctions.php";

    
        $query  = "select * from livres;"; 
        $res = query( $query );
        //print_r( $res );
        $tab =[];
        while( $ligne = $res->fetch_assoc())
        {
            $ligne[ 'nom'] = utf8_encode( $ligne[ 'nom'] );
            $tab[] = $ligne;
        } 
        //print_r( $tab );
        $data = json_encode( $tab );
        print( $data );
?>