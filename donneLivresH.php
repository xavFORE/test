<?php
require_once "ressources.php";
require_once "fonctions.php";


        $query  = "select * from livres;";
        //print( $query );
        $res = query( $query );
        $tab=[];

        while ($ligne = $res->fetch_assoc())
        {
           $ligne[ 'nom'] = utf8_encode( $ligne[ 'nom']);
           $tab[]=$ligne;
        } 
        $ligne=$tab[0];
        $nom=$ligne["nom"];
        $dict["list"]=$tab;
        $dict["nom"]=$nom;
        //print_r( $dict);
        $data = json_encode( $dict );
        print( $data );
?>