<?php

    if ( $_GET )
    {
        $maValeur = $_GET[ "carouf" ];
        $mayName = $_GET[ "lola" ];

        print( "la valeur du champ : $maValeur<br> ");
        $servername = "localhost";
        $username = "root";
        $password = "";
        $maBase = "toto";
        $mysqli = new mysqli($servername, $username, $password,$maBase);

        $query = "insert into personnes (nom, age) values ('$maValeur', '$mayName')";
        print($query);

        $mysqli->query($query);
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
    <input type="text" placeholder="saisir nom" name="carouf" >
    <input type="text" placeholder="saisir age" name="lola" >

    <button type="submit">OK</button>
</form>


</body>
</html>