<?php
require_once "ressources.php";
require_once "fonctions.php";


        $query  = "select * from livres;";
        //print( $query );
        $res = query( $query );
        $ligne = $res->fetch_assoc(); 
        $data = json_encode( $ligne );
        print( $data );
?>