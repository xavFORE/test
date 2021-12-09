<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_GET[ 'titre'];
    $auteur = $_GET[ 'auteur'];

    $query  = "select * from auteurs;";
    $res = query( $query );

    while($ligne = $res->fetch_assoc())
    {
        if($ligne['nom'] == $nomAuteur)
        {
            $query  = "select id from auteurs where nom='$nomAuteur';";
            $res = query( $query );
            print($res);
        }
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