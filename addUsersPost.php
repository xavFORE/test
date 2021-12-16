<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $login = $_POST['login'];
    $pw = $_POST['pw']; 
   
    $query  = "insert into users ( login, pw ) values ('$login', $pw);";
    //print( $query );
    query( $query );
?>