<?php
require_once "ressources.php";
require_once "fonctions.php";
        $nom=$_GET['titre'];
        $query  = "insert into livres (nom)values('$nom');";
        //print( $query );
         query( $query );

?>        

