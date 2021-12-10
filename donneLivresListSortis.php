<?php
require_once "ressources.php";
require_once "fonctions.php";

        $query  = "select livres.nom, livres.id 
        from livres, emprunts
        where livres.id=emprunts.idl and emprunts.dateFin is NULL;";
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