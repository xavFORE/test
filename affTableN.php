<?php
    // creer un table nom et pw
    
        
        // connecter à votre DB
        $servername = "localhost";
        $database = "toto";
        $username = "root";
        $password = "";
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        $query  = "insert into nellyfea (nom, pw) values ('$nom', '$pw' );";
        // un print bien utile pour débugger
        print( $query );

        // execute la requete
        $mysqli->query( $query );
        //fermer la DB
        $mysqli->close();
    
?>
