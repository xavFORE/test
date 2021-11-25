<?php

    require_once "ressources.php";

    if ($_GET)
    {
        $mysqli = new mysqli($servername, $username, $password, $dbname);

        if ($mysqli -> connect_error) {
            die("Failed to connect to MySQL : " . $mysqli -> connect_error);
            exit();
        }
    
        $query = "SELECT nom FROM users";
        $resultat = $mysqli->query($query);
    
        $ligne = $resultat->fetch_assoc();
        $moy = $ligne["moy"];
        print("Moyenne des âges : $moy");

        $mysqli->close();
    }

?>

