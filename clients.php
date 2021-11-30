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
    if ($_GET)
    {
        $id = $_GET[ 'client' ];

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from clients where id=$id;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        
        $id          = $ligne[ 'id' ];
        $nom         = $ligne[ 'nom' ];
        $mysqli->close();

        print( "<h3>$nom</h3>");
        
    }
?>


<form action="#" method="get"> 
<select name="client">
<?php
        // affichage des voitures dans le COMBO
        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from clients;";
        $res = $mysqli->query( $query );
        while(  $ligne = $res->fetch_assoc() )
        {
            $id  = $ligne[ 'id' ];
            $nom = $ligne[ 'nom' ];
            print( "<option value=$id> $nom</option>\n" );
        }
        $mysqli->close();
?>    
</select>
<br>
<button type="submit">OK</button>
</form>
</body>
</html>