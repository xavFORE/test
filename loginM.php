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

        $pw = md5( $pw );
        $query = "SELECT * FROM users WHERE nom='".$nom."' AND pwhash='".$pw."';";
        $resultat = $mysqli->query($query);

        if ( $resultat->num_rows > 0 )
        {
            print( "login valide<br>");
            $ligne = $resultat->fetch_assoc();
            $id = $ligne[ 'id' ];
            $nom = $ligne[ 'nom' ];
            $age = $ligne['age'];
            print( "bonjour $nom, tu as $age ans et ton ID est $id<br>");
        }
        else
            print( "login invalide<br>");

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