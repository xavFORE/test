<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription emprunteur</title>
</head>
<body>
<?php

require_once "ressources.php";
require_once "fonctions.php";

    if ($_GET)
    {
        $nom            = $_GET[ 'nom' ];
        $pw             = $_GET[ 'pw' ];
        $dateNaiss      = $_GET[ 'dateNaiss' ];
        $civilite       = $_GET[ 'civils' ];

        //$pw = md5( $pw );

        $mysqli = new mysqli($servername, $username, $password, $dbname);
        //insert into users ( nom, pw, idDep ) values( "Zorro", "zora", 22 );

        // insert into emprunteurs ( nom, pw, dateNaiss, civil ) values ( "Zorro", "123", '1955-07-14', 2 );
        $query  = "insert into emprunteurs ( nom, pw, dateNaiss, civil ) values ( '$nom', '$pw', '$dateNaiss', $civilite );";
        //print( $query );
        if ( $mysqli->query( $query ) )
            print( "<h3>$nom enregistré</h3>");
        else
            print( "<h3>erreur d'enregistrement</h3>");
        $mysqli->close();
    }
?>


<form action="#" method="get">

<?php comboBox( "civils" ); ?>    
<input type="text" name='nom' placeholder="ton nom">
<br>
<input type="text" name='pw' placeholder="ton pw">
<br>
<input type="date" name='dateNaiss'>

<br>
<button type="submit">OK</button>
</form>
</body>
</html>