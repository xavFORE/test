<?php
    // creer un table nom et pw
    //require_once "ressources.php";
    $servername = "mysql:host=localhost;dbname=test";
    $username = "xxx";
    $password = "xxx";
    $database = 'test';

        // connecter à votre DB
        $pdo = new PDO($servername, $username, $password );
        // la variable $pdo est le handle (une poignée) 
        // qui permet de controler la base de donner  


        // forger la requete
        $rs = $pdo->prepare("SELECT * FROM  user" );
        // retourne une variable $rs le handle sur votre requete
        
        // execution de la requete
        $rs->execute();

        // fetch -> retirer quelque chose
        // retirer une ligne du tableau de résultat    
        // tant que j'ai des ligne dans le tableau, je boucle 
        while(   $ligne = $rs->fetch(PDO::FETCH_ASSOC) )
        {
            // traitement 
            $nom = $ligne[  'nom' ];
            print( "$nom<br>" );
        }
?>