<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_GET[ 'titre'];
    $auteur = $_GET[ 'auteur'];

    $id=0;
    $query  = "select id from auteurs where nom='$auteur';";
    $res = query( $query );

    if ( $res->num_rows>0)
    {
        $id = $res->fetch_assoc()['id'];
        $query  = "insert into livres (nom, auteur) values ('$titre', $id);";
        $res = query( $query );
        print("$titre de $auteur à bien été enregistré");
    }
    else
    {
        $query  = "insert into auteurs ( nom ) values ('$auteur');";
        $res = query( $query );
        $id=0;
        $query  = "select id from auteurs where nom='$auteur';";
        $res = query( $query );
        $id = $res->fetch_assoc()['id'];
        $query  = "insert into livres (nom, auteur) values ('$titre', $id);";
        $res = query( $query );
        print("$titre de $auteur à bien été enregistré");
    }
    
    // else
    //     $query  = "insert into livres (nom, auteur) values ('$titreLivre', '$nomAuteur');";
    //     //print( $query );

    // if($res = query( $query ))
    //     print( $titreLivre.' de '.$nomAuteur.' enregistré' );
    // else
    //     print('erreur');

    // je regare si il est dans la tables des auteurs
    // si oui -> je récupère son ID
    // si non -> je l'enregistre dans la table et je récupère son ID

    // $query  = "insert into livres ( nom, auteur ) values ('$titre', $id );";
    // //print( $query );
    // query( $query );
?>