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

    if ($_POST)
    {
        $nom = $_POST[ 'nom' ];
        $pw = $_POST[ 'pw' ];

        $pw = md5( $pw );

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        $query  = "select * from users inner join departement on users.idDep = departement.departement_id where nom='$nom' and pwhash='$pw';";
        //print( $query );
        $res = $mysqli->query( $query );
        if ( $res->num_rows == 0 )
        {
            print( "<h3>circulez y'a rien à voir</h3>");            
        }
        else
        {
            $ligne = $res->fetch_assoc();
            $nom = $ligne[ "nom"];
            $dpt = $ligne['departement_nom'];
            print( "<h3>bienvenue $nom (".utf8_encode($dpt).")</h3>");
        }
        $mysqli->close();
    }
?>


<form action="#" method="POST"> 
<input type="text" name='nom' placeholder="login">
<br>
<input type="text" name='pw' placeholder="pw">
<br>
<button type="submit">OK</button>
</form>
</body>
</html>