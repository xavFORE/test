<?php

    // creer un table nom et pw


    if ( $_GET )
    {
        $preRoot = $_GET[ "prenom" ];
        $nomRoot = $_GET[ "nom" ];
        $ageRoot = $_GET[ "age" ];
        $mdpRoot = $_GET[ "password" ];

        //print( "la valeur du champ : $maValeur<br> ");
        

        // connecter à votre DB
        $servername = "localhost";
        $database = "root";
        $password = "";
        $mayname = "toto";

        $mysqli = new mysqli($servername, $database, $password, $mayname);

        // forger la requete
        $query  = "insert into personnes (nom, age, mdp,prenom) values ('$nomRoot','$ageRoot', '$mdpRoot','$preRoot')";
        // un print bien utile pour débugger
        print( $query );

        // execute la requete
        $mysqli->query( $query );
        //fermer la DB
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
    <input type="text" placeholder="saisir prénom" name="prenom" >
    <br>
    <input type="text" placeholder="saisir nom" name="nom" >
    <br>
    <input type="text" placeholder="saisir age" name="age" >
    <br>
    <input type="text" placeholder="saisir PW" name="password" >
    <br>
    <button type="submit">OK</button>
</form>


</body>
</html>