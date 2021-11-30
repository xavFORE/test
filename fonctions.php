<?php

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
?>