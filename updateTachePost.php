<?php
    require_once "ressources.php";
    require_once "fonctions.php";
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $description = $_POST['description']; 
    $priorite = $_POST['priorite'];
    $dateLimit = $_POST['dateLimit'];
    $query  = "update taches set titre='$titre', 
                                 description='$description', 
                                 priorite=$priorite, 
                                 dateLimit='$dateLimit'
               where id= $id;";
    //print( $query );
    query( $query );
?>
