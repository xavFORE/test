<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
<?php

    //sans cookies
    ini_set("session.use_cookies", 0);
    ini_set("session.use_only_cookies", 0);
    ini_set("session.use_trans_sid", 1);
    ini_set("session.cache_limiter", "");
    session_start();

    //avec cookies 
    //session_start();
    //Enregistrer valeur
    $nom = 'toto';
    $_SESSION['nom'] = $nom;

    ?>
    <a href="recup.php">envoie</a>

</body>

</html>