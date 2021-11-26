
<?php
    // creer un table nom et pw
    require_once "ressources.php";

    if ( $_GET )
    {
        $nom = $_GET[ "nom" ];
        $pw = $_GET[ "pw" ];


        //print( "la valeur du champ : $maValeur<br> ");
        

        // connecter à votre DB
        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);


        
        // forger la requete
        $query  = "select id from form1 where nom='$nom' and pw='$pw';";
        // un print bien utile pour débugger
        print( $query );
        $res = $mysqli->query( $query );

        print( "<table>\n");
        while(  ($ligne = $res->fetch_assoc()) )
        {
            print( "<tr>\n" );
            foreach( $ligne as $key => $values )
            {
                print("<td>\n" );
                    print( $values  );
                print("</td>\n" );
            }
            print( "</tr>\n" );
        }
        print( "</table>\n");
        print( "<br><br>");

        // execute la requete
        $mysqli->query( $query );
      
        //fermer la DBgit
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