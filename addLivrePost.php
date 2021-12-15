<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_POST[ 'titre'];

    $ida = $_POST[ 'idAuteur'];
    $idg = $_POST[ 'idGenre'];



    $query  = "insert into livres ( nom, auteur, genre ) values ('$titre', $ida, $idg);";
    print( $query );
    query( $query );
?>