<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprunt</title>
</head>
<body>
<?php

require_once "ressources.php";
require_once "fonctions.php";

    if ($_GET)
    {
        $idEmprunteur = $_GET[ 'emprunteurs' ];
        $idLivre = $_GET['livres'];

        $mysqli = new mysqli($servername, $username, $password, $database);

        $query  = "insert into emprunts (ide,idl,dateDeb,dateFin) values ($idEmprunteur,$idLivre,DATE(NOW()),NULL );";
        //print( $query );
        if ( $mysqli->query( $query ) )
            print( "<h3>Votre emprunt a bien été pris en compte.</h3>");
        else
            print( "<h3>erreur</h3>");
        $mysqli->close();
    }
?>


<form action="#" method="get">
<?php
comboBox( "emprunteurs" );
comboBox( "livres" );
?>
<br>
<button type="submit">OK</button>
</form>
</body>
</html>