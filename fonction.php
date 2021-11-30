<?php


/*
function query($q) {
$mysqli = new mysqli($servername, $username, $password, $database);
$query  = "select * from $q;";
$res = $mysqli->query( $query );
$mysqli 
}
*/

 require_once "ressources.php";

function comboBox($table)
{
   print("<select name='$table'>");

  
            GLOBAL $servername, $username, $password, $database;
            
            //print("$servername, $username, $password, $database");
            $mysqli = new mysqli($servername, $username, $password, $database);
            $query  = "select * from $table;";
            $res = $mysqli->query( $query );
            while(  ($ligne = $res->fetch_assoc()) )
            {
                $id  = $ligne[ 'id' ];
                $nom = $ligne[ 'nom' ];
                print( "<option value=$id> $nom</option>\n" );
            }
            $mysqli->close();
  
    print("</select>");
}



?>