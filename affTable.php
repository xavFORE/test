<?php
    require_once "ressources.php";

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    // forger la requete
    $query = "SELECT * FROM users";
    // execute la requete
    $resultat = $mysqli -> query($query);

    print( "<table>");
    while(  ($ligne = $resultat->fetch_assoc()) )
    {
        print( "<tr>\n" );
        foreach( $ligne as $key => $values )
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

    $ligne = $resultat->fetch_assoc();
    $moy = $ligne["moy"];
    print("Moyenne des âges : $moy");

    //fermer la DB
    $mysqli->close();
?>
