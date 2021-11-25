<?php
    require_once "ressources.php";

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    // forger la requete
    $sqlSelect = "SELECT * FROM personnes";
    
    // execute la requete
    $resultat = $mysqli -> query($sqlSelect);

    print( "<table>");
    while(  ($ligne = $resultat->fetch_assoc()) )
    {
        print( "<tr>\n" );
        foreach( $ligne as $key => $values )
        {
            print("<td>" );
                print( $values  );
            print("</td>\n" );
        }
        print( "</tr>\n" );
    }
    print( "</table>\n");

    //fermer la DB
    $mysqli->close();
?>
