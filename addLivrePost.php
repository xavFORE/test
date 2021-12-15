<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre      = $_POST[ 'titre'];
    $idAuteur   = $_POST[ 'idAuteur'];
    $idGenre    = $_POST[ 'idGenre'];
    
    $query  = "insert into livres ( nom, auteur, genre ) values ('$titre', $idAuteur, $idGenre);";
    
    print( $query );

    query( $query );
?>