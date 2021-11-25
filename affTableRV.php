<?php
    // creer un table nom et pw

        require_once "ressources.php";
        
        // connecter à votre DB
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
        $query = "select avg(age) from users";
        $ress = $mysqli->query( $query );
        print_r("$ress");
        //fermer la DB
        $mysqli->close();
?>
