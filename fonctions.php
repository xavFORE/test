<?php
<<<<<<< HEAD

require_once "ressources.php";

        function comboBox($table){

            GLOBAL  $servername, $username, $password, $database;
        
        // affichage des voitures dans le COMBO
    
        print ("<select name='$table'>");
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from $table;";
        $res = $mysqli->query( $query );
        while(  ($ligne = $res->fetch_assoc()) )
        {
            $id  = $ligne[ 'id' ];
            $nom = $ligne[ 'nom' ];
            print( "<option value=$id> $nom</option>\n" );
        } 
        print('</select>');
    }
=======
require_once "ressources.php";

/*
function query( $q )
{
    GLOBAL $servername, $username, $password, $database;
    $mysqli = new mysqli($servername, $username, $password, $database);
    $res = $mysqli->query( $q );
    $mysqli->close();
    return $res;
}
*/

function comboBox(  $table, $query=""  )
{
    GLOBAL $servername, $username, $password, $database;

    print( "<select name='$table'>\n");
    $mysqli = new mysqli($servername, $username, $password, $database);
    if ( $query == "")
        $query  = "select * from $table;";
    //print( $query."<br>");
    $res = $mysqli->query( $query );
    while(  ($ligne = $res->fetch_assoc()) )
    {
        $id  = $ligne[ 'id' ];
        $nom = $ligne[ 'nom' ];
        print( "<option value=$id> $nom</option>\n" );
    }
    $mysqli->close();
    print( "</select>\n");
}


>>>>>>> mysqlX
?>