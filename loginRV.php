
<?php
    // creer un table nom et pw
    require_once "ressources.php";

    if ( $_GET )
    {
        $nom = $_GET[ "nom" ];
        $pw  = $_GET[ "pw" ];
        //print( "la valeur du champ : $maValeur<br> ");
        
        // connecter à votre DB
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        
        $query  = "select id from users where nom='$nom' and pw='$pw';";
        // un print bien utile pour débugger
        print( $query );

        // execute la requete
        $ret = $mysqli->query( $query );
        if ( $ret-> num_rows > 0)
        {
        $ligne = $ret->fetch_assoc();
        $id = $ligne ["id"];
        print("votre ID : $id <br>"); 
        //fermer la DB
       }
       else
        print("login invalide <br>"); 

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
    <input type="text" placeholder="saisir login" name="nom" >
    <br>
    <input type="text" placeholder="saisir PW" name="pw" >
    <br>
    <button type="submit">CONNECT</button>
</form>


</body>
</html>