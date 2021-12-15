<?php
    require_once "ressources.php";
    require_once "fonctions.php";

<<<<<<< HEAD
    $titre = $_POST[ 'titre'];
    $auteur = $_POST[ 'auteur'];
    $genre = $_POST[ 'genre'];
    $query  = "insert into livres ( nom, auteur, genre ) values ('$titre',$auteur,$genre);";
    //print( $query );
=======
    $titre      = $_POST[ 'titre'];
    $idAuteur   = $_POST[ 'idAuteur'];
    $idGenre    = $_POST[ 'idGenre'];
    
    $query  = "insert into livres ( nom, auteur, genre ) values ('$titre', $idAuteur, $idGenre);";
    
    print( $query );

>>>>>>> origin/ajaxX
    query( $query );
?>