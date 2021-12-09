<?php
require_once "ressources.php";
require_once "fonctions.php";


        $query  = "select * from emprunteurs;";
        //print( $query );
        $res = query( $query );
        $ligne = $res->fetch_assoc(); 
        $nom= $ligne['nom']; 
        $datedeNaiss= $ligne['dateNaiss']; 
        print( $nom."<br>". $datedeNaiss);
      
?>