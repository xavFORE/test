<?php
    // creer un table nom et pw

        // connecter à votre DB
    
        require "ressources.php";
        require_once "fonctions.php";
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        $query  = "select * from livres;";
        
        // execute la requete
        $res = $mysqli->query( $query );

        print( "<table>\n");
        while(  ($ligne = $res->fetch_assoc()) )
        {
            print( "<tr>\n" );
            foreach( $ligne as $key => $values )
            {
                print("<td>\n" );
                    print(utf8_encode($values)   );
                print("</td>\n" );
            }
            print( "</tr>\n" );
        }
        print( "</table>\n");

       $res = $mysqli->query( "$query");
        
        // execute la requete
       $ligne = $res->fetch_assoc() ;
      


       
        $mysqli->close();


?>
