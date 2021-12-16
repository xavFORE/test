<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    

    $titre = $_POST['titre'];
    $description = $_POST['description']; 
    $priorite = $_POST['priorite'];
    $dateLimit = $_POST['dateLimit'];
    $query  = "insert into taches ( titre, description, priorite,dateCreation, dateLimit ) 
    values( '$titre', '$description', $priorite, now(),  '$dateLimit' );";
    //print( $query );
    query( $query );
?>