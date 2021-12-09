<?php
require_once "ressources.php";
require_once "fonctions.php";


    


        $query  = "select * from emprunteurs;";
        //print( $query );
        $res = query( $query );
        while ($ligne = $res->fetch_assoc()) {
                $nom = $ligne['nom'];
                $dateNaiss = $ligne['dateNaiss'];
                $tableau [] = $nom;
        }
        
         
        $data = json_encode( $tableau );
        print_r( $data );
?>

