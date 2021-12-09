<?php
require_once "ressources.php";
require_once "fonctions.php";


        $query  = "select * from livres;";
        //print( $query );
        $res = query( $query );
        
        //print_r($res );

        $tab = [];
        while ( $ligne = $res->fetch_assoc())
            $tab[] = $ligne;

        
        

        print( json_encode( $tab ) );
?>