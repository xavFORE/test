<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_GET[ 'titre'];
    
    $auteur = $_GET[ 'auteur'];
    // je regare si il est dans la tables des auteurs
    // si oui -> je récupère son ID
    // si non -> je l'enregistre dans la table et je récupère son ID




    $query  = "insert into livres ( nom, auteur ) values ('$titre', $id );";
    //print( $query );
    query( $query );
?>