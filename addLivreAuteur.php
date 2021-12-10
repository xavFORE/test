<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_GET[ 'titre'];
    $auteur = $_GET[ 'auteur'];


    $query = "select id from auteurs where nom='$auteur';";
    $res = query( $query );
    if ( $res->num_rows == 0 )
    {
        $query = "insert into auteurs (nom) values ('$auteur');";
        query( $query );

        $query = "select id from auteurs where nom='$auteur';";
        //print( $query );

        $res = query( $query );
        //print_r( $res);
    }
    //print_r( $res);
    $ligne = $res->fetch_assoc();
    $id = $ligne['id'];


    // je regare si il est dans la tables des auteurs
    // si oui -> je récupère son ID
    // si non -> je l'enregistre dans la table et je récupère son ID



    $query  = "insert into livres ( nom, auteur ) values ('$titre', $id );";
    //print( $query );
    query( $query );
?>