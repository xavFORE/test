<?php

    // creer un table nom et pw


    if ( $_GET )
    {
        $nom = $_GET[ "nom" ];
        $pw = $_GET[ "pw" ];
        $donnees = $reponse->fetch();
        //print( "la valeur du champ : $maValeur<br> ");
        

        // connecter à votre DB
        $servername = "localhost";
        $database = "formulaire";
        $username = "root";
        $password = "";
        $mysqli = new mysqli($servername, $username, $password, $database);


        
        // forger la requete
        $query  = "insert into form1 (nom, pw) values ('$nom','$pw');";
        // un print bien utile pour débugger
        print( $query );

        // execute la requete
        $mysqli->query( $query );
        //fermer la DBgit
        $mysqli->close();
        
    }
    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="#" method="GET">
    <input type="text" placeholder="saisir nom" name="nom" >
    <br>
    <input type="text" placeholder="saisir PW" name="pw" >
    <br>
    <button type="submit">OK</button>
</form>



</body>
</html>

