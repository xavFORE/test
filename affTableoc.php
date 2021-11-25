<?php
    // creer un table nom et pw

        // connecter à votre DB
require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        $query  = "select * from form1;";
        
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


        $query  = "SELECT avg(age) FROM `form1`;";


      
  
        
        $resultat =$mysqli->query( $query );
        
        $ligne = $resultat->fetch_assoc();


        $moyenne = $ligne [ "moy" ];


        print("moyenne :$moyenne <br>");
  
       
       
       
       
       
       
       
    

        

        //fermer la DB
       $mysqli->close();
?>