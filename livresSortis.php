<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    query2json( "select livres.nom from  emprunts, livres where emprunts.idl=livres.id and emprunts.dateFin is NULL;
    " ); 
    
?>