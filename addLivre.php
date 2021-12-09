<?php
    require_once "ressources.php";
    require_once "fonctions.php";

<<<<<<< HEAD

        $titre =$_GET["titre"];
        $query  = "insert into livres (nom) values('$titre');";
        //print( $query );
        query( $query );

=======
    $titre = $_GET[ 'titre'];
    $query  = "insert into livres ( nom ) values ('$titre');";
    //print( $query );
    query( $query );
>>>>>>> origin/biblioX
?>