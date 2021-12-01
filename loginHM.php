<?php
session_start();
require_once "ressources.php";
require_once "fonctions.php";

    if ($_GET)
    {
        $nom = $_GET[ 'nom' ];
        $pw = $_GET['pw'];
        $_SESSION['nom_client'] = $nom;

        $mysqli = new mysqli($servername, $username, $password, $database);

        $query  = "select * from emprunteurs where nom='$nom' and pw='$pw';";
        //print( $query );
        $res = $mysqli->query( $query );

        if ($res->num_rows == 0)
            print("<h3>circulez y'a rien à voir</h3>");
        else
        {
            $ligne = $res->fetch_assoc();
            $_SESSION['id_client'] = $ligne['id'];
            header("location: emprunt1HM.php");
        }

        $mysqli->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<form action="#" method="get">
<input type="text" placeholder="nom" name="nom">
<input type="password" placeholder="mot de passe" name="pw">
<br>
<button type="submit">OK</button>
</form>
</body>
</html>