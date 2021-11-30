<?php

function comboBox( $table )
{
    GLOBAL $servername, $username, $password, $dbname;

    print("<select name='$table'>\n");

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if ($mysqli -> connect_error) {
        die("Failed to connect to MySQL : " . $mysqli -> connect_error);
        exit();
    }
                
    $query = "SELECT * FROM $table;";
    $resultat = $mysqli->query($query);

    while(  ($ligne = $resultat->fetch_assoc()) )
    {
        $id  = $ligne[ 'id' ];
        $nom = $ligne[ 'nom' ];
        print( "<option value=$id>$nom</option>\n" );
    }

    $mysqli->close();

    print("</select>\n");
}

?>