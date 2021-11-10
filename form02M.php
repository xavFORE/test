<?php

$db_server = 'localhost';
$db_name = 'test';
$db_user_login = 'root';
$db_user_pass = '';

try {

    $dbco = new PDO("mysql:host=$db_serveur;db_name=$db_name",$db_user_login,$db_user_pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sth = $dbco->prepare("
       INSERT INTO form(nom, mail, age)
       VALUES(:nom, :mail, :age)");
       $sth->bindParam(':nom',$nom);
       $sth->bindParam(':mail',$mail);
       $sth->bindParam(':age',$age);
       $sth->execute();
       
       print("Merci !");
}

catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

?>