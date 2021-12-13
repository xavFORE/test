<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    query( "update livres set absent=0;");
    query( "update 
        emprunts, livres 
    set 
        livres.absent=1
    where 
        livres.id = emprunts.idl and emprunts.dateFin is NULL;");

    query2json( "select id, nom from livres where absent=0;" ); 
    
?>