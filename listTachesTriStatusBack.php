<?php
    require_once "ressources.php";
    require_once "fonctions.php";
    
    query2json( "select titre from taches ORDER BY status;" );
?>