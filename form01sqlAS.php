<?php
// creer un table nom et pw
if ($_GET) {
  //connection 
  $servername = "localhost";
  $username = "alexis.s";
  $password = "alexis.SQL@011012";
  $database = 'ma_base';   
  // Create connection
  $mysqli = new mysqli($servername, $username, $password, $database);
  // Check connection
  if ($mysqli->connect_error) {
      die("Connection failed: " . $mysqli->connect_error);
    }
  echo "Connected successfully";
  //fin de test connection
  //allez chercher les info dans html
    $nom = $_GET["nom"];
    $prenom = $_GET["prenom"];
    $pw = $_GET["pw"];
  //fin de  chercher les info dans html
    //print( "la valeur du champ : $maValeur<br> ");
    // forger la requete
    $query  = "insert into test (nom, prenom, password) values ('$nom', '$prenom', '$pw');";
    // un print bien utile pour débugger
    print($query);
    // execute la requete
    $mysqli->query($query);
    //fermer la DB
    $mysqli->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="#" method="GET">
        <input type="text" placeholder="saisir nom" name="nom">
        <br>
        <input type="text" placeholder="saisir prenom" name="prenom">
        <br>
        <input type="text" placeholder="saisir PW" name="pw">
        <br>
        <button type="submit">OK</button>
    </form>


</body>

</html>