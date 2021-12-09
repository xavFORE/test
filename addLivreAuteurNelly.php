<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_GET[ 'titre'];
    
    $auteur = $_GET[ 'auteur'];
    // je regare si il est dans la tables des auteurs

    $query = "select * from livres WHERE auteur='$auteur';"
    $res =  query( $query );

    if ($res->num_rows == 0 )
    {
       // si oui -> je récupère son ID
       $query = "insert into livres ( auteur ) values ( '$auteur' );";
       query( $query );

    }
    else
    {
        // si non -> je l'enregistre dans la table et je récupère son IDe...
        
    }
   

    $query  = "insert into livres ( nom, auteur ) values ('$titre', $id );";
    //print( $query );
    query( $query );
?>