<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titreLivre = $_GET['titre'];
    $nomAuteur = $_GET['auteur'];

    $query  = "select * from auteurs;";
    $res = query( $query );
    $ligne = $res->fetch_assoc();

    if($ligne['nom'] == $nomAuteur)
    {
        $query  = "insert into auteurs (nom) values ('$nomAuteur');";
        $res = query( $query );
        $ligne = $res->fetch_assoc();
        $query = "insert into livres (nom, auteur) values ('$nomAuteur');";
    }
        $query  = "insert into livres (nom, auteur) values ('$titreLivre', '$nomAuteur');";
        //print( $query );

    if($res = query( $query ))
        print( $titreLivre.' de '.$nomAuteur.' enregistré' );
    else
        print('erreur');
?>