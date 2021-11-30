<?php
// creer un table nom et pw
if ($_GET) {
  //connection 
  require('ressources.php');
  $database = 'ma_base';
  // Create connection
  $mysqli = new mysqli($servername, $username, $password, $database);
  // Check connection
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }
  echo "Connected successfully<br>";
  //fin de test connection
  //allez chercher les info dans html
  //partie inscription
  $nom = $_GET["nom"];
  $prenom = $_GET["prenom"];
  $pw = $_GET["pw"];
  $ages = $_GET["ages"];
  //partie connection
  $prenom_connection = $_GET["prenom_connection"];
  $pw_connection = $_GET["pw_connection"];
  $query  = "SELECT id from test where prenom='$prenom_connection' and password='$pw_connection';";
  $key = "id";

  print($query);

  $res = $mysqli->query($query);
  //print_r( $res );
  if ($res->num_rows == 0) {
    print("aucune données<br>");
  } else
        if ($res->num_rows == 1) {
    print("<br>reponse sur une seule ligne<br>");
    $ligne = $res->fetch_assoc();
    $value  = $ligne[$key];
    print("value=$value<br>");
  } else {
    print("<br>reponse dans un tableau<br>");
    while ($ligne = $res->fetch_assoc()) {
      $value  = $ligne[$key];
      print("value=$value<br>");
    }
  }
  //fin de  chercher les info dans html
  // forger la requete
  //chercher si il existe le nom et pw
  
  //regarder si les champ son remplis 
  if ($nom != "" && $prenom != "" && $ages != "" && $pw != "") { // si les saisies ne sont pas vides
    $query  = "insert into test (nom, prenom, password, ages) values ('$nom', '$prenom', '$pw', '$ages');";
  } else {
    print("erreur client non créer ");
  }
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
  <p>partie inscription</p>
  <form action="#" method="GET">
    <input type="text" placeholder="saisir nom" name="nom">
    <br>
    <input type="text" placeholder="saisir prenom" name="prenom">
    <br>
    <input type="text" placeholder="saisir PW" name="pw">
    <br>
    <input type="text" placeholder="saisir ages" name="ages">
    <br>
    <button type="submit">OK</button>
  </form>
  <br>''''''''''''''''''''''''''''''''''''''''''''''''''''''''

  <p>partie connection</p>
  <br>
  <form action="#" method="GET">
    <input type="text" placeholder="saisir prenom" name="prenom_connection">
    <br>
    <input type="text" placeholder="saisir PW" name="pw_connection">
    <br>
    <button type="submit">connection</button>
  </form>
</body>

</html>