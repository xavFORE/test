<?php
require_once "ressources.php";
require_once "fonctions.php";

        $query  = "select * from emprunteurs;";
        //print( $query );
        $res = query( $query );
        
        $tab = [];

        while ( $ligne = $res->fetch_assoc())
            $tab[] = $ligne['nom'];

        print( json_encode( $tab ) );
?>