<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_GET[ 'titre'];
    
    $auteur = $_GET[ 'auteur'];
    // je regare si il est dans la tables des auteurs
    // si oui -> je récupère son ID
    // si non -> je l'enregistre dans la table et je récupère son ID
    if ($_GET)
    {
    $query = "select livres.auteur from livres, auteurs where $auteur=auteurs.id;"; 
    $res=query( $query );
    if ($res->num_rows == 0){ 
    $query ="insert into livres ( nom, auteur ) values ('$titre', $auteur );";
    }
    else {
        "insert into livres ( nom, auteur ) values ('$titre', $auteur );";
    }
    query( $query );
    }
  
    print( $query );
    
?>