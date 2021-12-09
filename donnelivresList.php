<?php
require_once "ressources.php";
require_once "fonctions.php";

        $query  = "select * from livres;";
        //print( $query );
        $res = query( $query );

        $tab = [];
        while ( $ligne = $res->fetch_assoc())
        {
            $ligne['nom'] = utf8_encode($ligne[ 'nom']);
            $tab[] = $ligne;
        }
        print( json_encode( $tab ) );
?>