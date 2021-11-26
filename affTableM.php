<?php
    require_once "ressources.php";

    $mysqli = new mysqli($servername, $username, $password, $dbname);

<<<<<<< HEAD
    // forger la requete
    $query = "SELECT * FROM users";
    // execute la requete
    $resultat = $mysqli -> query($query);

    print( "<table>");
    while(  ($ligne = $resultat->fetch_assoc()) )
    {
        print( "<tr>\n" );
        foreach( $ligne as $key => $values )
=======
        // forger la requete
        $query  = "select nom, age from users;";
        
        // execute la requete
        $res = $mysqli->query( $query );
        //print_r( $res );
        //print( "<br><br><br>" );
        
        print( "<table>\n");
        while(  ($ligne = $res->fetch_assoc()) )
>>>>>>> origin/mysqlX
        {
            print("<td>" );
                print( $values );
            print("</td>\n" );
        }
        print( "</tr>\n" );
    }
    print( "</table><br>\n");
    
    $query = "SELECT avg(age) as moy FROM users";
    $resultat = $mysqli->query($query);

<<<<<<< HEAD
    $ligne = $resultat->fetch_assoc();
    $moy = $ligne["moy"];
    print("Moyenne des âges : $moy");
=======
        // execute la requete
        $res = $mysqli->query( "select avg(age) as moy from users;" );
        //print_r( $res );
        //print( "<br><br><br>" );
        $ligne = $res->fetch_assoc();
        //print_r( $ligne );
        $moyenne = $ligne[ "moy" ];
>>>>>>> origin/mysqlX

    //fermer la DB
    $mysqli->close();
?>
