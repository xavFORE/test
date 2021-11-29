
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
        //  select id from users where nom='Germaine' and pw='123';
        $query  = "select * from users where nom='$nom' and pw='$pw';";
        // un print bien utile pour débugger
        print( $query."<br>" );

        $res = $mysqli->query( $query );
        //print_r( $res );
        if ( $res->num_rows > 0 )
        {
            print( "login valide<br>");
            $ligne = $res->fetch_assoc();
            //print_r( $ligne );
            $id = $ligne[ 'id' ];
            $nom = $ligne[ 'nom' ];
            $age = $ligne[ 'age' ];
            print( "bonjour $nom, tu as $age ans et ton ID est $id<br>");
        }
        else
            print( "login invalide<br>");



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
    <input type="text" placeholder="saisir login" name="nom" >
    <br>
    <input type="text" placeholder="saisir PW" name="pw" >
    <br>
    <button type="submit">CONNECT</button>
</form>


</body>
</html>