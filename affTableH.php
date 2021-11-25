<?php
require_once "ressources.php";
    // creer un table nom et pw
    
        
        // connecter à votre DB
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        $query  = "select * from clients;";
        
        // execute la requete
        $res = $mysqli->query( $query );
         $moyen = 0;
         $total = 0;

        print( "<table>\n");
        while(  ($ligne = $res->fetch_assoc()) )
        {
            $moyen+= $ligne["age"];
            $total ++;

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
        $resulta = $moyen/$total;
         print("moyene des age : $resulta");
        //fermer la DB
        $mysqli->close();
?>
