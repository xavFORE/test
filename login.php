<?php
session_start();
//header( "location: emprunt.php");
require_once "ressources.php";

if ($_GET) {
    $nom                = $_GET['nom'];
    $pw                 = $_GET['pw'];
    $_SESSION['nom_client'] = $nom;
    $_SESSION['pw_client'] = $pw;
    //$pw = md5( $pw );


    $mysqli = new mysqli($servername, $username, $password, $database);
    //emprunteur
    $query  = "select * from emprunteurs where nom='$nom' and pw='$pw';";
    //print( $query );
    $res = $mysqli->query($query);
    if ($res->num_rows == 0) {
        print("<h3>circulez y'a rien à voir</h3>");
    } else {
        header("location: emprunt1.php");
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
    <title>inscription emprumteur</title>
</head>

<body>
    <form action="#" method="get">


        <input type="text" name='nom' placeholder="ton nom">
        <br>
        <input type="text" name='pw' placeholder="ton pw">

        <br>
        <button type="submit">OK</button>
    </form>
</body>

</html>