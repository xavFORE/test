<?php
require_once "ressources.php";
require_once "fonctions.php";

        $titre = $_GET['titre'];
        $query  = "insert into livres (nom) values ('$titre')";
        //print( $query );
        $res = query( $query );
    
        
?>