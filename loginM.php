<?php
    require_once "ressources.php";

    if ( $_POST )
    {
        $nom = $_POST[ "nom" ];
        $pw  = $_POST[ "pw" ];

        $mysqli = new mysqli($servername, $username, $password, $dbname);

        if ($mysqli -> connect_error) {
            die("Failed to connect to MySQL : " . $mysqli -> connect_error);
            exit();
        }

        $query = "SELECT pwhash FROM users WHERE nom='".$nom."' AND pw='".$pw."';";
        $resultat = $mysqli->query($query);

        while($ligne = $resultat->fetch_assoc())
        {
            print_r("ligne : ".$ligne['pwhash']."<br>");
        }

        /*if($ligne["pwhash"]=='aa36dc6e81e2ac7ad03e12fedcb6a2c0')
            print("Ok $nom tu es bien dans la DB !");
        
        else
            print("Qui es tu $nom ?");*/

        /*if($nom == $ligne["nom"] && $pw == $ligne["pw"])
            print("Ok $nom tu es bien dans la DB !");
        
        else
            print("Qui es tu $nom ?");*/

        $mysqli->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="#" method="POST">
    <input type="text" placeholder="saisir login" name="nom">
    <br>
    <input type="password" placeholder="saisir PW" name="pw">
    <br>
    <button type="submit">CONNECT</button>
</form>

</body>
</html>