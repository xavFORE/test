<?php

 function comboBoxHtml ($table){
    
  require "ressources.php";
  //
    $database = "voitures";
    $mysqli = new mysqli($servername, $username, $password, $database);
    $query  = "select * from $table;";
    $res = $mysqli->query($query);
    print('<form action="#" method="get"><select name="'.$table.'" id="client">');
    while (($ligne = $res->fetch_assoc())) {
        $id  = $ligne['id'];
        $nom = $ligne['nom'];
        print('<option value="' . $id . '">');
        print($nom);
        print("</option>\n");
    }
    print('</select>');
    
 }; 
?>