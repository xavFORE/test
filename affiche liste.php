<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<iframe src="https://www.w3schools.com" title="">
</iframe>
</body>
</html>
<style>

table, th, td {
  border: 1px solid black;




</style>

<?php
    // creer un table nom et pw
        require_once "ressources.php";
        require_once "fonctions.php";

        // connecter à votre DB
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        $query  = "select nom, auteur from livres;";
        // execute la requete
        $res = $mysqli->query( $query );
        //print_r( $res );
        //print( "<br><br><br>" );
        
        print( "<table>\n");
        while(  ($ligne = $res->fetch_assoc()) )
        {
            print( "<tr>\n" );
            foreach( $ligne as $key => $values )
            {
                print("<td>\n" );
                    print( utf8_encode($values)  );
                print("</td>\n" );
            }
            print( "</tr>\n" );
        }
        print( "</table>\n");
        print( "<br><br>");

        
        //fermer la DB
        $mysqli->close();
?>
