<<<<<<< HEAD
<?php

    // creer un table nom et pw


    if ( $_GET )
    {
        $nom = $_GET[ "nom" ];
        $pw = $_GET[ "pw" ];
        //print( "la valeur du champ : $maValeur<br> ");
        

=======

<?php
    // creer un table nom et pw
    require_once "ressources.php";

    if ( $_GET )
    {
        $nom = $_GET[ "nom" ];
        $pw  = $_GET[ "pw" ];
        $age = $_GET[ "age" ];
        //print( "la valeur du champ : $maValeur<br> ");
        
>>>>>>> origin/mysqlX
        // connecter à votre DB
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
<<<<<<< HEAD
<<<<<<< HEAD
        $query  = "insert into user (nom) values ('$nom');";
=======
        $query  = "select * from users;";
>>>>>>> origin/mysqlX
=======
        $query  = "insert into users (nom, pw, age) values ( '$nom', '$pw', $age );";
>>>>>>> origin/mysqlX
        // un print bien utile pour débugger
        print( $query );

        // execute la requete
<<<<<<< HEAD
        $mysqli->query( $query );
=======
        $ret = $mysqli->query( $query );
>>>>>>> origin/mysqlX
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
    <input type="text" placeholder="saisir nom" name="nom" >
    <br>
    <input type="text" placeholder="saisir PW" name="pw" >
    <br>
    <input type="text" placeholder="saisir age" name="age" >
    <br>
    <button type="submit">OK</button>
</form>


</body>
</html>