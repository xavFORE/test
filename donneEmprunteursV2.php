<?php
require_once "ressources.php";
require_once "fonctions.php";

    $requete = $_GET['requete'];

    // $query  = "select * from emprunteurs;";
    // print( $query );
    if($requete == 'select * from emprunteurs;' || $requete == 'select * from livres;' || $requete == 'select livres.nom, livres.id from livres, emprunts where livres.id=emprunts.idl and emprunts.dateFin is NULL;' || $requete == 'select nom from livres where absent=0;')
    {
        $res = query( $requete );
        
        $tab = [];

        while ( $ligne = $res->fetch_assoc())
            $tab[] = $ligne['nom'];

        print( json_encode( $tab ) );
    }
    else
        print(json_encode("erreur !!"));
?>