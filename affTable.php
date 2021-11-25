<?php
    // creer un table nom et pw

        // connecter à votre DB
        $servername = "localhost";
        $database = "test";
        $username = "xxx";
        $password = "xxx";
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        $query  = "select * from users;";
        
        // execute la requete
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

        //fermer la DB
        $mysqli->close();
?>
