<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once "fonctions.php";

    if ($_GET)
    {
        $nom = $_GET[ 'nom' ];
        $pw = $_GET[ 'pw' ];

        /*$pw = md5( $pw );*/

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        
        $query  = "select users.nom as nom, departement.departement_nom as dep 
        from users, departement
        where users.nom='$nom' and users.pw='$pw' and users.idDep=departement.departement_id ;";
        
        //print( $query );
        if ( $res = $mysqli->query( $query ))
        {
            if ( $res->num_rows == 0 )
                print( "<h3>bouhhh $nom</h3>");
            else
                while( $ligne = $res->fetch_assoc() )
                {
                    $nom = $ligne[ "nom"];
                    $dep = $ligne[ "dep"];
                    print( "<h3>bienvenue $nom</h3>($dep)");
                }
        }
        else
            print( "<h3>erreur </h3>");

        $mysqli->close();
    }
?>


<form action="#" method="get"> 
<input type="text" name='nom' placeholder="login">
<br>
<input type="text" name='pw' placeholder="pw">
<br>
<button type="submit">OK</button>
</form>
</body>
</html>