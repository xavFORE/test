<?php
require_once "ressources.php";
require_once "fonctions.php";


        $query  = "select * from emprunteurs;";
        //print( $query );
        $res = query( $query );
        
        //print_r($res );

        $tab = [];
        while ( $ligne = $res->fetch_assoc())
            $tab[] = $ligne;

        $ligne = $tab[0];
        $nom        = $ligne[ 'nom' ];
        $dateNaiss  = $ligne[ 'dateNaiss' ];
        

        $dict[ 'list' ] = $tab;
        $dict[ 'nom' ] = $nom;
        $dict[ 'dateNaiss' ] = $dateNaiss;
        

        print( json_encode( $dict ) );
?>