<?php
function combobox ($table){
  
GLOBAL $servername, $username, $password, $database;
        // affichage des voitures dans le COMBO
        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        print(   "<select name='$table'>\n");
        $query  = "select * from $table;";
        $res = $mysqli->query( $query );
        while(  ($ligne = $res->fetch_assoc()) )
        {
            $id  = $ligne[ 'id' ];
            $nom = $ligne[ 'nom' ];
            print( "<option value=$id> $nom</option>\n" );
        }
        print(   '</select>');

        $mysqli->close();
    }
?>    






