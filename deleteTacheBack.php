<?php
    require_once "ressources.php";
    require_once "fonctions.php";
    
    $idTache = $_POST['idTache'];

    query( "update taches set status=0 where id=$idTache;" );
?>
