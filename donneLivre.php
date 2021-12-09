<?php
require_once "ressources.php";
require_once "fonctions.php";

        $query  = "select * from emprunteurs;";
        //print( $query );
        while($ligne>0)
        {
        $res = query( $query );
        $ligne = $res->fetch_assoc(); 
        $data = json_encode( $ligne );
        print( $data );
        }
?>