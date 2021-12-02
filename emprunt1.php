<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emprunt1</title>
</head>
<body>
<?php

require_once "ressources.php";
require_once "fonctions.php";

    if ($_GET)
    {
        $ide          = $_GET[ 'emprunteurs' ];
        $idl          = $_GET[ 'livres' ];
        
       

        //$pw = md5( $pw );

        $mysqli = new mysqli($servername, $username, $password, $database);
        //insert into users ( nom, pw, idDep ) values( "Zorro", "zora", 22 );

        // insert into emprunteurs ( nom, pw, dateNaiss, civil ) values ( "Zorro", "123", '1955-07-14', 2 );
        $query  = "insert into emprunts ( ide, idl, dateDeb) values ($ide, $idl, now());";
        //print( $query );
        if ( $mysqli->query( $query ) )
            print( "<h3> enregistré</h3>");
        else
            print( "<h3>erreur d'enregistrement</h3>");
        $mysqli->close();
    }
?>


<form action="#" method="get">

<?php   comboBox( "emprunteurs"); 
        comboBox( "livres", "select livres.nom as nom,
                                    livres.id  as id 
                             from   emprunts,
                                    emprunteurs, 
                                    livres
                             where  emprunts.ide = emprunteurs.id and
                                    emprunts.idl = livres.id and 
                                    emprunts.dateFin is not null;");  



?>    


<br>
<button type="submit">OK</button>
</form>
</body>
</html>