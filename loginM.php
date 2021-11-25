<?php
    require_once "ressources.php";

    if ($_GET)
    {
        $nom = $_GET[ "nom" ];
        $pw  = $_GET[ "pw" ];

        $mysqli = new mysqli($servername, $username, $password, $dbname);

        if ($mysqli -> connect_error) {
            die("Failed to connect to MySQL : " . $mysqli -> connect_error);
            exit();
        }
    
        $query = "SELECT nom FROM users";
        $resultat = $mysqli->query($query);

        $ligne = $resultat->fetch_assoc();

        foreach( $ligne as $key => $values )
        {
            if($nom == $values)
                print("Ok $nom tu es bien dans la DB !");
            else
                print("Qui es tu $nom ?");
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
    <title>Document</title>
</head>
<body>
    
<form action="#" method="GET">
    <input type="text" placeholder="saisir login" name="nom">
    <br>
    <input type="password" placeholder="saisir PW" name="pw">
    <br>
    <button type="submit">CONNECT</button>
</form>

</body>
</html>