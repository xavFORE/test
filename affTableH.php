<?php
    // creer un table nom et pw
        require_once "ressources.php";

        // connecter à votre DB
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        $query  = "select nom, age from users;";
        
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
                    print( $values  );
                print("</td>\n" );
            }
            print( "</tr>\n" );
        }
        print( "</table>\n");
        print( "<br><br>");

        // execute la requete
        $res = $mysqli->query( "select avg(age) as moy from users;" );
        //print_r( $res );
        //print( "<br><br><br>" );
        $ligne = $res->fetch_assoc();
        //print_r( $ligne );
        $moyenne = $ligne[ "moy" ];

        print( "moyenne : $moyenne<br>");

        

        //fermer la DB
        $mysqli->close();
?>
