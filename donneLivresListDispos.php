<?php
require_once "ressources.php";
require_once "fonctions.php";

        $query  = "select nom from livres where absent=0;";
        // print( $query );
        $res = query( $query );

        $tab = [];
        while ( $ligne = $res->fetch_assoc())
        {
            // $ligne['nom'] = utf8_encode($ligne[ 'nom']);
            $tab[] = $ligne['nom'];
        }
        print( json_encode( $tab ) );
?>