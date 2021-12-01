<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livres</title>
</head>
<body>
<?php

require_once "ressources.php";
require_once "fonctions.php";

    if ($_GET)
    {
        $nom            = $_GET[ 'nom' ];
        $auteur         = $_GET[ 'auteur' ];
       

        //$pw = md5( $pw );

        $mysqli = new mysqli($servername, $username, $password, $database);
        //insert into users ( nom, pw, idDep ) values( "Zorro", "zora", 22 );

        // insert into emprunteurs ( nom, pw, dateNaiss, civil ) values ( "Zorro", "123", '1955-07-14', 2 );
        $query  = "insert into livres ( nom, auteur ) values ( '$nom', '$auteur'  );";
        //print( $query );
        if ( $mysqli->query( $query ) )
            print( "<h3>$nom enregistré</h3>");
        else
            print( "<h3>erreur d'enregistrement</h3>");
        $mysqli->close();
    }
?>


<form action="#" method="get">
    
<input type="text" name='nom' placeholder="livre">
<br>
<input type="text" name='auteur' placeholder="auteur">
<br>


<br>
<button type="submit">OK</button>
</form>
</body>
</html>