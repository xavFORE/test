<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $login = $_POST['login'];
    $pw = $_POST['pw']; 
    $mail = $_POST['mail']; 
    $query  = "insert into users ( mail,login, pw ) values ('$mail','$login','$pw');";
    //print( $query );
    query( $query );
?>